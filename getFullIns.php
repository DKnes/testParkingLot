<?php
    $instructData=json_decode(file_get_contents("instruct.json"));//obj
    $lotData=json_decode(file_get_contents("lotdata.json"));//array
    $freeLocation;
    for($i=0;$i<8;$i++)
    {
        if($lotData[$i]==0)
        {
            $freeLocation=$i;
            break;
        }
    }
    //echo $freeLocation;
    $instruct=(string)$instructData->{(string)$freeLocation};
    $instruct.=",";
    $instruct.=(string)$instructData->{"t".((string)$freeLocation)};
    echo $instruct;
?>