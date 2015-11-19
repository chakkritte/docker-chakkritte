from pyAudioAnalysis import audioTrainTest as aT
aT.featureAndTrain(["/var/www/html/audio/apple/","/var/www/html/audio/banana/","/var/www/html/audio/kiwi/","/var/www/html/audio/lime/","/var/www/html/audio/orange/","/var/www/html/audio/peach/","/var/www/html/audio/pineapple/"],0.125, 0.05, aT.shortTermWindow, aT.shortTermStep, "svm", "/var/www/html/knnAll")

