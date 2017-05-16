<?php
	$dataJson=file_get_contents("getInstruct.json");
	$obj=json_decode($dataJson,true);
	if($obj["flag"]==0)
	{
		$sendData=$obj["data"];
		echo $sendData;
		$obj["flag"]=1;
		$dataFile=fopen("getInstruct.json","w");
		fwrite($dataFile,json_encode($obj));
		fclose($dataFile);
	}
	else
		echo -1;
?>
	
