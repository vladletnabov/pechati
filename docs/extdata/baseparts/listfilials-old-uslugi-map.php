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
<style>
		.map_filials{
			width: 500px;
			height: 410px;
			background-image: url("http://pechati.ru/pics/img-contact2.jpg");
			/*border: 1px solid red;*/
		}
		.pos_filial{
			position:absolute;
		}
		.radio {
			vertical-align: top;
			width: 13px;
			height: 13px;
			margin: 0 3px 0 0;
		}
		.radio + label {
			cursor: pointer;
		}
		.radio:not(checked) {
			position: absolute;
			opacity: 0;
		}
		.radio:not(checked) + label {
			position: relative;
			padding: 0 0 0 35px;
		}
		.radio:not(checked) + label:before {
			content: '';
			position: absolute;
			top: -2px;
			left: 1px;
			width: 20px;
			height: 20px;
			border: 1px solid #956c56;
			border-radius: 50%;
			background: #FFF;
		}
		.radio:not(checked) + label:after {
			content: '';
			position: absolute;
			top: 1px;
			left: 4px;
			width: 16px;
			height: 16px;
			border-radius: 50%;
			background: #9FD468;
			box-shadow: inset 0 1px 1px rgba(0,0,0,.5);
			opacity: 0;
			transition: all .2s;
		}
		.radio:checked + label:after {
			opacity: 1;
		}
		.radio:focus + label:before {
			box-shadow: 0 0 0 3px rgba(255,255,0,.5);
		}
		.mo-filial-on-map-left{
			position:relative; 
			width:100px; 
			right: 105px; 
			top:-20px;
			text-align:right;
			/*border: 1px solid blue;*/
		}
		.mo-filial-on-map-right{
			position:relative; 
			width:100px; 
			left: 30px; 
			top:-20px;
			text-align:left;
		}
	</style>
	
<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tbody>
		<tr valign="top" class="inz3">
			<td width="32%">
				<div class="map_filials">
				    <!--<div><span class="inz1" style="background-color: #9d1f9d;"><input type="Radio" class="inz2" value="м. Беговая" name="adress" id="adr19"></span> <label for="adr19"><a href="javascript:;" onclick="window.open('/contacts/19.html')"><strong>м. Беговая</strong></a><br><strong style="font-size: 11pt;">(495)</strong> 585-81-62</label></div>-->
				    
					<?php
					foreach ($filialDataListCP1251 as $key=>$value){
						if(($value['uslugi']==1)&&(isset($value['pos_left']))){
							$pos_id = $value['ya-target'];
							if(isset($value['pos_zindex'])){
								$pos_filial = 'style="left:' . $value['pos_left'] . '; top:' . $value['pos_top'] .'; z-index:'. $value['pos_zindex'] .';" ';
							}
							else {
								$pos_filial = 'style="left:' . $value['pos_left'] . '; top:' . $value['pos_top'] .';" ';
							}
							
							echo '<div class="pos_filial" ' . $pos_filial . '>';
								echo '<input name="adress" type="radio" class="radio" id="' . $pos_id . '" value="' . $key . '"/>';
								echo '<label for="' . $pos_id . '"></label>';
								if(isset($value['map_text_align'])){
									if(strcmp('right',$value['map_text_align'])==0){
										echo '<div class="mo-filial-on-map-left" >'. $key .'</div>';
									}
									else{
										echo '<div class="mo-filial-on-map-right" >'. $key .'</div>';
									}
								}
							echo '</div>';
						}
					}
					?>

					
				</div>
			</td>
		</tr>
	</tbody>
</table>
			