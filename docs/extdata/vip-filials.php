<div class="cont1 date2" style="width: 390px;">
		<div style="margin: 15px auto;"><center><strong style="font-size: 16px;">������� ���������� �� ������, ������ � ����������� �������</strong></center></div>
	</div>
<?php
$filialMO= array();
$filialMSK= array();
foreach ($filialDataListCP1251 as $key => $value){
	if (strcmp($filialDataListCP1251[$key]['posContact'],'vip')==0){
		?>
		<div class="cont1 date2" onclick="document.location.href='<?php echo $filialDataListCP1251[$key]['url']?>'" style="width: 390px; background: #f5f5fc url('<?php echo $filialDataListCP1251[$key]['plashkaContact']?>') top left no-repeat;" title="������������ ������� � ������� <?php echo $key ?>">
				<div align="right"> <small><br><br> <?php echo $filialDataListCP1251[$key]['commentContact']?></small></div>
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
	
<!--<div class="cont1 date2" onclick="document.location.href='/contacts/13.html'" style="width: 390px; background: #f5f5fc url('../pics/contacts/taganka_fl.gif') top left no-repeat;" title="������������ ������� � ������� �. ���������, �. ������������">
		<div align="right"> <small><br><br> ���&nbsp;/&nbsp;�������<br>�������� �� ������<br>������������, �����������, ��������</small></div>
</div>
	<div class="cont1 date2" onclick="document.location.href='/contacts/14.html'" style="width: 390px; background: #f5f5fc url('../pics/contacts/elektrozavod_fl.gif') top left no-repeat;" title="������������ ������� � ������� �. ����������������">
	<div align="right"> <small> <br><br>�������� �� ������<br>������������, �����������, ��������<br>����������� � ��������������� ������������</small></div>
	</div>
<div class="cont1 date2" onclick="document.location.href='/contacts/2.html'" style="width: 390px; background: #f5f5fc url('../pics/contacts/vodnyj_fl.gif') top left no-repeat;" title="������������ ������� � ������� �. ������ �������">
		<div align="right"> <small><br><br> ���&nbsp;/&nbsp;�������<br>�������� �� ������<br>������������, �����������, ��������</small></div>
</div>-->