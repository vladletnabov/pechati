<?
include("functions.php");

$title = "Металлическая оснастка ОПТОМ<br>Цены действительны при общей сумме покупки 3&divide;10 тыс. рублей.";
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
				array("Классика", "600", "/osnastka/data/img/items/metal_kr_classic.gif"),
				array("Матрешка", "1300", "/osnastka/data/img/items/metal_kr_matreshka.gif"),
				array("Дерево", "600", "/osnastka/data/img/items/metal_kr_derevo2.gif"),
				array("Техно", "1300", "/osnastka/data/img/items/metal_kr_techno2.gif"),
				array("Компакт", "1500", "/osnastka/data/img/items/metal_kr_kompakt.gif"),
				array("НЛО", "1200", "/osnastka/data/img/items/metal_kr_nlo2.gif"),
				array("Черный лак", "900", "/osnastka/data/img/items/metal_kr_darclak.gif"),
				array("Таблетка", "600", "/osnastka/data/img/items/metal_kr_tabletka.gif"),
				array("Брелок", "600", "/osnastka/data/img/items/metal_kr_brelok.gif"),
				array("Золотое кольцо", "600", "/osnastka/data/img/items/metal_kr_goldring.gif"),
				array("Диско", "1200", "/osnastka/data/img/items/metal_kr_disco.gif"),
				array("НЛО/Диско", "2000", "/osnastka/data/img/items/metal_kr_nlodisco2.gif"),
				array("Золотое кольцо 2-секц.", "600", "/osnastka/data/img/items/metal_kr_goldring2.gif"),
				array("Карманный полуавтомат", "800", "/osnastka/data/img/items/metal_kr_karman.gif"),
				array("Полуавтомат", "800", "/osnastka/data/img/items/metal_kr_poluavtomat.gif"),
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>