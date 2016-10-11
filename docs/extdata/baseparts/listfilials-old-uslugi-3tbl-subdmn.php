<?php 
$serverURL=$_SERVER['REQUEST_URI'];
if (substr_count($serverURL,"/")>1){	
	require_once "../../extdata/baseparts/filialsData.php";
}
else {
	require_once "../../extdata/baseparts/filialsData.php";
}
//$arrListMetro = array();
ksort($filialDataListCP1251);
$arrMainListFilialCheck = array();
$indMainListFilialCheck=0;
foreach ($filialDataListCP1251 as $key=>$value){
	$metro =100 ;
	$color = "no color";
	if (isset($filialDataListCP1251[$key]['metro'])&&(is_array($filialDataListCP1251[$key]['metro']))){
		$metro = $filialDataListCP1251[$key]['metro'][0];
		$color = $metroStationNumColor[$metro]['color'];
	}
	//echo $key, " ->", $metro, " ", $color, "<br />";
	if ($filialDataListCP1251[$key]['uslugi']==1){
		if (!isset($arrMainListFilialCheck[$metro])){
			$arrMainListFilialCheck[$metro] = array();
		}
		array_push($arrMainListFilialCheck[$metro], $key);
		$indMainListFilialCheck++;
	}
}

$columnSize = 0;
if ($indMainListFilialCheck%3==0) {
	$columnSize=$indMainListFilialCheck /3;
}
else {
	$columnSize=(($indMainListFilialCheck-($indMainListFilialCheck%3))/3)+1;
}

?>

<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tbody>
		<tr valign="top" class="inz3">
			<td width="32%">
				<div id="list">
				    <!--<div><span class="inz1" style="background-color: #9d1f9d;"><input type="Radio" class="inz2" value="м. Беговая" name="adress" id="adr19"></span> <label for="adr19"><a href="javascript:;" onclick="window.open('/contacts/19.html')"><strong>м. Беговая</strong></a><br><strong style="font-size: 11pt;">(495)</strong> 585-81-62</label></div>-->
				    
					<?php 
						ksort($arrMainListFilialCheck);
						$chkMainListFilial=0;
						$separatorTbl = '</div>
			</td>
			
			<td width="32%">
				<div id="list">';
						foreach ($arrMainListFilialCheck as $key=>$value){
							$startLine = '<div><span class="inz1" style="';
							$endLine = '</label></div>';
							
							
							if ($key!= 100){
								$startLine = $startLine . ' background-color:' . $metroStationNumColor[$key]['color'] . '"><input type="Radio" class="inz2" name="adress" value="';						
							}
							else{
								$startLine = $startLine . ' background-color:' . "#d5d0d6;" . '"><input type="Radio" class="inz2" name="adress" value="';	
							}
							//$startLine = $startLine . '<img src="/pics/line.gif" width="19" height="9" alt="" style="margin:0;"></div>';
							for($i=0; $i<count($value); $i++){
								$phone = $filialDataListCP1251[$value[$i]]['phone'];
								$arrPhone = split('[\(\)]',$phone);
								if(strcasecmp($phone,'')==0){
									$phone ='8 (495) 585-81-62';
								}
								//echo $arrPhone[0],'<strong style="font-size: 8pt;">',$arrPhone[1] ,'</strong> ', $arrPhone[2], "<br />";
								echo $startLine, $value[$i], '" id="adr', $chkMainListFilial, '"></span> <label for="adr',
									$chkMainListFilial,'"><a href="javascript:;" onclick="window.open(', "'", 
									$filialDataListCP1251[$value[$i]]['url'], "')", '"><strong>', $value[$i], '</strong></a><br><span class="',$filialDataListCP1251[$value[$i]]['ya-phone'],'">', 
									$arrPhone[0], ' <strong style="font-size: 11pt;">', $arrPhone[1] , ' </strong> ', $arrPhone[2], '</span>', $endLine;
									
								$chkMainListFilial++;
								if (($chkMainListFilial==$columnSize)||($chkMainListFilial==(2*$columnSize))){
									echo $separatorTbl;
								}
							}
						}
					?>

					
				</div>
			</td>
		</tr>
	</tbody>
</table>
			