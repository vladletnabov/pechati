<!--<p><a name="zakaz" title="��������"> </a></p><p><a style="font-size: 26px;">��������:</a><br /></p>
<p><a style="font-size: 20px; color: navy;">��� 1: �������� ������, ����� ��� ���������</a><br /></p>
<!-- ��������� ���� ������-->
<!--
<script>
	var price1 = 500;
</script>-->
<!-- ����� �������-->

	<?php  require_once "../zakaz/tovar1.php" ?>
	<?php  require_once "../zakaz/tovar2.php" ?>
	<?php  //require_once "../extdata/table-price-div.php" ?>
<br />
<a name="ceny"></a><P align=justify>��� ���� ������� � ������ �� ��� ��������� ��������. </P>

<!-- �������� -->
<!--<UL>
	<LI>
<P align=justify>�������� �� ������ �����-���� ������� - 300�, �� ��� ������ - <B>���������!</B> </P>
	<LI>
<P align=justify>�� ������� ��������� �� ����� ���������� �� ������ ������� �������� ������: ������������ ������, ������������� �������� � ������, ������������ ��� ���������, �������� ������� ������, ������, �������� ������� �����.</P>
	</LI>
</UL>-->
<!-- ����� ����� ��������-->
<!-- ��������� ��������� �� ������� -->
<script>
	var price2 = 450;
</script>
<!-- ����� ������� -->

<!-- ��������-->

<!--<p><a style="font-size: 20px; color: navy;">��� 2: �������� ��������</a><br /></p>
<table cellpadding="10" cellspacing="0" border="0" align="center">
	<tr valign="top" align="center">
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_automat.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=750,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/colop_printer_r40_100x133.jpg" width=100 height=133></A>
	<p>�������������� ��������<BR>����. 40 ��.<BR><input type="Radio" name="osnast" checked value="�������������� �������� ����. 40 ��." onClick="price2 = 450; count_price();" id="osnast1"> <label for="osnast1">450 ���.</label></p>
</td>
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_automat_mal.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=800,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/shiny-s-843.jpg" width=100 height=133></A>
	<p>�������������� ��������<BR>��� ���. �������<BR><input type="Radio" name="osnast" value="�������������� �������� ��� ���. �������" onClick="price2 = 200; count_price();" id="osnast2"> <label for="osnast2">200 ���.</label></p>
</td>
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_automat_bolsh.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=750,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/grm-4927.jpg" width=100 height=133></A>
	<p>�������������� ��������<BR>��� ������� �������<BR><input type="Radio" name="osnast" value="�������������� �������� ��� ������� �������" onClick="price2 = 400; count_price();" id="osnast3"> <label for="osnast3">400 ���.</label></p>
</td>
<td width="25%">
	<A href="javascript:void(window.open('/uslugi/osn_profline.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=750,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/colop-r3040.jpg" width=100 height=133></A>
	<p>Colop R 3040<BR>����. 45 ��.<BR><input type="Radio" name="osnast" value="Professional Line 5215 ����. 45 ��." onClick="price2 = 1000; count_price();" id="osnast4"> <label for="osnast4">�� 1000 ���.</label></p>
	</td>
	</tr>
	<tr valign="top" align="center">
<td>
	<A href="javascript:void(window.open('/uslugi/metal_osn_pech_stamp.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=800,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/met_classic_100x133.jpg" width=100 height=133></A>
	<p>������������� ��������<BR>��� ������� � �������<BR><input type="Radio" name="osnast" value="������������� �������� ��� ������� � �������" onClick="price2 = 500; count_price();" id="osnast5"> <label for="osnast5">�� 500 �.</label></p>
</td>
<td>
	<A href="javascript:void(window.open('/uslugi/metal_osn_original.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=1000,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/met_techno_100x133.jpg" width=100 height=133></A>
	<p>������������ ��������<BR><input type="Radio" name="osnast" value="������������ ��������" onClick="price2 = 1200; count_price();" id="osnast6"> <label for="osnast6">1200 �.</label></p>
</td>
<td>
	<A href="javascript:void(window.open('/uslugi/plastm_osn_gerb.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=1000,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/plasm_gerb40_100x133.jpg" width=100 height=133></A>
	<p>�������� � ������<BR>����. 40 ��.<BR><input type="Radio" name="osnast" value="�������� � ������ ����. 40 ��." onClick="price2 = 0; count_price();" id="osnast7"> <label for="osnast7">���������.</label></p>
</td>
<td>
	<A href="javascript:void(window.open('/uslugi/elit_osn.html','','resizable=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,fullscreen=no,dependent=no,width=690,height=1000,left=1,top=1'))"><IMG border=0 src="../pics/uslugi/elit_osn.jpg" width=100 height=133></A>
	<p>������� ��������<BR>�� 1500 �.</p>
	</td>
	</tr>
</table>-->
<!-- ����� ��������-->

<!-- ����� ��������-->

<!--p><a style="font-size: 20px; color: navy;">��� 3: ��������� � ����</a><br /></p>
<script>
	var price3 = 0;
</script>
<p><img src="../pics/str.gif" width="5" height="9" alt=""> <strong>���������� � ������</strong></p>
<table border="0" cellspacing="1" cellpadding="3" width="100%">
	<tr bgcolor="#e0e0e0">
<td>
	<b>�������, ���</b>
</td>
<td>
	<input type="text" class="text_forms" style="width: 226px; font-size: 14pt;" name="tel">
</td>
	</tr>
	<tr bgcolor="#efefef">
<td>
	<b>E-mail</b>
</td>
<td>
	<input type="text" class="text_forms" style="width: 226px; font-size: 14pt;" name="eml" id="eml">
</td>
	</tr>
	<tr bgcolor="#e0e0e0">
<td width="300">
	<b>����-��������</b><br><font size=-2>���� �� �������� ������ ���� �� ����� 2��</font>
</td>
<td width="650">
	<input type="file" class="text_forms" style="width: 226px;" name="pict">
</td>
	</tr>
	<tr bgcolor="#efefef">
<td valign="top">
	<b>�������������� ����������</b>
</td>
<td>
	<textarea type="text" class="text_forms" style="width:300px; height:70px; border-color:#cccccc;" name="text"></textarea>
</td>
	</tr>
</table>
<p style="font-size: 14pt;"><strong>��������� ������ ������: <span style="color: #f00;" id="price"></span>&nbsp;���</strong></p>
<p align="center"><input type="Hidden" name="form" value="1"><input type="button" onclick="checkRequired()" value="�������� ������ ������" style="width: 278px; height: 80px; background: #f90 url('/i/button.jpg') left top no-repeat; border: 0; color: #fff; font-size: 14pt;"></p>
<script language="JavaScript">
	function count_price()
	{
document.getElementById('price').innerHTML = price1 + price2 + price3;
return;
	}
	count_price();
</script>
-->
<!-- ����� ����� �������� -->
