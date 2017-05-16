<?php
    header("Access-Control-Allow-Origin:*");
    header("Access-Control-Allow-Methods:POST,GET");
    //echo "heh";
    ini_set('date.timezone', 'Asia/Shanghai');
    $carCameDataFile="getCarData.json";
    error_reporting(0);
    $arr=json_decode(file_get_contents($carCameDataFile));
    echo json_encode(Array($arr[0],$arr[1],$arr[2],$arr[3]));
