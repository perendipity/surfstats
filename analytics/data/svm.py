#! /usr/bin/python
import argparse
import os
import sys
import pandas as pd
from pandas import concat, DataFrame
import matplotlib.pyplot as plt
from pylab import savefig
from pylab import ylim
import numpy as np
import pylab as pl
from sklearn import svm, datasets
from mpl_toolkits.mplot3d import Axes3D

def classify_experiment(pos_experiment_type, session):
    (samples, classes) = extract(pos_experiment_type, session)
    ###print samples
    ###print classes
    fit_svm(create_svm('ghh'), samples, classes)
    visualize(samples,classes)

def extract(pos_experiment_type, session):
    cnames = ['accX', 'accY', 'accZ', 'lux', 'magX', 'magY', 'magZ', 'orX', 'orY', 'orZ', 'prox', 'temp', 'level','volt', 's_start']
    pos_container = []
    neg_container = []
    pos_rows = 0
    neg_rows = 0
    for experiment_type in os.listdir(session+'/'):
        print experiment_type

        for trial_num in os.listdir(session+'/'+experiment_type+'/'):
            print 'READING... '+session+'/'+experiment_type+'/'+trial_num
            trial = pd.read_table(session+'/'+experiment_type+'/'+trial_num, sep='; ', names=cnames, skiprows=1, skip_footer=1)
            #accs = [trial['accX'], trial['accY'], trial['accZ']]
            dfX = trial.ix[:,['accX']]
            dfY = trial.ix[:,['accY']]
            dfZ = trial.ix[:,['accZ']]
            dfXYZ = dfX.join([dfY, dfZ])
            if experiment_type == pos_experiment_type:
                print 'positive trial'
                pos_container.append(dfXYZ)
                pos_rows += dfXYZ.accX.count()
            else:
                neg_container.append(dfXYZ)
                neg_rows += dfXYZ.accX.count()
    classes = np.append(np.ones(pos_rows), np.zeros(neg_rows)).tolist()

    trial_container = pos_container + neg_container
    trials = concat(trial_container, ignore_index=True)	
    samples = [tuple(x) for x in trials.values]
    return (samples, classes)

def create_svm(kf='linear', C=1.0, g=0.0, d=3):
    """ Instantiate the SVM

    kf -- kernel function (default 'linear')
    C  -- soft margin (default 1.0)
    g  -- gamma (default 0.0)
    d  -- degree (default 3)

    """
    print 'instantiating ' + kf + ' kernel SVM ...'
    while(True):
        if kf == 'linear':
            clf = svm.SVC(kernel='linear', C=C, gamma=g, degree=d)
            break
        elif kf == 'rbf':
            clf = svm.SVC(kernel='rbf', C=C, gamma=g, degree=d)
            break
        elif kf == 'poly':
            clf = svm.SVC(kernel='poly', C=C, gamma=g, degree=d)
            break
        else:
            print "[!] incorrect kernel function specification; please re-enter: "
            kf = sys.stdin.readline().rstrip()
    return clf

def fit_svm(clf, samples, classes):
    """ Train the SVM on sample data with classifications
    
    clf     -- instantiated SVM
    samples -- 2D array with dimensions n_samples by n_features  
    classes -- array of length n_samples specifying class membership 

    """
    print 'fitting SVM ... '
    clf.fit(samples, classes)
   
def visualize(samples, classes):    
    print 'plotting'
    fig = plt.figure()
    ax = fig.add_subplot(111, projection='3d')
    xs = extract_from_index(samples,classes,0)
    ys = extract_from_index(samples,classes,1)
    zs = extract_from_index(samples,classes,2)
    
    for i, c in [(0,'r'),(1,'b')]:
        ax.scatter(xs[i], ys[i], zs[i], c=c)

    ax.set_xlabel('X')
    ax.set_ylabel('Y')
    ax.set_zlabel('Z')
    
    plt.show()

def extract_from_index(samples,classes,i):
    ans = ([],[])
    for j, samp in enumerate(samples):
        if classes[j] == 1:
            ans[0].append(samp[i])
        else:
            ans[1].append(samp[i])
    return ans

if __name__=="__main__":
    parser = argparse.ArgumentParser()
    parser.add_argument("session", help="session folder containing the experiments and trials")
    parser.add_argument("pos_experiment_type", help="positive training set")
	#parser.add_argument("--cnames", help="column names")
    args = parser.parse_args()
    classify_experiment(args.pos_experiment_type, args.session)

