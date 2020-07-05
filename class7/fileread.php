<?php
$fr=fopen("sai.txt","r");
$fread=fread($fr,filesize("sai.txt"));
echo $fread;
fclose($fr);
?>