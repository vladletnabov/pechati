<?
require_once "extdata/baseparts/filialsData.php";
//$arrListMetro = array();
ksort($filialDataListCP1251);
$arrMainListFilial = array();
$indMainListFilial=0;
foreach ($filialDataListCP1251 as $key=>$value){
	$metro =100 ;
	$color = "no color";
	if (isset($filialDataListCP1251[$key]['metro'])&&(is_array($filialDataListCP1251[$key]['metro']))){
		$metro = $filialDataListCP1251[$key]['metro'][0];
		$color = $metroStationNumColor[$metro]['color'];
	}
	//echo $key, " ->", $metro, " ", $color, "<br />";
	if ($filialDataListCP1251[$key]['mainList']==1){
		if (!isset($arrMainListFilial[$metro])){
			$arrMainListFilial[$metro] = array();
		}
		array_push($arrMainListFilial[$metro], $key);
		$indMainListFilial++;
	}
}

$columnSize = 0;
if ($indMainListFilial%3==0) {
	$columnSize=$indMainListFilial /3;
}
else {
	$columnSize=(($indMainListFilial-($indMainListFilial%3))/3)+1;
}
echo "indMainListFilial: ", $indMainListFilial, " columnSize: ", $columnSize, " delenie: ", $indMainListFilial%3;


?>
<table cellpadding="0" cellspacing="5" border="0" width="100%" class="inline">
	<tbody>
		<tr valign="top">
			<td width="33%">
				<!--<p><img src="/pics/line7.gif" width="19" height="9" alt="" align="absmiddle"> <a href="/contacts/19.html" title="Заказать печать на Беговой">м. Беговая</a></p>		-->	
				<?php 
				ksort($arrMainListFilial);
				$chkMainListFilial=0;
				$separatorTbl = '</td>
							<td width="33%">';
				foreach ($arrMainListFilial as $key=>$value){
					$startLine = '<p>';
					$endLine = '</a></p>';
					if ($key!= 100){
						$startLine = $startLine . '<div style="max-height:9px;float: left; margin-top:5px; margin-right:3px; background-color:' . $metroStationNumColor[$key]['color'] . '">';						
					}
					$startLine = $startLine . '<img src="/pics/line.gif" width="19" height="9" alt="" align="absmiddle"></div>';
					for($i=0; $i<count($value); $i++){
						echo $startLine, '<a href="',$filialDataListCP1251[$value[$i]]['url'],'" title="Заказать печать ', 
							$filialDataListCP1251[$value[$i]]['predlog'], $filialDataListCP1251[$value[$i]]['padej'], '">', $value[$i],	$endline;
						$chkMainListFilial++;
						if (($chkMainListFilial==$columnSize)||($chkMainListFilial==(2*$columnSize))){
							echo $separatorTbl;
						}
					}
				}
				?>
			
			</td>
		</tr>
	</tbody>
</table>