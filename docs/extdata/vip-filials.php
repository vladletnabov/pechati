<div class="cont1 date2" style="width: 390px;">
		<div style="margin: 15px auto;"><center><strong style="font-size: 16px;">Филиалы работающие по России, Москве и Московскому региону</strong></center></div>
	</div>
<?php
$filialMO= array();
$filialMSK= array();
foreach ($filialDataListCP1251 as $key => $value){
	if (strcmp($filialDataListCP1251[$key]['posContact'],'vip')==0){
		?>
		<div class="cont1 date2" onclick="document.location.href='<?php echo $filialDataListCP1251[$key]['url']?>'" style="width: 390px; background: #f5f5fc;" title="Изготовление печатей и штампов <?php echo $key ?>">
		
		
			<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="<?php echo $filialDataListCP1251[$key]['url']?>" class="area" title="Изготовление печатей и штампов <?php echo $key?>"><strong><?php echo $key?></strong></a><br>Тел.: 
				<?php 
				$phone = $filialDataListCP1251[$key]['phone'];
				$arrPhone = split('[\(\)]',$phone);
				echo $arrPhone[0],'<strong style="font-size: 8pt;">',$arrPhone[1] ,'</strong> ', $arrPhone[2], "<br />";
				?>
				<!--<strong style="font-size: 8pt;">(915)</strong> 377-0609<br>-->
				
				<?php echo $filialDataListCP1251[$key]['addrStreet']?>, <?php 
					echo $filialDataListCP1251[$key]['addrHouse']; 
					if(strcmp($filialDataListCP1251[$key]['addrOffice'],'')>0){
						echo ", ", $filialDataListCP1251[$key]['addrOffice'];
					}
				?>
			</div>
		
		
				<div align="right" style="position:relative; z-index:115; margin-top: -50px;"> <small><br><br> <?php echo $filialDataListCP1251[$key]['commentContact']?></small></div>
		</div>
		
	<?php }
	elseif (strcmp($filialDataListCP1251[$key]['posContact'],'mo')==0){
		//
		if ($filialDataListCP1251[$key]['contacts']==1){
			$filialMO[$key] = $filialDataListCP1251[$key];			
		}
	}
	else{
		if ($filialDataListCP1251[$key]['contacts']==1){
			$filialMSK[$key] = $filialDataListCP1251[$key];			
		}
	}
}
?>
	
<!--<div class="cont1 date2" onclick="document.location.href='/contacts/13.html'" style="width: 390px; background: #f5f5fc url('../pics/contacts/taganka_fl.gif') top left no-repeat;" title="Изготовление печатей и штампов м. Таганская, м. Марксистская">
		<div align="right"> <small><br><br> опт&nbsp;/&nbsp;розница<br>отправка по России<br>оборудования, расходников, оснасток</small></div>
</div>
	<div class="cont1 date2" onclick="document.location.href='/contacts/14.html'" style="width: 390px; background: #f5f5fc url('../pics/contacts/elektrozavod_fl.gif') top left no-repeat;" title="Изготовление печатей и штампов м. Электрозаводская">
	<div align="right"> <small> <br><br>отправка по России<br>оборудования, расходников, оснасток<br>гарантийное и постгарантийное обслуживание</small></div>
	</div>
<div class="cont1 date2" onclick="document.location.href='/contacts/2.html'" style="width: 390px; background: #f5f5fc url('../pics/contacts/vodnyj_fl.gif') top left no-repeat;" title="Изготовление печатей и штампов м. Водный стадион">
		<div align="right"> <small><br><br> опт&nbsp;/&nbsp;розница<br>отправка по России<br>оборудования, расходников, оснасток</small></div>
</div>-->