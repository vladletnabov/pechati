<?
include("functions.php");

$title = "Расходные материалы ОПТОМ";
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
				array("Фотополимер", "1 300", "/osnastka/data/img/items/poly_0001.gif"),
				array("Бордюрная лента", "650", "/osnastka/data/img/items/bord_0001.gif"),
				array("Затемнитель негативов", "700", "/osnastka/data/img/items/neg_0001.gif"),
				array("Плёнка матовая 50 листов", "1 000", "/osnastka/data/img/items/kimoto_0001.gif"),
				array("Плёнка прозрачная", "550", "/osnastka/data/img/items/lomond_0001.gif"),
				array("Пленка негативная черная", "звоните", "/osnastka/data/img/items/aq_aktiv.gif"),
				array("Пленка Orange Film", "2000", "/osnastka/data/img/items/orange_0001.gif"),
				array("Субстрат бесцветный А4", "70", "/osnastka/data/img/items/substr-0001.gif"),
				array("Пленка защитная 50м х 210мм", "350", "/osnastka/data/img/items/pl_0001.gif"),
				array("Демпфер листовой 1-2мм А4", "от 300", "/osnastka/data/img/items/dempf_list.gif"),
				array("Демпфер вырубной", "9", "/osnastka/data/img/items/dempf_vir.gif"),
				array("Скотч двухсторонний", "130", "/osnastka/data/img/items/skotch_0001.gif"),
				array("Резина", "500", "/osnastka/data/img/items/resina_0001.gif"),
				array("УФ-лампа 15W", "от 750", "/osnastka/data/img/items/philips_0001.gif"),
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>