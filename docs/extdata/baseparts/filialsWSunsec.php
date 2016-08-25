<?php
require_once "filialsData.php";
$filialDataListWS = $filialDataList;
foreach ($filialDataListWS as $key => $value) {
	$filialDataListWS[$key]['email']='';
	if (array_key_exists('subFilials', $value)){
		foreach($filialDataListWS[$key]['subFilials'] as $keySub => $valSub){
			$filialDataListWS[$key]['subFilials'][$keySub]['email']='';
		}
	}
}
$resultJson= json_encode($filialDataList, JSON_UNESCAPED_UNICODE);
//$resultJson = iconv('UTF-8','CP1251',$resultJson);
header('Content-Type: text/javascript; charset=utf-8');
header('Access-Control-Allow-Origin: *');
echo $resultJson;
?>