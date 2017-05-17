<?php
    
    header("Access-Control-Allow-Origin:*");
    header("Access-Control-Allow-Methods:POST,GET");
    //echo "heh";
    ini_set('date.timezone', 'Asia/Shanghai');
    $filename="lotdata.json";
    error_reporting(0);
    //$arr=json_decode(file_get_contents($filename));
    $arr=file_get_contents($filename);
    echo $arr;

