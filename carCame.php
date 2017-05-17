<?php
    //echo "heh";
    ini_set('date.timezone', 'Asia/Shanghai');
    $carCameDataFile="carCameData.json";
    error_reporting(0);
    $dataJson;
    if (file_exists($carCameDataFile)) {
        $dataJson=file_get_contents($carCameDataFile);
    }
    // echo "hehe";
    $dataJson=json_decode($dataJson, true);
    //$dataJson=Array();
    // echo date('[Y-m-d H:i:s]',time());
    array_unshift($dataJson, date('[Y-m-d H:i:s]', time()));
    //$arr=[1,2,3];
    //echo var_dump($arr);
    $tmp=fopen($carCameDataFile, 'w');
    fwrite($tmp, json_encode($dataJson));
    fclose($tmp);
    // echo "hehe";
