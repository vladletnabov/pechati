<?
include("functions.php");

$title = "������ � �������";
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
				array("Noris, �������������� ��������� (��� ������ � �������)", "�� 179", "/osnastka/data/img/items/stamp_krask_noris110.gif"),
				array("Noris (��� ���� ����� ��������)", "�� 337", "/osnastka/data/img/items/stamp_krask_noris130.gif"),
				array("Noris (��� ���� ����� ������, ������� ���������)", "�� 149", "/osnastka/data/img/items/stamp_krask_noris191.gif"),
				array("Noris (��� ��������)", "�� 332", "/osnastka/data/img/items/stamp_krask_noris130.gif"),
				array("Noris (��� ����������� � �������������)", "�� 337", "/osnastka/data/img/items/stamp_krask_noris196.gif"),
				array(" Noris (��� ������, ����������, �������, ������, ������)", "�� 337", "/osnastka/data/img/items/stamp_krask_noris199po.gif"),
				array("Noris, �������������� ��������� (��� ������, ������, �������)", "�� 352", "/osnastka/data/img/items/stamp_krask_noris199uv.gif"),
				array("Noris (��� �������� � ������������� �����, �����������, ��������������� �����)", "�� 164", "/osnastka/data/img/items/stamp_krask_noris210.gif"),
				array("Noris (��� ��������� ������ � �������)", "�� 217", "/osnastka/data/img/items/stamp_krask_noris320.gif"),
				array("Trodat (������� ����������� ������)", "�� 29", "/osnastka/data/img/items/stamp_krask_trodat7011.gif"),
				array("������� ������� �/����� Professional Line", "�� 64", "/osnastka/data/img/items/stamp_pod_proff.gif"),
				array("������� ������� �/����� Printy", "�� 37", "/osnastka/data/img/items/stamp_pod_printy.gif"),
				array("����������� ������� Trodat", "�� 44", "/osnastka/data/img/items/stamp_pod_trodat.gif"),
				array("������� ������� �/�������������� ����������� Trodat", "147", "/osnastka/data/img/items/stamp_pod_trodat2.gif"),
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>