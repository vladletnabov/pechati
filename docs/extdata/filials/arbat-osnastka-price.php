<!--<script>
var price2 = 450;
</script>-->



    <!--<script src="/extdata/osnastka-slider/js/jquery.js"></script>
    <script src="/extdata/osnastka-slider/js/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-1.css">
    <script src="/extdata/osnastka-slider/js/initslider-1.js"></script>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-2.css">
    <script src="/extdata/osnastka-slider/js/initslider-2.js"></script>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-3.css">
    <script src="/extdata/osnastka-slider/js/initslider-3.js"></script>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-4.css">
    <script src="/extdata/osnastka-slider/js/initslider-4.js"></script>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-5.css">
    <script src="/extdata/osnastka-slider/js/initslider-5.js"></script>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-6.css">
    <script src="/extdata/osnastka-slider/js/initslider-6.js"></script>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-7.css">
    <script src="/extdata/osnastka-slider/js/initslider-7.js"></script>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider/js/amazingslider-8.css">
    <script src="/extdata/osnastka-slider/js/initslider-8.js"></script>-->



<script>
var price2 = 450;
</script>
<!--<P><img src="../pics/str.gif" width="5" height="9" alt=""> <B>Наиболее популярные модели оснастки</B><BR>-->


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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
<!--<P align="center"><img src="../pics/str.gif" width="5" height="9" alt=""> <B>Наиболее популярные модели оснастки</B><BR>(Нажмите на изображение для просмотра расширенного ассортимента)</P>-->
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
	padding:0;
	display:inline;
	float:left;*/
	cursor: pointer;
}
.osnatka-icon:hover{
	box-shadow: 0 0 5px 2px #e0ccff;
}
</style>

<script>
$(document).ready(function(){
  $('.autoplay').slick({
		slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 4000,
  });
});
				
</script>

	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider2/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider2/slick/slick-theme.css"/>
<script type="text/javascript" src="/extdata/osnastka-slider2/slick/slick.min.js"></script>

    <!--<script src="/extdata/osnastka-slider2/js/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="/extdata/osnastka-slider2/js/amazingslider-1.css">
    <script src="/extdata/osnastka-slider2/js/initslider-1.js"></script>-->
<div style="margin: 0 auto;">
	<div class="text-header-slider" style="text-align:center;">Круглые оснастки для печатей</div>
	
	<div class="autoplay" style="width:600px; margin: 0 auto;">
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/colop-r45.jpg" alt="colop-r45"  title="450 р." />
				<div class="text-slider2">
					<div class="title-slider">450 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 450; count_price();" checked value="Круглая оснастка Colop R45" />Круглая оснастка Colop R45<br />Размер: &#8960; 45мм</label></div>
				</div>
			</div>
		</div>
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-df-47.jpg" alt="DF47"  title="570 р."  />
				<div class="text-slider2">
					<div class="title-slider">570 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 570; count_price();" value="Оснастка Flesh DF47" />Оснастка Flesh DF47<br />Размер:  &#8960; 42мм</label></div>
				</div>
			</div>
		</div>
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-rgm.jpg" alt="rgm"  title="870 р." />
				<div class="text-slider2">
					<div class="title-slider">870 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 870; count_price();"  value="Оснастка Flesh RGM" />Оснастка Flesh RGM<br />Размер: &#8960; 38мм</label></div>
				</div>
			</div>
		</div>
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-rgmp.jpg" alt="rgmp"  title="870 р." />
				<div class="text-slider2">
					<div class="title-slider">870 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 870; count_price();"  value="Оснастка Flesh RGMP" />Оснастка Flesh RGMP<br />Размер: &#8960; 38мм</label></div>
				</div>
			</div>
		</div>
		
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-rvp.jpg" alt="rvp"  title="350 р." />
				<div class="text-slider2">
					<div class="title-slider">350 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 350; count_price();"  value="Оснастка Flesh RVP" />Оснастка Flesh RVP<br />Размер: &#8960; 40мм</label></div>
				</div>
			</div>
		</div>
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-rtsk.jpg" alt="rtsk"  title="350 р." />
				<div class="text-slider2">
					<div class="title-slider">350 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 350; count_price();"  value="Оснастка Flesh RTSK" />Оснастка Flesh RTSK<br />Размер: &#8960; 39мм</label></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div style="margin: 0 auto;">
	<div class="text-header-slider" style="text-align:center;">Прямоугольные оснастки для штампов</div>
	
	<div class="autoplay" style="width:600px; margin: 0 auto;">
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-df-1743.jpg" alt="DF-1743"  title="420 р."  />
				<div class="text-slider2">
					<div class="title-slider">420 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 450; count_price();"  value="Оснастка Flesh DF-1743" />Оснастка Flesh DF-1743<br />Размер:  13х39мм</label></div>
				</div>
			</div>
		</div>
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-df-3255.jpg" alt="DF-3255"  title="530 р." />
				<div class="text-slider2">
					<div class="title-slider">530 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 530; count_price();"  value="Оснастка Flesh DF-3255" />Оснастка Flesh DF-3255<br />Размер: 27х50м</label></div>
				</div>
			</div>
		</div>
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-df-3267.jpg" alt="DF-3267"  title="650 р." />
				<div class="text-slider2">
					<div class="title-slider">650 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 650; count_price();"  value="Оснастка Flesh DF-3267" />Оснастка Flesh DF-3267<br />Размер: 27х62м</label></div>
				</div>
			</div>
		</div>
		
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-df-3278.jpg" alt="DF-3278"  title="700 р." />
				<div class="text-slider2">
					<div class="title-slider">700 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 700; count_price();"  value="Оснастка Flesh DF-3278" />Оснастка Flesh DF-3278<br />Размер: 27х73м</label></div>
				</div>
			</div>
		</div>
		<div>
			<div class="img-slider">
				<img src="/extdata/osnastka-slider2/images/flesh/flesh-df-4355.jpg" alt="DF-4355"  title="750 р." />
				<div class="text-slider2">
					<div class="title-slider">750 р.</div>
					<div class="description-slider"><label><input type="radio" name="osnast" onClick="price2 = 750; count_price();"  value="Оснастка Flesh DF-4355" />Оснастка Flesh DF-4355<br />Размер: 39х50м</label></div>
				</div>
			</div>
		</div>
	</div>
</div>	
	
