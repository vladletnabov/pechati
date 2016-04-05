<?php
require_once "filialsData.php";
$resultJson= json_encode($filialDataList, JSON_UNESCAPED_UNICODE);
$resultJson = iconv('UTF-8','CP1251',$resultJson);
echo $resultJson;
?>