<script src="/extdata/js/skif-carousel.js"></script>
<script>
$(document).ready(function(){
if($(window).width()>720) {
  $('.osn1').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn2').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn3').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn4').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn5').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn6').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn7').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn8').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 3,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
}
else {
	  $('.osn1').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn2').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn3').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn4').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn5').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  	
  $('.osn6').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn7').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});
  
  $('.osn8').skifCarousel({
					//btnNext: '.next',
					//btnPrev: '.prev',
					auto: 5000,
					visible: 1,
					rotateBy: 1,
					speed: 500, // скорость перемотки (в миллисекундах)
				});

} 
});		
</script>

<script>
var price2 = 450;
</script>
<!--<P>			<img src="../pics/str.gif" width="5" height="9" alt=""> <B>Наиболее популярные модели оснастки</B><BR>-->


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <style>
  .toggler { width: 500px; height: 200px; }
  #button { padding: .5em 1em; text-decoration: none; }
  #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
  #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
  </style>
  <script>
  //$(function() {
    // run the currently selected effect
    function runEffect(id) {
      // get effect type from
	  //alert(id);
	  var idElement = "#osnastka"+id;
	  var idElementVisible = idElement+":visible";
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 100 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 280, height: 185 } };
      }
		for (var i = 0; i < 9; i++) {
		   //$( idElementVisible ).removeAttr( "style" ).fadeOut();
		   var el = "#osnastka"+i;
		   $( el ).hide();
		}

      // run the effect
      $( idElement ).show( selectedEffect, options, 500, callback(idElementVisible) );
    };
 
    //callback function to bring a hidden box back
    function callback(idElementVisible) {
      //setTimeout(function() {
      //  $( idElementVisible ).removeAttr( "style" ).fadeOut();
      //}, 1000 );
    };
	function closeOsnastka(){
		for (var i = 0; i < 9; i++) {
		   //$( idElementVisible ).removeAttr( "style" ).fadeOut();
		   var el = "#osnastka"+i;
		   $( el ).hide();
		}
	}
 
    // set effect from select menu value
    //$( "#button" ).click(function() {
    //  runEffect();
    //});
 
    //$( "#effect" ).hide();
 // });
  </script>


<p><a style="font-size: 20px; color: navy;">Шаг 2: Выберите оснастку</a><br>(Нажмите на изображение для просмотра расширенного ассортимента)</a></P>
<!--<P align="center">			<img src="../pics/str.gif" width="5" height="9" alt=""> <B>Наиболее популярные модели оснастки</B><BR>(Нажмите на изображение для просмотра расширенного ассортимента)</P>-->
<style>
.oshastka-akkord{
	clear:both; width 100%; 
	display:none; 
	border:1px solid #efefef;
	box-shadow: 0 0 5px 2px #7f7f7f;
}
.osnatka-icon{
	/*width:24%; 
	margin:0;
	padding:3px;
	display:inline;
	float:left;*/
	/*cursor: pointer;*/
	padding:3px;
}
.osnatka-icon:hover{
	box-shadow: 0 0 5px 2px #e0ccff;
}
input[type="radio"] + .lab-osnast {
	width:100%;
	height: 50px;
}
input[type="radio"] + .lab-osnast:before {
	width:100%;
}
input[type="radio"]:checked + .lab-osnast:before {
    background-color:navy;
	/*border: 1px solid white;*/
	width:100%;
}
input[type="radio"] + .lab-osnast  + div {
	color: navy;
	text-align: center; 
}
input[type="radio"]:checked + .lab-osnast + div {
	color: #fff! important;
	text-align: center; 
}
.price{
	margin:-45px 0 45px 0! important;
	height: 30px;
	width:100%!important;
	text-align: center; 
	font-size:16px;
	font-weight:bold;
}


</style>

<div  class="row-fluid center-align" style="display:table; margin-bottom:10px; width:100%;">	
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/colop_printer_r40_100x133.jpg" width=100 height=133 onclick="runEffect(1);">
		<p>Автоматическая оснастка<BR>Диам. 40 мм.</p>
		<input type="Radio" name="osnast" checked value="Автоматическая оснастка Диам. 40 мм." onClick="price2 = 450; count_price();" id="osnast1" /> 
		<label for="osnast1" class="lab-osnast"><div class="price">450 руб.</div></label>
	</div>
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/shiny-s-843.jpg" width=100 height=133 onclick="runEffect(2);">
		<p>Автоматическая оснастка<BR>для мал. штампов</p>
		<input type="Radio" name="osnast" value="Автоматическая оснастка для мал. штампов" onClick="price2 = 300; count_price();" id="osnast2" /> 
		<label for="osnast2" class="lab-osnast"><div class="price">300 руб.</div></label>
	</div>
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/grm-4927.jpg" width=100 height=133 onclick="runEffect(3);">
		<p>Автоматическая оснастка<BR>для больших штампов</p>
		<input type="Radio" name="osnast" value="Автоматическая оснастка для больших штампов" onClick="price2 = 500; count_price();" id="osnast3" /> 
		<label for="osnast3" class="lab-osnast"><div class="price">500 руб.</div></label>
	</div>
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/colop-r3040.jpg" width=100 height=133  onclick="runEffect(4);">
		<p>Colop R 3040<BR>Диам. 45 мм.</p>
		<input type="Radio" name="osnast" value="Professional Line 5215 Диам. 45 мм." onClick="price2 = 1500; count_price();" id="osnast4"> 
		<label for="osnast4" class="lab-osnast"><div class="price">от 1500 руб.</div></label>
	</div>
	<div id="osnastka1" class="oshastka-akkord">
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_automat.php" ?>
		</div>
	
	</div>
	<div id="osnastka2" class="oshastka-akkord">
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_automat_mal.php" ?>
		</div>
	</div>
	<div id="osnastka3" class="oshastka-akkord">
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_automat_bolsh.php" ?>
		</div>
	</div>
	<div id="osnastka4" class="oshastka-akkord">
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_automat_profline.php" ?>
		</div>
	</div>
</div>
<!--<div  class="row-fluid center-align" style="height:10px; width:100%;"><div class="col-md-12"></div></div>-->
<div  class="row-fluid center-align" style="display:table; margin-top:10px; width:100%;">	
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/met_classic_100x133.jpg" width=100 height=133 onclick="runEffect(5);">
		<p>Металлические оснастки<br />для печатей и штампов</p>
		<input type="Radio" name="osnast" value="Металлические оснастки для печатей и штампов" onClick="price2 = 800; count_price();" id="osnast5"> 
		<label for="osnast5" class="lab-osnast"><div class="price">от 800 р.</div></label>
	</div>
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/met_techno_100x133.jpg" width=100 height=133 onclick="runEffect(6);">
		<p>Эксклюзивные <br />оснастки</p>
		<input type="Radio" name="osnast" value="Оригинальные оснастки" onClick="price2 = 1500; count_price();" id="osnast6"> 
		<label for="osnast6" class="lab-osnast"><div class="price">1500 р.</div></label>
	</div>
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/plasm_gerb40_100x133.jpg" width=100 height=133 onclick="runEffect(7);">
		<p>Оснастка с гербом<br />Диам. 40 мм.</p>
		<input type="Radio" name="osnast" value="Оснастка с гербом Диам. 40 мм." onClick="price2 = 0; count_price();" id="osnast7"> 
		<label for="osnast7" class="lab-osnast"><div class="price">Бесплатно.</div></label>
	</div>
	<div class="col-md-3 osnatka-icon">
		<img border=0 src="../pics/uslugi/elit_osn.jpg" width=100 height=133  onclick="runEffect(8);">
		<p>Элитные <BR>оснастки</p>
		<input type="Radio" name="osnast" value="Элитные оснастки" onClick="price2 = 5500; count_price();" id="osnast8"> 
		<label for="osnast8" class="lab-osnast"><div class="price">от 5500 р.</div></label>
	</div>
	<div id="osnastka5" class="oshastka-akkord">	
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_metal_pech_stamp.php" ?>
		</div>
	</div>
	<div id="osnastka6" class="oshastka-akkord">
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_metal_origin.php" ?>
		</div>
	</div>
	<div id="osnastka7" class="oshastka-akkord">
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_gerb.php" ?>
		</div>
	</div>
	<div id="osnastka8" class="oshastka-akkord">
		<div>
			<img src="/extdata/images/close-icon.png" style="float:right; cursor:pointer;" onClick="closeOsnastka();" alt="Закрыть"/>
		</div>
		<div style="clear:both; ">
		<?php require_once "../extdata/baseparts/osn_elit.php" ?>
		</div>
	</div>
</div>


