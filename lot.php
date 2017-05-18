<?php
    $fileName="lotdata.json";
    if(file_exists($fileName))
        $dataJson=file_get_contents($fileName);
    else
    {
        echo "creating <br>";
        $dataJson=array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0);
        $dataJson=json_encode($dataJson);
    }
    $dataJson=json_decode($dataJson,true);
    $lotNum=(int)$_GET['0'];//From 0 to 7
    $lotHasCar=(int)$_GET['1'];//0:false 1:true
    //echo $lotNum; echo $lotHasCar;
    $dataJson[$lotNum]=$lotHasCar;
    echo json_encode($dataJson);
    $file=fopen($fileName,'w');
    fwrite($file,json_encode($dataJson));
    fclose($file);
