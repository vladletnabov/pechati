<?php
require_once "filialsData.php";
$filialDataListWS = $filialDataListCP1251;
foreach ($filialDataListWS as $key => $value) {
	echo "<hr /><b>", $key, "</b><br />e-mail: ", $filialDataListWS[$key]['email'],"<br />";
}
/*$resultJson= json_encode($filialDataListWS, JSON_UNESCAPED_UNICODE);
$resultJson = iconv('UTF-8','CP1251',$resultJson);
echo $resultJson;*/

?>