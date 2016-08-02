<!--if(in_array('Marina',$Mass))-->
<?php 
$countMinus = count($filialMSK)%2;
$countSecond = (count($filialMSK) - $countMinus)/2;
$countFirst = $countSecond + $countMinus;
//echo count($filialMSK), " |- ", $countFirst, " - ", $countSecond, " -| ", $countMinus;
?>

<table cellpadding="0" cellpadding="0" border="0" id="contacts1">
	<tr valign="top">
		<td width="240">
		<?php
		$countPlashka=0;
		ksort($filialMSK);
		foreach($filialMSK as $key=>$value){
			
			$countPlashka++;
			?>
			<div class="cont1 " onclick="document.location.href='<?php echo $filialMSK[$key]['url']?>'" title="Изготовление печатей и штампов <?php echo $key?>">
			<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="<?php echo $filialMSK[$key]['url']?>" class="area" title="Изготовление печатей и штампов <?php echo $key?>"><strong><?php echo $key?></strong></a><br>Тел.: 
			<?php 
			$phone = $filialMSK[$key]['phone'];
			$arrPhone = split('[\(\)]',$phone);
			echo $arrPhone[0],'<strong style="font-size: 8pt;">',$arrPhone[1] ,'</strong> ', $arrPhone[2], "<br />";
			?>
			<!--<strong style="font-size: 8pt;">(915)</strong> 377-0609<br>-->
			
			<?php echo $filialMSK[$key]['addrStreet']?>, <?php 
				echo $filialMSK[$key]['addrHouse']; 
				if(strcmp($filialMSK[$key]['addrOffice'],'')>0){
					echo ", ", $filialMSK[$key]['addrOffice'];
				}
			?>
			</div>
			</div>
			<?php 
			if ($countPlashka==$countFirst){
				?>
				
					</td>
					<td width="240">
				
				<?php
				
			}
		
		}
		?>
		
		
		
		</td>	
	</tr>
</table>

</noindex>
