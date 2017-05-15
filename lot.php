<?php
    $filename="lotdata.json";
    $arr=Array(($_GET['1']),$_GET['2'],$_GET['3'],
    $_GET['4'],$_GET['5'],$_GET['6']);
    $file=fopen($filename,'w');
    fwrite($file,json_encode($arr));
    fclose($file);
