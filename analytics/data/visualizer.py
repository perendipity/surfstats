#! /usr/bin/python
import argparse
import os
import pandas as pd
from pandas import concat, DataFrame, Series
import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
from pylab import savefig
import numpy as np
import pylab as pl

def sub_gravity(z):
    return z - 9.8

# take stupid string from end of raw file that has ';' and convert to int
# then convert ms to s since the accel is in m/s/s
# CANNOT HAVE SIDE EFFECTS
def stupid_to_sec(stupid):
    return (int(stupid.strip(';')))/1000.0 #fp

def calc_dt_interval(ms):
    rows = len(ms)
    dt_arr = np.zeros(rows)
    for i in range(rows):
        if i == 0: # 'previous' position is the zeros already present
            dt_arr[i] = ms[i]
        else:
            dt_arr[i] = ms[i] - ms[i-1]

    df_dt = DataFrame({'dt':dt_arr})
    return df_dt

# ADD KALMAN FILTER
def calc_pos(trial):
    # get position change =velocity * time
    ser_pos_change_x = trial.velX * trial.dt
    ser_pos_change_y = trial.velY * trial.dt
    ser_pos_change_z = trial.velZ * trial.dt
    rows = len(ser_pos_change_x)
    pos_arr_x = np.zeros((rows))
    pos_arr_y = np.zeros((rows))
    pos_arr_z = np.zeros((rows))

    for i in range(rows):
        if i == 0: # 'previous' position is the zeros already present
            pos_arr_x[i] += ser_pos_change_x[i]
            pos_arr_y[i] += ser_pos_change_y[i]
            pos_arr_z[i] += ser_pos_change_z[i]
        else:
            pos_arr_x[i] += (pos_arr_x[i-1]+ser_pos_change_x[i])
            pos_arr_y[i] += (pos_arr_y[i-1]+ser_pos_change_y[i])
            pos_arr_z[i] += (pos_arr_z[i-1]+ser_pos_change_z[i])
    df_pos = DataFrame({'posX':pos_arr_x,'posY':pos_arr_y,'posZ':pos_arr_z})
    return df_pos

def graph_3d_position(trial, experiment_type, trial_num, session):
    print 'Graphing...'
    fig = plt.figure()
    ax = fig.add_subplot(111, projection='3d')
    ax.plot(trial.posX, trial.posY, trial.posZ, label='shred line - ' + experiment_type +
        '('+trial_num+')')
    ax.legend(loc='upper center', bbox_to_anchor=(0., 1.02, 1., .102), fancybox=True, shadow=True)
    ax.set_xlabel('X')
    ax.set_ylabel('Y')
    ax.set_zlabel('Z')
    # NEED TO FIX THE XLIM, YLIM AND FIGURE OUT HOW TO DO ZLIM
    savefig('graphs/'+session+'shred3d/'+experiment_type+'/'+trial_num+'.png', bbox_inches=0)
    plt.close()

def extract(session, experiment_type, trial_num, cnames):
    print 'Loading... '
    trial = pd.read_table(session+'/'+experiment_type+'/'+trial_num,
        sep='; ', names=cnames, skiprows=1, skip_footer=1)

    # fix time column
    ser_ms = trial.s_start.apply(stupid_to_sec) 
    df_ms = DataFrame({'ms':ser_ms})
    trial = trial.join([df_ms])
    trial.drop(labels={'s_start'}, axis=1)

    # add dt interval 
    df_dt = calc_dt_interval(trial.ms)
    trial = trial.join([df_dt])

    # get velocity=acceleration * time (as series)
    ser_vel_x = trial.accX * trial.dt
    ser_vel_y = trial.accY * trial.dt
    ser_vel_z = trial.accZ.apply(sub_gravity) * trial.dt
    df_vel = DataFrame({'velX':ser_vel_x,'velY':ser_vel_y,'velZ':ser_vel_z})
    trial = trial.join([df_vel])

    # determine position
    df_pos = calc_pos(trial)
    trial = trial.join([df_pos])
    return trial

#todo should track length of time to process trial
def visualize(session):

    #should make global...
    cnames = ['accX', 'accY', 'accZ', 'lux', 'magX', 'magY', 'magZ', 'orX', 'orY', 'orZ',
            'prox', 'temp', 'level','volt', 's_start']
    for experiment_type in os.listdir(session+'/'):
        for trial_num in os.listdir(session+'/'+experiment_type+'/'):
            print 'Session: {} | Experiment: {} | Run: {}'.format(session, experiment_type, trial_num)
            trial = extract(session, experiment_type, trial_num, cnames)
            graph_3d_position(trial, experiment_type, trial_num, session)
            # todo should save the (pos) dataframe to disc / put in database

if __name__=="__main__":
    parser = argparse.ArgumentParser()
    parser.add_argument("session", help="session folder containing the experiments and trials")
    args = parser.parse_args()
    visualize(args.session)