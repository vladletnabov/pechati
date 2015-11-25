<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="windows-1251">
    <title>Печати.РУ новый дизайн</title>
    <?php require_once "../extdata/baseparts/header.php" ?>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 0;
        padding-bottom: 0;
      }
      .navbar {
        margin-top: 20px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--<link href="css/style-ico.css" rel="stylesheet">-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
								   
	
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/plugins-scroll.js"></script>
	
    <script src="slider/js/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="slider/js/amazingslider-1.css">
    <script src="slider/js/initslider-1.js"></script>
	
	<script type="text/javascript" src="js/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
	
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="js/map-filials.js" type="text/javascript"></script>
<script>
	var clisherez=250;
	var clisherezsrochno=450;
	var priceclisherez=0;
	function countclisherez() {
		if (document.getElementById("clisherez1").checked) {
			priceclisherez = clisherez;
		}
		if(document.getElementById("clisherez2").checked){					
			priceclisherez = clisherezsrochno;
		}
		if((!document.getElementById("clisherez1").checked)&&(!document.getElementById("clisherez2").checked)){
			priceclisherez = 0;
			//alert("Клише будет изготовлено на базе фотополимера");
			
		}
		/*if ((document.getElementById("clisherez1").checked)&&(!document.getElementById("clisherez2").checked)){
			priceclisherez = 0;
			alert("Клише будет изготовлено на базе фотополимера");
		}*/
	}
</script>

<script>
	var otrisovka=350;
	var otrisovkasrochno=700;
	var priceotrisovka=0;
	function countotrisovka() {
		if (document.getElementById("otrisovka1").checked) {
			priceotrisovka = otrisovka;
		}
		if(document.getElementById("otrisovka2").checked){					
			priceotrisovka = otrisovkasrochno;
		}
		if((!document.getElementById("otrisovka1").checked)&&(!document.getElementById("otrisovka2").checked)){
			priceotrisovka = 0;
			alert("Без отрисовки");
		}
	}
	</script>

<style>
@media (min-width: 1200px) {
	input[type="radio"] + label {
	  width: 160px;
	}
	input[type="checkbox"] + label {
	  width: 160px;
	}
	input[type="radio"] + label::before {
		width: 160px;
	}

	input[type="checkbox"] + label::before {
		width: 160px;
	}
	input[type="radio"] + .navy-price2::before {
		width:320px ;
	}
	input[type="radio"]:checked + .navy-price2::before {
		width:320px ;
	}

	input[type="radio"] + .navy-price2 div{
		width:320px ;
	}
	.td-price{
		width: 160px;
	}
	.table-price {
		width:100%;
	}
}
@media (min-width: 980px)and (max-width: 1199px) {
	input[type="radio"] + label {
	  width: 160px;
	}
	input[type="checkbox"] + label {
	  width: 160px;
	}
	input[type="radio"] + label::before {
		width: 160px;
	}

	input[type="checkbox"] + label::before {
		width: 160px;
	}
	input[type="radio"] + .navy-price2::before {
		width:320px ;
	}
	input[type="radio"]:checked + .navy-price2::before {
		width:320px ;
	}

	input[type="radio"] + .navy-price2 div{
		width:320px ;
	}
	.td-price{
		width: 160px;
	}
	.table-price {
		width:100%;
	}

}

@media (min-width: 768px) and (max-width: 979px) {
	input[type="radio"] + label {
	  width: 80px;
	}
	input[type="checkbox"] + label {
	  width: 80px;
	}
	input[type="radio"] + label::before {
		width: 80px;
	}

	input[type="checkbox"] + label::before {
		width: 80px;
	}
	input[type="radio"] + .navy-price2::before {
		width:160px ;
	}
	input[type="radio"]:checked + .navy-price2::before {
		width:160px ;
	}

	input[type="radio"] + .navy-price2 div{
		width:160px ;
	}
	.td-price{
		width: 80px;
	}
	.table-price {
		width:100%;
	}
	.header-phone{
		color:#fff!important;
		top:50px!important;
		right:20px!important;
	}

}
@media (max-width: 767px) {
	input[type="radio"] + label {
	  width: 60px;
	}
	input[type="checkbox"] + label {
	  width: 60px;
	}
	input[type="radio"] + label::before {
		width: 60px;
	}

	input[type="checkbox"] + label::before {
		width: 60px;
	}
	input[type="radio"] + .navy-price2::before {
		width:120px ;
	}
	input[type="radio"]:checked + .navy-price2::before {
		width:120px ;
	}

	input[type="radio"] + .navy-price2 div{
		width:120px ;
	}
	.td-price{
		width: 60px;
	}
	.table-price {
		width:100%;
	}
	.header-phone{
		visibility: hidden;
	}

}





.listshadow{
	background-color: #fff;
	/*box-shadow: 0px 0px 8px rgba(249,248,255,0.5),0px 0px 8px rgba(249,248,255,0.5)*//* glow *//*, 0px 0px 20px rgba(0,104,55,0.5)*//* drop shadow*//*;*/
	box-shadow: 0 0 5px 2px #dfdfdf;
}
.border-grey{
	border: 1px solid #dfdfdf;
}
.header-page{
	text-align: center;
	font-size: 16px;
	font-weight: bold;
	line-height:20px;
	color:#333;
}
.inner-block{
	margin: 10px;
	padding: 10px;
}


input[type="radio"] {
    display:none;            
}
input[type="checkbox"] {
    display:none;            
}
input[type="radio"] + label {
  font-size: 12px;
  color: red;
  cursor: pointer;
  /*width: 60px;*/
  min-height: 30px;
	/*height:100%;*/
  margin: 0;
  padding: 0;
}
input[type="checkbox"] + label {
  font-size: 12px;
  color: red;
  cursor: pointer;
  /*width: 60px;*/
  min-height: 30px;
	/*height:100%;*/
}
input[type="radio"]:checked  label {
  font-size: 14px;
}
input[type="checkbox"]:checked  label {
  font-size: 14px;
}

label a{
	/*background: white;*/
}
input[type="radio"] + label::before {
    content: "";
    display: inline-block;
	/*border-radius:5px;*/
    min-height: 30px;
	height:100%;
    /*width: 60px;*/
    margin: 0;
    /*background-color: white;*/
    background-repeat: no-repeat;
	/*border:1px solid #fff;*/
}

input[type="checkbox"] + label::before {
    content: "";
    display: inline-block;
	/*border-radius:5px;*/
    min-height: 30px;
	height:100%;
    /*width: 60px;*/
    margin: 0;
    /*background-color: white;*/
    background-repeat: no-repeat;
	/*border:1px solid #fff;*/
}

/* RED BLOCK*/

input[type="radio"] + .navy-price::before {
    /*background-color: white;*//*red;*/
}
input[type="radio"]:checked + .navy-price::before {
    background-color:navy;
	border: 1px solid white;
}

input[type="radio"] + .navy-price div{
	color: navy;
}
input[type="radio"]:checked + .navy-price div{
	color: white;
	font-size: 14px;
}
input[type="radio"] + .navy-price2::before {
    /*background-color: white;*//*red;*/
	/*width:120px ! important;*/
}
input[type="radio"]:checked + .navy-price2::before {
    background-color:navy;
	border: 1px solid white;
	/*width:120px ! important;*/
}

input[type="radio"] + .navy-price2 div{
	color: navy;
	/*width:120px ! important;*/
}
input[type="radio"]:checked + .navy-price2 div{
	color: white;
	font-size: 14px;
}
input[type="checkbox"] + .navy-price::before {
    /*background-color: white;*//*red;*/
}
input[type="checkbox"]:checked + .navy-price::before {
    background-color:navy;
	border: 1px solid white;
}

input[type="checkbox"] + .navy-price div{
	color: navy;
}
input[type="checkbox"]:checked + .navy-price div{
	color: white;
	font-size: 14px;
}



.price-position{
    position: relative;
    text-align: center;
    margin-top: -30px;
    margin-left: 0px;
	font-size: 14px;
	font-weight: bold;
}
.tr-price{
	background-color: #ebeaef;
	min-height: 30px;
}
.td-price{
	/*width: 60px;*/
}
.table-price{
	margin:10px auto;
	cellpadding: 0;
	
    border-spacing: 1px;
    border-collapse: separate;
}
.center-align{
	text-align:center;
	font-size: 14pt;
}
.height-36{
	font-size:36pt;
	line-height:150pt;
}
.bodylist{
	margin-top: -59px;
	
}
.header-page-div{
	position:relative;
	background-image: url(/i/header-pr.png);
	background-position: left top; /* Положение фона */
    background-repeat: no-repeat; 
	height: 138px;
	z-index:10;
}
.top-header-pos{
	margin-top:40px;
}
.logo-img{
	margin:0 0 0 -8px;
	max-height: 138px;
}
.header-phone{
	position:absolute;
		right:0;
		top: 30px;
	color: #cc000a; 
	font-size:28px; 
	font-weight:bold; 
	height: 40px;
	float: right;
}
.header-phone:after{
	clear:both;
}
body{
	background-color: #f2f2f2;
}
</style>

  </head>

  <body>
<div class="wrapper">
	<div class="container">
		<div class="header-page-div">
			<img src="/i/logo-pr.png" class="logo-img" />
			<div class="header-phone">8 (495) 741-10-58</div>
		</div>
	</div>
	<div class="bodylist">
		<div class="container listshadow">
			<div class="row-fluid">
				<div class="span12 ">
					<div class="inner-block border-grey">
						<h1 class="header-page top-header-pos">
							Изготовление печатей, штампов, факсимиле.<br />
							Восстановление печатей по оттиску.
						</h1>
						
						<p><a style="font-size: 20px; color: navy;">Шаг 1: Выберите клише</a><br></p>
						<script>
						var price1 = 550;

									function uncheckCheckbox(idElement){
										document.getElementById(idElement).checked = false;
									}
						</script>
						<TABLE class="table-price">
						<TR  class="tr-price">
						<TD>
						<a name="klishe"></a><!--<P align=center><B>Клише из резины. </B></P>-->
						</TD>
						<TD class="td-price">
						<P align=center><B>1 день</B></P></TD>
						<TD class="td-price">
						<P align=center><B>Срочно</B></P></TD></TR>
						<TR  class="tr-price">
						<TD><strong>НОВЫЕ</strong> печати или штампы</TD>
						<TD class="td-price">
							<input id="srok1" type="radio" name="srok" value="Новые печати, штампы по шаблону за 1 день" hidden checked onClick="price1 = 550; count_price();">
							<label for="srok1" class="navy-price"><div class="price-position">550</div></label>
						</TD>
						<TD class="td-price">
							<input id="srok1a" type="radio" name="srok" value="Новые печати, штампы по шаблону срочно" hidden onClick="price1 = 850; count_price();">
							<label for="srok1a" class="navy-price"><div class="price-position">850</div></label>

						</TD></TR>
						<TR  class="tr-price">
						<TD>Печати, штампы, факсимиле <strong>по ОТТИСКУ</strong></TD>
						
						<TD class="td-price">
							<input id="srok2" type="radio" name="srok" value="Печать, штамп по оттиску за 1 день" hidden onClick="price1 = 850; count_price();">
							<label for="srok2" class="navy-price"><div class="price-position">850</div></label>
						</TD>
						<TD class="td-price">
							<input id="srok2a" type="radio" name="srok" value="Печать, штамп по оттиску срочно" hidden onClick="price1 = 1400; count_price();">
							<label for="srok2a" class="navy-price"><div class="price-position">1400</div></label>

						</TD></TR>
						
						<TR  class="tr-price">
						<TD>Факсимиле</TD>
						<TD class="td-price">
							<input id="srok3" type="radio" name="srok" value="Факсимиле за 1 день" hidden onClick="price1 = 650; count_price();">
							<label for="srok3" class="navy-price"><div class="price-position">650</div></label>
						</TD>
						<TD class="td-price">
							<input id="srok3a" type="radio" name="srok" value="Факсимиле срочно" hidden onClick="price1 = 950; count_price();">
							<label for="srok3a" class="navy-price"><div class="price-position">950</div></label>

						</TD></TR>
						
						<TR  class="tr-price">
						<TD>Изготовление <a href="/uslugi/ekslibris.html">экслибриса</a>, <a href="/uslugi/ekslibris.html">личной печати</a></TD>
						<TD class="td-price">
							<input id="srok4" type="radio" name="srok" value="Изготовление экслибриса, личной печати  за 1 день" hidden onClick="price1 = 2000; count_price();">
							<label for="srok4" class="navy-price"><div class="price-position">2000</div></label>
						</TD>
						<TD class="td-price">
							<input id="srok4a" type="radio" name="srok" value="Изготовление экслибриса, личной печати  срочно" hidden onClick="price1 = 5000; count_price();">
							<label for="srok4a" class="navy-price"><div class="price-position">5000</div></label>

						</TD></TR>
						
						
						<TR  class="tr-price">
						<TD>Изготовление печатей <b>БЕСПЛАТНО</b></TD>
						<TD colspan="2"  class="td-price">
							<input id="srok5a" type="radio" name="srok" value="Новые печати, штампы бесплатно срочно" hidden onClick="price1 = 0; count_price();">
							<label for="srok5a" class="navy-price2"><div class="price-position">Бесплатно</div></label>

						</TD></TR>
						
						<TR  class="tr-price">
						<TD>Печать, отрисованная в Corel Draw заказчиком или дубликат до 20 кв. см</TD>
						<TD class="td-price">
							<input id="srok6" type="radio" name="srok" value="Печать, отрисованная в Corel Draw заказчиком или дубликат за 1 день" hidden onClick="price1 = 350; count_price();">
							<label for="srok6" class="navy-price"><div class="price-position">350</div></label>
						</TD>
						<TD class="td-price">
							<input id="srok6a" type="radio" name="srok" value="Печать, отрисованная в Corel Draw заказчиком или дубликат срочно" hidden onClick="price1 = 500; count_price();">
							<label for="srok6a" class="navy-price"><div class="price-position">500</div></label>

						</TD></TR>
						
						<TR  class="tr-price">
						<TD>Маленькие штампы 1-2 слова типа "копия верна", "оплачено"</TD>
						
						
						<TD class="td-price">
							<input id="srok7" type="radio" name="srok" value="Маленькие штампы 1-2 слова типа 'копия верна', 'оплачено' за 1 день" hidden onClick="price1 = 200; count_price();">
							<label for="srok7" class="navy-price"><div class="price-position">200</div></label>
						</TD class="td-price">
						<TD class="td-price">
							<input id="srok7a" type="radio" name="srok" value="Маленькие штампы 1-2 слова типа 'копия верна', 'оплачено' срочно" hidden onClick="price1 = 400; count_price();">
							<label for="srok7a" class="navy-price"><div class="price-position">400</div></label>

						</TD></TR>
						
						
						
						<tr>
									<td colspan="3">
							<a name="uslugi"></a><p align="center"><strong>Дополнительные услуги</strong></p>
									</td>
							</tr>
							<tr  class="tr-price" align="center">
								<td align="left">Изготовление клише из резины, дополнительно к общей стоимости клише</td>
								
								<TD class="td-price">
									<input id="clisherez1" type="checkbox" name="clisherez" value="Изготовление клише из резины, дополнительно к общей стоимости клише за 1 день" hidden onClick="uncheckCheckbox('clisherez2'); countclisherez(); count_price();">
									<label for="clisherez1" class="navy-price"><div class="price-position">650</div></label>
								</TD>
								<TD class="td-price">
									<input id="clisherez2" type="checkbox" name="clisherezsrochno" value="Изготовление клише из резины, дополнительно к общей стоимости клише срочно" hidden onClick="uncheckCheckbox('clisherez1'); countclisherez(); count_price();">
									<label for="clisherez2" class="navy-price"><div class="price-position">950</div></label>

								</TD>
								
							</tr>
							<tr  class="tr-price" align="center">
								<td align="left">Отрисовка логотипа, графического изображения в Corel Draw</td>
								
								
								<TD class="td-price">
									<input id="otrisovka1" type="checkbox" name="otrisov" value="Отрисовка логотипа, графического изображения в Corel Draw за 1 день" hidden onClick="uncheckCheckbox('otrisovka2'); countotrisovka();  count_price();">
									<label for="otrisovka1" class="navy-price"><div class="price-position">от 350</div></label>
								</TD>
								<TD class="td-price">
									<input id="otrisovka2" type="checkbox" name="otrisov" value="Отрисовка логотипа, графического изображения в Corel Draw срочно" hidden onClick="uncheckCheckbox('otrisovka1'); countotrisovka(); count_price();">
									<label for="otrisovka2" class="navy-price"><div class="price-position">от 700</div></label>

								</TD>
								
							</tr>
							<!--<tr  class="tr-price" align="center">
								<td align="left">Доставка</td>
								<td colspan="3">
								<script>
									var dostavka=300;
									var pricedostav=0;
									</script>
									<P align=center><input type="checkbox" name="dostav" value="Отрисовка логотипа, графического изображения"  onClick="countdostavka(); count_price();" id="dostavka1"> <label for="dostav1">300</label></P>
								
								</td>
							</tr>-->
						</TABLE></P>
						<UL>
						<LI>
						<P align=justify>БЕСПЛАТНОЕ изготовление печати при условии открытия счёта в Банке "Открытие". Подробности узнавайте у наших менеджеров.</P></li>
						</UL>
						
					</div>
				</div>
			</div>	
			<div class="row-fluid">
				<div class="span12 ">
					<div class="inner-block border-grey">
					<?php require_once "../extdata/baseparts/osnastka-price-bootstrap.php" ?>
					</div>
				</div>
			</div>	
			
			<div class="row-fluid">
				<div class="span12 ">
					<div class="inner-block border-grey">
					<?php require_once "../extdata/baseparts/listfilials-bootstrap.php" ?>
					</div>
				</div>
			</div>	
			
			<div class="row-fluid">
				<div class="span12 ">
					<div class="inner-block border-grey">
					<?php require_once "../extdata/baseparts/pechati-is-bootstrap.php" ?>
					</div>
				</div>
			</div>	
			
			<div class="row-fluid">
				<div class="span12 ">
					<div class="inner-block border-grey">
					<?php require_once "../extdata/baseparts/howmuch-bootstrap.php" ?>
					</div>
				</div>
			</div>	
			
			
			
			
			
			
			
			<div class="row-fluid">
				<div class="span12 ">
					<div class="inner-block border-grey">
					<?php require_once "../extdata/baseparts/our-clients-bootstrap.php" ?>
					</div>
				</div>
			</div>	
			
			<div class="row-fluid">
				<div class="span12 ">
					<div class="inner-block border-grey">
					<?php require_once "../extdata/alphabitmetro-uslugi-bootstrap.php" ?>
					</div>
				</div>
			</div>	
			
		</div>	
	</div>
	

	
	
	<div class="container">
		<div class="row-fluid">
			  <div class="span12 head-block-h1">
				
				
			  </div>
		</div>
	
	</div>
	
	

		


</div>	
	

	
	
     


</body>
</html>
