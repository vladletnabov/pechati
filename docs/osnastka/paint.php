<?
include("functions.php");

$title = "Краски и подушки";
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
				array("Noris, флуоресцентная невидимая (для бумаги и картона)", "от 179", "/osnastka/data/img/items/stamp_krask_noris110.gif"),
				array("Noris (для всех видов металлов)", "от 337", "/osnastka/data/img/items/stamp_krask_noris130.gif"),
				array("Noris (для всех типов бумаги, включая глянцевую)", "от 149", "/osnastka/data/img/items/stamp_krask_noris191.gif"),
				array("Noris (для ценников)", "от 332", "/osnastka/data/img/items/stamp_krask_noris130.gif"),
				array("Noris (для полиэтилена и полипропилена)", "от 337", "/osnastka/data/img/items/stamp_krask_noris196.gif"),
				array(" Noris (для стекла, пластмассы, металла, дерева, резины)", "от 337", "/osnastka/data/img/items/stamp_krask_noris199po.gif"),
				array("Noris, флуоресцентная невидимая (для резины, стекла, металла)", "от 352", "/osnastka/data/img/items/stamp_krask_noris199uv.gif"),
				array("Noris (для оснасток с металлическим клише, нумераторов, франкировальных машин)", "от 164", "/osnastka/data/img/items/stamp_krask_noris210.gif"),
				array("Noris (для хлопковых тканей и полотна)", "от 217", "/osnastka/data/img/items/stamp_krask_noris320.gif"),
				array("Trodat (обычная штемпельная краска)", "от 29", "/osnastka/data/img/items/stamp_krask_trodat7011.gif"),
				array("Сменные подушки д/серии Professional Line", "от 64", "/osnastka/data/img/items/stamp_pod_proff.gif"),
				array("Сменные подушки д/серии Printy", "от 37", "/osnastka/data/img/items/stamp_pod_printy.gif"),
				array("Штемпельные подушки Trodat", "от 44", "/osnastka/data/img/items/stamp_pod_trodat.gif"),
				array("Сменные подушки д/автоматических нумераторов Trodat", "147", "/osnastka/data/img/items/stamp_pod_trodat2.gif"),
			) ); ?>
		</div>
	</div>
	
	<div id="footer">
		<? page_footer(); ?>
	</div>
	
</div>
</body>
</html>