#! /usr/bin/python
import argparse
import os
import pandas as pd
from pandas import concat, DataFrame
import matplotlib.pyplot as plt
from pylab import savefig

def graph_session(session):

	cnames = ['accX', 'accY', 'accZ', 'lux', 'magX', 'magY', 'magZ', 'orX', 'orY', 'orZ', 'prox', 'temp', 'level','volt', 's_start']
	for experiment_type in os.listdir(session+'/'):
		trial_container = []
		print experiment_type
		for trial_num in os.listdir(session+'/'+experiment_type+'/'):
			print 'READING... '+session+'/'+experiment_type+'/'+trial_num
			trial = pd.read_table(session+'/'+experiment_type+'/'+trial_num, sep='; ', names=cnames, skiprows=1)
			trial_container.append(trial)

		print 'trail container len'
		print len(trial_container)
		trials = concat(trial_container, ignore_index=True)
		trials['accX'].plot()
		trials['accY'].plot()
		trials['accZ'].plot()
		plt.legend(['X', 'Y', 'Z'], loc='upper center', bbox_to_anchor=(0.5, -0.10),
          fancybox=True, shadow=True, ncol=3, title='Acceleration ('+experiment_type+')')
		savefig('graphs/'+session+'_'+experiment_type+'_accXYZ.png', bbox_inches=0)
		plt.close()
		
		#todo save the concatenated experiments to disk - should actually be separate so you aren't saving every time you graph
		#trials.drop(axis=1, labels=cnames) #should empty object
		
		

if __name__=="__main__":
	parser = argparse.ArgumentParser()
	parser.add_argument("session", help="session folder containing the experiments and trials")
	#parser.add_argument("--cnames", help="column names")
	args = parser.parse_args()
	graph_session(args.session)