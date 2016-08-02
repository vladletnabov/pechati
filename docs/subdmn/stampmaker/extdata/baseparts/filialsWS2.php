<?php
require_once "filialsData.php";
$filialDataListWS = $filialDataListCP1251;
echo "<hr />";
$header_tbl =  "Список филиалов общий";
$header_tbl = iconv('UTF-8','CP1251',$header_tbl);
$mainText = "&nbsp&nbsp&nbsp&nbsp присуствие на главной: ";
$mainText = iconv('UTF-8','CP1251',$mainText);
$contactsText = "&nbsp&nbsp&nbsp&nbsp присуствие на странице контактов: ";
$contactsText = iconv('UTF-8','CP1251',$contactsText);
$no = 'нет';
$no = iconv('UTF-8','CP1251',$no);
$yes = 'да';
$yes = iconv('UTF-8','CP1251',$yes);
$phone = "&nbsp&nbsp&nbsp&nbsp телефон: ";
$phone = iconv('UTF-8','CP1251',$phone);
$target = "&nbsp&nbsp&nbsp&nbsp target: ";
echo $header_tbl;
echo "<hr />";
$ind = 0;
foreach ($filialDataListWS as $key => $value) {
	#echo "<hr /><b>", $key, "</b><br />e-mail: ", $filialDataListWS[$key]['email'],"<br />";
	if (($filialDataListWS[$key]['mainList']>0)||($filialDataListWS[$key]['contacts']>0)) {
		$ind++;
		$mainexist = $no;
		$contactsexist = $no;
		if ($filialDataListWS[$key]['mainList']>0) {
			$mainexist = $yes;
		}
		if ($filialDataListWS[$key]['contacts']>0) {
			$contactsexist = $yes;
		}
		echo "<b>", $ind, '. ', $key, "</b><br/ >",  $phone, $filialDataListWS[$key]['phone'], "<br /> ", $mainText, $mainexist, "<br /> ",$contactsText,  $contactsexist, "<br />", $target, $filialDataListWS[$key]['ya-target'], "<br />";
	}
}
$header_tbl =  "Список филиалов участвующих в рекламе";
$header_tbl = iconv('UTF-8','CP1251',$header_tbl);
#echo $header_tbl;
echo "<hr />";
echo $header_tbl;
echo "<hr />";
$ind=0;
foreach ($filialDataListWS as $key => $value) {
	#echo "<hr /><b>", $key, "</b><br />e-mail: ", $filialDataListWS[$key]['email'],"<br />";
	if ($filialDataListWS[$key]['uslugi']>0) {
		$ind++;
		$mainexist = $no;
		$contactsexist = $no;
		if ($filialDataListWS[$key]['mainList']>0) {
			$mainexist = $yes;
		}
		if ($filialDataListWS[$key]['contacts']>0) {
			$contactsexist = $yes;
		}
		echo "<b>", $ind, '. ', $key, "</b><br/ >",  $phone, $filialDataListWS[$key]['phone'], "<br /> ", $mainText, $mainexist, "<br /> ",$contactsText,  $contactsexist, "<br />";
	}
}
/*$resultJson= json_encode($filialDataListWS, JSON_UNESCAPED_UNICODE);
$resultJson = iconv('UTF-8','CP1251',$resultJson);
echo $resultJson;*/

?>