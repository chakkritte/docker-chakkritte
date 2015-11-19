<?php

$file_path = "uploads/";

//receive parameters
$filepath=$_POST['filepath'];
//receive media files(image , audio and video)
$file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) 
{
$command = escapeshellcmd("python /root/pyAudioAnalysis/audioAnalysis.py classifyFile -i ".$file_path." --model svm --classifier knnAll");
//echo $command ;
$output = shell_exec($command);
echo $output;
//echo "Success";
}
?>
