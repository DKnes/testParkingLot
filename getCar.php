<?php
    //echo "heh";
    ini_set('date.timezone', 'Asia/Shanghai');
    $getCarDataFile="getCarData.json";
    error_reporting(0);
    $dataJson;
    if (file_exists($getCarDataFile)) {
        $dataJson=file_get_contents($getCarDataFile);
    }
    // echo "hehe";
    $dataJson=json_decode($dataJson, true);
    //$dataJson=Array();
    // echo date('[Y-m-d H:i:s]',time());
    array_unshift($dataJson, date('[Y-m-d H:i:s]', time()));
    //$arr=[1,2,3];
    //echo var_dump($arr);
    $tmp=fopen($getCarDataFile, 'w');
    fwrite($tmp, json_encode($dataJson));
    fclose($tmp);
    // echo "hehe";
