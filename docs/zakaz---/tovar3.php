
<style type="text/css">
#tabs
{
font-size:0.7em;
height:500px;
}
#tabs-13 p,#tabs-23 p,#tabs-33 p,#tabs-43 p,#tabs-53 p
{font-size:1.2em;}
#radio13 {margin-left:-3px;}
.ui-buttonset .ui-button {
margin-left: 0;
margin-right: -.6em;
}

.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default color-img {
background-color: red;
}

#filter3 ul.TSVYET {
max-height: 100px;
padding-top: 10px;
}
#filter3 ul.TSVYET {
list-style:none;
	max-height: 100px;
	padding-top: 10px;
}
#filter3 ul {
list-style:none;
	font-size: 11px;
	padding: 5px 0;
	max-height: 150px;
	overflow-x: hidden;
	overflow-y: auto;
}
#filter ul li {
	cursor: pointer;
	padding: 2px 0 2px 10px;
}
TSVYET li {
	width: 17px;
	height: 17px;
	overflow: hidden;
	display: block;
	float: left;
}
.TSVYET li span{display:none}
.TSVYET chosen{
	border:2px solid #558dbd;
	padding:4px !important;
	margin:0 0 3px 4px !important
}
.TSVYET li{
	border:2px solid #e1e1e1;
	border-radius: 6px;
	padding:4px !important;
	margin:0 0 3px 4px !important
}
.TSVYET{
	max-height:100px;
	padding-top:10px
}
#filter3 ul.TSVYET li{
	width:17px;
	height:17px;
	overflow:hidden;
	display:block;
	float:left
}
#filter3 ul.TSVYET span.col_sample{
	border:1px solid #ccc;
	height:15px;
	width:15px;
	margin-bottom:0 !important;
	margin-left:0 !important;
	display:inline-block
}
.TSVYET span.col_sample {
	border: 1px solid #ccc;
	height: 15px;
	width: 15px;
	margin-bottom: 0 !important;
	margin-left: 0 !important;
	display: inline-block;
}


			  #color-sel3 .ui-selecting { border:1px dotted #FECA40; padding:2px; }
			  #color-sel3 .ui-state-default {background:none;}
			  #color-sel3 .ui-selected { border: 1px solid #F39814; color: white; }
			  #color-sel3 { list-style-type: none; margin: 0; padding: 0; width: 150px; }
			  #color-sel3 li { margin: 3px; padding: 1px; float: left; width: 20px; height: 20px; font-size: 4em; text-align: center; }

</style>

<script>
var base_price3=1200;
var color3= "red";
var pic3=0;
var pic_pres3=0;
var pic_new3=200;
var pic_scan3=500;

var dostav3 =0;
var dostav_kur3 =300;
var dostav_sam3 = 0;

var time3=0;
var time_day3=0;
var time_hour3=300;
var stamp_count3 =1;

pic3 = pic_new3;
time3= time_day3;
dostav3 = dostav_kur3;

	function count_price3(){
		document.getElementById('base_price3').innerHTML = base_price;
		stamp_count = $('#number3').val();
		document.getElementById('price3').innerHTML = stamp_count3*base_price3 + pic3 + dostav3 + time3;
		return;
	}
	function showfileload3(){
						$("#load-file3").show();
					}
					function hidefileload3(){
						$("#load-file3").hide();
					}
					function picpresent3(){
						showfileload3();
						pic3 = pic_pres3;
						count_price3();
					}
					function picfromscan3(){
						showfileload3();
						pic3 = pic_scan3;
						count_price3();
					}
					function picpnew3(){
						hidefileload3();
						pic3 = pic_new3;
						count_price3();
					}
					function adddostavka3(){
						dostav3 = dostav_kur3;
						count_price3();
					}
					function nondostavka3(){
						dostav3 = dostav_sam3;
						count_price3();
					}
	$(window).load(function() {count_price3();});
	
		$(document).ready(function(){
			$(".TSVYET li a").click(function(){
				$("#img3 img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
				$("#img3 h2").html($("> img", this).attr("title"));
				return false;
			});
			
			
				$("#open-dialog3").click(function(){ $("#dial3").dialog("open");});
				//Код первой вкладки (стандартное использование)
				   $("#dial3").dialog({
				   width:880,
				   height:450,
				   autoOpen:false});
			
			
			
			
		});
		
		$(function() {
		$( "#logist3" ).buttonset();
		$( "#time3" ).buttonset();
		$( "#clishe3" ).buttonset();
		$( "#color3" ).buttonset();
		
		
		$( "#color-sel3" ).selectable();
				
			
				$(".color-click li a").click(function(){
					$("#img3 img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
					$("#img3 h2").html($("> img", this).attr("title"));
					color3= $this.attr();
					return false;
				});
				$("#img3>img").load(function(){$("#img>img:hidden").fadeIn("slow")});
				
				
				$( "#speed3" ).selectmenu();
			 
				$( "#files3" ).selectmenu();
			 
				$( "#number3" )
				  .selectmenu()
				  .selectmenu( "menuWidget" )
					.addClass( "overflow" );
	  });
</script>


<div id="dial2" title="Заказать печать на автоматической оснастке Colop R40">
	<script>
	  
	</script>
	<div  style="float:left; display:inline; width: 250px;max-width: 250px;">
		<div id="img3" style="height:200px;">
		<img src="../zakaz/img/osnast/colop/colop-r-r.jpg" width="200px" height="200px" border="1px" />	
		</div>
	
	
		<div id="filter3">
		
		
			<a style="margin-bottom:0;">Цвет оснастки:</a>
			
			<!--<ol id="color-sel" class="color-click" >
			  <li class="ui-state-default" style="background-color:red;"> <a href="img/osnast/colop/colop-r-r.jpg" title="red"> </a> </li>
			  <li class="ui-state-default" style="background-color:blue;"><a href="img/osnast/colop/colop-r-w.jpg" title="blue"> </a></li>
			  <li class="ui-state-default" style="background-color:black;"><a href="img/osnast/colop/colop-r-b.jpg" title="black"> </a></li>
			</ol>-->
			
				<ul class="TSVYET" style="margin-top:-5px;"> 
					<li> <a href="../zakaz/img/osnast/colop/colop-r-r.jpg" title="red"> <span class="col_sample" style="background-color:red; border:1px red dashed;"></span> </a> </li> 
					<li> <a href="../zakaz/img/osnast/colop/colop-r-w.jpg" title="blue" > <span class="col_sample" style="background-color:blue"></span> </a> </li> 
					<li> <a href="../zakaz/img/osnast/colop/colop-r-b.jpg" title="black"> <span class="col_sample" style="background-color:black"></span> </a> </li> 
				</ul>
			Стоимость: <a id="base_price3">1 200</a>р.
			<div style="background-color:#dc143c; max-width: 250px; text-align:center; line-height 50px;padding:25px 0 25px 0; border-radius:6px;">
				<a style="color:white; font-size:2em;">Итого: </a><a id="price3" style="color:white; font-size:2em;">999999</a><a style="color:white;">p.</a>
			</div>
			
		</div>
	
	
	</div>
	  
	<div id="img-data3" style="float:left; display:inline; max-width:600px; margin-left:10px; position: relative;">
	<div>
	  <div id="clishe3" style="display:inline; float:left; max-width:300px; width:300px; ">
		Рисунок печати: <br />
			  <form>
				<input type="radio" id="clishe13" name="radio" onclick="picpresent3()"><label for="clishe13" style="font-size:12px;">Есть</label>
				<input type="radio" id="clishe23" name="radio" onclick="picpnew3()" checked="checked"><label for="clishe23" style="font-size:12px;">Новая</label>		
				<input type="radio" id="clishe33" name="radio" onclick="picfromscan3()"><label for="clishe33" style="font-size:12px;">По оттиску</label>
				
				  <div id="load-file3" style="margin-top:10px; display:none;">
					<input id="load-file3" type="file" style="font-size:0.9em; padding:0; width:300px;">
				  </div>
				</form>
		</div>

		<div style="margin-left:15px; display:inline; float:left; max-width:250px;">
			Количество печатей:<br />
			<select name="number" id="number3" style=" max-width:250px;" onchange=" count_price3();">
			  <option selected="selected" onclick="stamp_count=1;count_price():">1</option>
			  <option onclick="stamp_count3=2;count_price3():">2</option>
			  <option onclick="stamp_count3=3;count_price3():">3</option>
			  <option onclick="stamp_count3=4;count_price3():">4</option>
			  <option onclick="stamp_count3=5;count_price3():">5</option>
			  <option onclick="stamp_count3=6;count_price3():">6</option>
			  <option onclick="stamp_count3=7;count_price3():">7</option>
			  <option onclick="stamp_count3=8;count_price3():">8</option>
			  <option onclick="stamp_count3=9;count_price3():">9</option>
			  <option onclick="stamp_count3=10;count_price3():">10</option>
			  <option onclick="stamp_count3=11;count_price3():">11</option>
			  <option onclick="stamp_count3=12;count_price3():">12</option>
			  <option onclick="stamp_count3=13;count_price3():">13</option>
			  <option onclick="stamp_count3=14;count_price3():">14</option>
			  <option onclick="stamp_count3=15;count_price3():">15</option>
			  <option onclick="stamp_count3=16;count_price3():">16</option>
			  <option onclick="stamp_count3=17;count_price3():">17</option>
			  <option onclick="stamp_count3=18;count_price3():">18</option>
			  <option onclick="stamp_count3=19;count_price3():">19</option>
			</select>
		</div>
	</div>
	<div style="clear:both;">
		<div style="position:relative; float:left; display:inline; width: 300px;">
		Доставка: <br />
		<form>
		  <div id="logist">
			<input type="radio" id="logist13" name="radio" checked="checked"  onclick="adddostavka3()"><label for="logist13" style="font-size:12px;">Курьером</label>
			<input type="radio" id="logist23" name="radio" onclick="nondostavka3()"><label for="logist23" style="font-size:12px;">Самовывоз</label>
		  </div>
		</form>
		</div>
		<div style="position:relative; float:left; display:inline;margin-left: 25px;">
		Срочность: <br />
		<form>
		  <div id="time">
			<input type="radio" id="time13" name="radio" checked="checked" onclick="time3=time_day3; count_price3();"><label for="time13" style="font-size:12px;">1 день</label>
			<input type="radio" id="time23" name="radio"><label for="time23" style="font-size:12px;" onclick="time3=time_hour3; count_price3();">за 1 час</label>
		  </div>
		</form>
		</div>
		<div id="message-form3" style="clear:both; width:250px;">
			<div class="input-prepend" style="margin-left:0px; ">
							<span class="add-on"><i class="icon-user"></i></span>
							<input class="input-large focused" name="name" type="text" placeholder="Имя и телефон" style="width:200px;">
						</div>
			<div class="input-prepend" style="margin-left:0px; ">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input class="input-large focused" name="e-mail" type="text" placeholder="Ваш E-mail" style="width:200px;">
							</div>
			<div class="input-prepend" style="margin-left:0px; ">
								<textarea style="width:550px; height:100px; max-height:110px;max-width:550px;"></textarea>
							</div>
	
		</div>
	
	</div>

	
	</div>
	
	
</div>


<div id="liststamp3" style="max-width:947px;width:947px;; background-color:#203052; color:#fff; position: relative; z-index:99; position: relative; margin-left: -22px; margin-right: -250px;">
	<div id="tovar3" style="width:100%; height:250px; margin: 0 0 20px 0; color:#333; background-color:#fff;">
		<div id="tovarpic-3" style="height:200px;float:left; display:block-inline;">
			<img src="../zakaz/img/osnast/colop/colop-r-w.jpg" width="200px" height="200px" border="0" />	
		</div>
		<div id="tovarpic2-3" style="height:200px;float:left; display:block-inline;padding: 50px 0 0 0;position: relative; margin-left: -50px;">
			<img src="../zakaz/img/osnast/pechat-mono.jpg" width="100px" height="100px" border="0" />	
		</div>
		
		<div id="tovarhead3-3" style="height:200px;float:left; display:block-inline;padding: 10; margin-left: 20px; max-width:350px;">
			<a name="colopr40"><h1 style="color: #0088cc; font-style:italic; font-size:1.5em;">Печать на автоматической оснастке RGM R40</h1></a>
			Материал клише — резина<br />
			Оснастка — автоматическая<br />
			Производитель: Colop, Германия<br />
			Штемпельная подушка - встроенная<br />
		</div>
		<div id="tovarprice33" style="height:200px;float:left; display:block-inline;padding: 10; margin-left: 20px; max-width:350px; color: #333;">
			<h1 style="color: #0088cc; font-style:italic; font-size:1.5em;">Хочу заказать печать</h1>
			<table cellspacing="0" cellpadding="0">
			<tr style="height:40px;"><td>
			<a style="color:#203052; text-decoration:none;">новая печать:</a></td><td><a style="margin:20px; border:1px solid #203052; background-color:#203052; border-radius: 4px; color:#fff;"> от 1200 р.</a><br />
			</td></tr>
			<tr><td>
			<a style="color:#203052; text-decoration:none;">печать по оттиску:</a></td><td><a style="margin:20px; border:1px solid #203052; background-color:#203052; border-radius: 4px; color:#fff;"> от 1500 р.</a>
			</td></tr>
			</table>
			<input type="button" id="open-dialog" value="Заказать сейчас" style="width:100%; margin-top:40px; background-color:#203052;border:1px solid #203052; border-radius: 4px; color: #fff; font-size: 2em; height: 2.5em;"/>
		</div>
	
	
	
			
	</div>
	<div style="height: 200px;">
	<b>Внимание!</b><br /> Цены указы для одной печати. При заказе от трёх печатей действует скидка. Подробности уточняйте у менеджера.
	</div>

</div>