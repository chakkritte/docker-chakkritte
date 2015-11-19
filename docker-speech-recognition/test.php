<?php 

$command = escapeshellcmd('python /root/pyAudioAnalysis/audioAnalysis.py classifyFile -i audio/apple/apple01.wav --model knn --classifier knnAll');
$output = shell_exec($command);
echo $output;

?>
