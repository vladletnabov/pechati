<?
include("functions.php");

$title = "��������� ��������� �����";
$description = "";
$keywords = "";
$price_url = "";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<? page_head($title, $description, $keywords); ?>
<body id="layout_body">
<div class="container">
	<a href="/"><img src="/osnastka/data/img/logo.png" id="logo" /></a>

	<div id="header">
		<? page_header($title, $price_url); ?>
	</div>
	
	<div id="center">
		<div id="right">
			<? page_specials() ?>
		</div>
		<div id="list">
			<? list_full( array(
				array("�����������", "1 300", "/osnastka/data/img/items/poly_0001.gif"),
				array("��������� �����", "650", "/osnastka/data/img/items/bord_0001.gif"),
				array("����������� ���������", "700", "/osnastka/data/img/items/neg_0001.gif"),
				array("����� ������� 50 ������", "1 000", "/osnastka/data/img/items/kimoto_0001.gif"),
				array("����� ����������", "550", "/osnastka/data/img/items/lomond_0001.gif"),
				array("������ ���������� ������", "�������", "/osnastka/data/img/items/aq_aktiv.gif"),
				array("������ Orange Film", "2000", "/osnastka/data/img/items/orange_0001.gif"),
				array("�������� ���������� �4", "70", "/osnastka/data/img/items/substr-0001.gif"),
				array("������ �������� 50� � 210��", "350", "/osnastka/data/img/items/pl_0001.gif"),
				array("������� �������� 1-2�� �4", "�� 300", "/osnastka/data/img/items/dempf_list.gif"),
				array("������� ��������", "9", "/osnastka/data/img/items/dempf_vir.gif"),
				array("����� �������������", "130", "/osnastka/data/img/items/skotch_0001.gif"),
				array("������", "500", "/osnastka/data/img/items/resina_0001.gif"),
				array("��-����� 15W", "�� 750", "/osnastka/data/img/items/philips_0001.gif"),
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>