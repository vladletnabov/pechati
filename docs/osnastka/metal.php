<?
include("functions.php");

$title = "������������� �������� �����<br>���� ������������� ��� ����� ����� ������� 3&divide;10 ���. ������.";
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
				array("��������", "230&divide;200", "/osnastka/data/img/items/metal_kr_classic.gif"),
				array("��������", "725&divide;650", "/osnastka/data/img/items/metal_kr_matreshka.gif"),
				array("������", "450&divide;380", "/osnastka/data/img/items/metal_kr_derevo2.gif"),
				array("�����", "680&divide;612", "/osnastka/data/img/items/metal_kr_techno2.gif"),
				array("�������", "1000&divide;890", "/osnastka/data/img/items/metal_kr_kompakt.gif"),
				array("���", "600&divide;535", "/osnastka/data/img/items/metal_kr_nlo2.gif"),
				array("������ ���", "450&divide;380", "/osnastka/data/img/items/metal_kr_darclak.gif"),
				array("��������", "360&divide;325", "/osnastka/data/img/items/metal_kr_tabletka.gif"),
				array("������", "295&divide;265", "/osnastka/data/img/items/metal_kr_brelok.gif"),
				array("������� ������", "250&divide;230", "/osnastka/data/img/items/metal_kr_goldring.gif"),
				array("�����", "640&divide;575", "/osnastka/data/img/items/metal_kr_disco.gif"),
				array("���/�����", "1100&divide;1000", "/osnastka/data/img/items/metal_kr_nlodisco2.gif"),
				array("������� ������ 2-����.", "270&divide;250", "/osnastka/data/img/items/metal_kr_goldring2.gif"),
				array("��������� �����������", "450&divide;420", "/osnastka/data/img/items/metal_kr_karman.gif"),
				array("�����������", "400&divide;370", "/osnastka/data/img/items/metal_kr_poluavtomat.gif"),
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>