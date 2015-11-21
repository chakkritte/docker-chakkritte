from pyAudioAnalysis import audioTrainTest as aT
aT.featureAndTrain(["/var/www/html/data4/train/Artifact","/var/www/html/data4/train/Murmur","/var/www/html/data4/train/Normal"],0.125, 0.0625, aT.shortTermWindow, aT.shortTermStep, "svm", "/var/www/html/knnAll")

