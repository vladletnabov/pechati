<link rel="stylesheet" href="extdata/map/assets/style2.css">


<?php 
$serverURL=$_SERVER['REQUEST_URI'];
if (substr_count($serverURL,"/")>1){	
	require_once "../extdata/baseparts/filialsData.php";
}
else {
	require_once "../../extdata/baseparts/filialsData.php";
}
//$arrListMetro = array();
ksort($filialDataListCP1251);
$arrMainListFilialCheck = array();
$arrMainListFilialCheckMO = array();
$indMainListFilialCheck=0;
$indMainListFilialCheckMO=0;
foreach ($filialDataListCP1251 as $key=>$value){
	$metro =100 ;
	$color = "no color";
	if (isset($filialDataListCP1251[$key]['metro'])&&(is_array($filialDataListCP1251[$key]['metro']))){
		$metro = $filialDataListCP1251[$key]['metro'][0];
		$color = $metroStationNumColor[$metro]['color'];
	}
	//echo $key, " ->", $metro, " ", $color, "<br />";
	if ($filialDataListCP1251[$key]['uslugi']==1){
		
		if ((isset($filialDataListCP1251[$key]['posContact']))&&(strcasecmp($filialDataListCP1251[$key]['posContact'],'mo')==0)){
			
			if (!isset($arrMainListFilialCheckMO[$metro])){
				$arrMainListFilialCheckMO[$metro] = array();
			}
			array_push($arrMainListFilialCheckMO[$metro], $key);
			$indMainListFilialCheckMO++;
		}
		else{
			if (!isset($arrMainListFilialCheck[$metro])){
				$arrMainListFilialCheck[$metro] = array();
			}
			array_push($arrMainListFilialCheck[$metro], $key);
			$indMainListFilialCheck++;			
		}
	}
}


?>

		<div id="map_wrapper">
            <div id="metromap">
				<!--
				<div class="station" style="top: 346px; left: 575px;">
                    <input type="Radio" name="adress" value="м. Комсомольская" id="adr0">
                    <label class="station_label sokolnicheskaja" for="adr0">Комсомольская</label>
                </div>
				-->


					<?php 
						ksort($arrMainListFilialCheck);
						$chkMainListFilial;
						if (!isset($chkMainListFilial)){
							$chkMainListFilial=0;
							
						}

						foreach ($arrMainListFilialCheck as $key=>$value){
							$startLine = '<div class="station" style="top: ';
							$endLine = '</label></div>';
							
							
							for($i=0; $i<count($value); $i++){
								
								$filialName = $value[$i];
							
								echo $startLine , $filialDataListCP1251[$value[$i]]['pos_top'] , '; left:' , $filialDataListCP1251[$value[$i]]['pos_left'] , ';">' , 
								'<input type="Radio" name="adress" value="' , $filialName , '" id="adr' , $chkMainListFilial , '">' , 
								'<label class="station_label ' , $metroStationNumColor[$key]['linecolor'], '" for="adr' , $chkMainListFilial , '">' , 
								$filialName ,  $endLine;
									
								$chkMainListFilial++;

							}
						}
					?>
					
					<?php 
						ksort($arrMainListFilialCheckMO);
						$chkMainListFilialMO=0;
						echo '<div id="mo_wrapper"><p id="filiali_txt">Филиалы в области:</p>';
						foreach ($arrMainListFilialCheckMO as $key=>$value){
							$startLine = '<div class="mo_filial">';
							$endLine = '</label></div>';
							
							
							
								
							
							for($i=0; $i<count($value); $i++){
								$filialName = $value[$i];
								
								echo $startLine , '<input type="Radio" name="adress" value="' , $filialName , '" id="adr' , $chkMainListFilial , '">' , '<label class="filial_label" for="adr' , $chkMainListFilial , '">' , $filialName , $endLine;
									
								$chkMainListFilial++;
								
								$chkMainListFilialMO++;

							}
						}
						echo '</div>';
					?>
			</div>
		</div>
