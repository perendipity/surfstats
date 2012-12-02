#! /usr/bin/python
import argparse
import os
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
	print samples
	print classes
	classify(samples, classes)

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


def classify(samples, classes):
	# create the classifer
	print 'creating clasifier'
	clf = svm.SVC(kernel='linear', C=1.0)
	print 'fitting to classifier'
	print clf.fit(samples, classes)
	w = clf.coef_[0]
	a = -w[0] / w[1]
	xx = np.linspace(-5, 5)
	yy = a * xx - clf.intercept_[0] / w[1]

	# plot separating hyperplanes and samples

	#h0 = plt.plot(xx, yy, 'k-', label='no weights')
	#pl.scatter(samples[:, 0], samples[:, 1],  c=y, cmap=pl.cm.Paired)
	#plt.legend()
	#plt.axis('tight')

	print'plotting'
	fig = plt.figure()
	ax = fig.add_subplot(111, projection='3d')
	n = xs
	sho100 = samples[0]
	ys = samples[1]
	zs = samples[2]
	ax.scatter(xs, ys, zs, c='r', marker='o')
	xs = samples[0]
	ys = samples[1]
	zs = samples[2]
	ax.scatter(xs, ys, zs, c='b', marker='^')

	ax.set_xlabel('X Label')
	ax.set_ylabel('Y Label')
	ax.set_zlabel('Z Label')

	plt.show()

def randrange(n, vmin, vmax):
        return (vmax-vmin)*np.random.rand(n) + vmin

if __name__=="__main__":
	parser = argparse.ArgumentParser()
	parser.add_argument("session", help="session folder containing the experiments and trials")
	parser.add_argument("pos_experiment_type", help="positive training set")
	#parser.add_argument("--cnames", help="column names")
	args = parser.parse_args()
	classify_experiment(args.pos_experiment_type, args.session)
