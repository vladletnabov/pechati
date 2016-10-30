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
$filial = "Филиал: ";
$phone = "&nbsp&nbsp&nbsp&nbsp телефон: ";
$realphone = "&nbsp&nbsp&nbsp&nbsp реальный телефон филиала: ";
$filial = iconv('UTF-8','CP1251',$filial);
$phone = iconv('UTF-8','CP1251',$phone);
$realphone = iconv('UTF-8','CP1251',$realphone);
$target = "&nbsp&nbsp&nbsp&nbsp target: ";
echo $header_tbl;
echo "<hr />";
$ind = 0;
echo '<table border=1>';
echo "<tr><td>N</td><td>$filial  </td><td>",  $phone,   "</td><td> ", $realphone , "</td><td> ", $mainText,  "</td><td> ",$contactsText,   "</tr>";
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
		#echo "<b>", $ind, '. ', $key, "</b><br/ >",  $phone, $filialDataListWS[$key]['phone'], "<br /> ", $mainText, $mainexist, "<br /> ",$contactsText,  $contactsexist, "<br />", $target, $filialDataListWS[$key]['ya-target'], "<br />";
		echo "<tr><td><b>", $ind, '</td><td>', $key, "</b></td><td>",  $filialDataListWS[$key]['phone'], "</td><td> ",  $filialDataListWS[$key]['real-phone'], "</td><td> ",  $mainexist, "</td><td> ",  $contactsexist, "</tr>";
	}
}
echo '</table>';

$header_tbl =  "Список филиалов участвующих в рекламе";
$header_tbl = iconv('UTF-8','CP1251',$header_tbl);
#echo $header_tbl;
echo "<hr />";
echo $header_tbl;
echo "<hr />";
$ind=0;
echo '<table border=1>';
echo "<tr><td>N</td><td>$filial  </td><td>",  $phone,   "</td><td> ", $realphone , "</td><td> ", $mainText,  "</td><td> ",$contactsText,   "</tr>";
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
		#echo "<b>", $ind, '. ', $key, "</b><br/ >",  $phone, $filialDataListWS[$key]['phone'], "<br /> ", $mainText, $mainexist, "<br /> ",$contactsText,  $contactsexist, "<br />";
		echo "<tr><td><b>", $ind, '</td><td>', $key, "</b></td><td>",  $filialDataListWS[$key]['phone'], "</td><td> ",  $filialDataListWS[$key]['real-phone'], "</td><td> ",  $mainexist, "</td><td> ",  $contactsexist, "</tr>";
	}
}
echo '</table>';
/*$resultJson= json_encode($filialDataListWS, JSON_UNESCAPED_UNICODE);
$resultJson = iconv('UTF-8','CP1251',$resultJson);
echo $resultJson;*/

?>