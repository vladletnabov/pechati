<div class="cont1 date2" style="width: 390px;">
		<div style="margin: 15px auto;"><center><strong style="font-size: 16px;">���������� �������</strong></center></div>
	</div>
	
	<?php 
	foreach($filialMO as $key=>$value){ ?>
		<div class="cont1 date1 date2" onclick="document.location.href='/contacts/17.html'" style="width: 189px;" title="������������ ������� � ������� �����������">
			<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="<?php echo $filialMO[$key]['url']?>" class="area" title="������������ ������� � ������� <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>"><strong><?php echo $key ?></strong></a><br>���.: 
		<?php 
			$phone = $filialMO[$key]['phone'];
			$arrPhone = split('[\(\)]',$phone);
			echo $arrPhone[0],'<strong style="font-size: 8pt;">',$arrPhone[1] ,'</strong> ', $arrPhone[2], "<br />";
		?>
			<?php echo $filialMO[$key]['addrStreet']?>, <?php 
				echo $filialMO[$key]['addrHouse']; 
				if(strcmp($filialMO[$key]['addrOffice'],'')>0){
					echo ", ", $filialMO[$key]['addrOffice'];
				}
			?>
			</div>
		</div>
		
	<?php }
		
	?>
	
	<!--<div class="cont1 date1 date2" onclick="document.location.href='/contacts/17.html'" style="width: 189px;" title="������������ ������� � ������� �����������">
		<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="/contacts/17.html" class="area" title="������������ ������� � ������� �����������"><strong>�. �����������</strong></a><br>���.: <strong>(901)</strong> 57-57-074<br>��������������� ���., 1�.</div>
	</div>
	<div class="cont1 date1 date2" onclick="document.location.href='/contacts/18.html'" style="width: 189px;" title="������������ ������� � ������� ��������">
		<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="/contacts/18.html" class="area" title="������������ ������� � ������� ��������"><strong>�. ��������</strong></a><br>���.: <strong>(495)</strong> 973-5008<br>��. ������� 1�</div>
	</div>
		<div class="cont1 date1 date2" onclick="document.location.href='/contacts/20.html'" style="width: 189px;" title="������������ ������� � ������� ����������">
		<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="/contacts/20.html" class="area" title="������������ ������� � ������� ����������"><strong>�. ����������, �. ������������� </strong></a><br>���.: <strong style="font-size: 8pt;">(495)</strong> 664-37-18<br>��. ��������� �.30</div>
	</div>
		<div class="cont1 date1 date2" onclick="document.location.href='/contacts/60.html'" style="width: 189px;" title="������������ ������� � ������� � ����-�����������">
		<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="/contacts/60.html" class="area" title="������������ ������� � ������� �-� ��������"><strong>�-� ����-�����������</strong></a><br>���.: <strong style="font-size: 8pt;">(916)</strong> 161-80-60<br>��������� �����, �. 51,  �. �6568</div>
	</div>
		<div class="cont1 date1 date2" onclick="document.location.href='/contacts/40.html'" style="width: 189px;" title="������������ ������� � ������� �-� ��������">
		<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="/contacts/40.html" class="area" title="������������ ������� � ������� �-� ��������"><strong>�-� ��������</strong></a><br>���.: <strong style="font-size: 8pt;">(495)</strong> 410-18-85<br>��. 50 ��� �������, �. 4, ���� 121</div>
	</div>
	<div class="cont1 date1 date2" onclick="document.location.href='/contacts/31.html'" style="width: 189px;" title="������������ ������� � ������� �����">
		<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="/contacts/31.html" class="area" title="������������ ������� � ������� �����"><strong>�. �����, </strong></a><br>���.: <strong style="font-size: 8pt;">(495)</strong> 664-37-18<br>��.��������� �.1</div>
	</div>
	<div class="cont1 date1 date2" onclick="document.location.href='/contacts/47.html'" style="width: 189px;"  title="������������ ������� � ������� �. ���������">
		<div><img src="../i/0.gif" class="poi1" width="9" height="9" alt="" align="absmiddle"> <a href="/contacts/47.html" class="area" title="������������ ������� � ������� �. ���������"><strong>���������</strong></a><br>���.: <strong>(925)</strong> 125-45-55<br>�������� �., �/� "���������", ����. �, ���. 2, 2 ��., ��. 104�</div>
	</div>-->