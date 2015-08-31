<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="http://wisdomweb.ru/editor/localization.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.arcticmodal.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.jgrowl.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
    <script src="feedback/js/feedback.js"></script>
    <script src="feedback/js/jquery.arcticmodal.js"></script>
    <script src="feedback/js/jquery.jgrowl.js"></script>
<style type="text/css">
#tabs
{
font-size:0.7em;
height:500px;
}
#tabs-1 p,#tabs-2 p,#tabs-3 p,#tabs-4 p,#tabs-5 p
{font-size:1.2em;}
#radio1 {margin-left:-3px;}
.ui-buttonset .ui-button {
margin-left: 0;
margin-right: -.6em;
}

.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default color-img {
background-color: red;
}

#filter ul.TSVYET {
max-height: 100px;
padding-top: 10px;
}
#filter ul.TSVYET {
list-style:none;
	max-height: 100px;
	padding-top: 10px;
}
#filter ul {
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
#filter ul.TSVYET li{
	width:17px;
	height:17px;
	overflow:hidden;
	display:block;
	float:left
}
#filter ul.TSVYET span.col_sample{
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


			  #color-sel .ui-selecting { border:1px dotted #FECA40; padding:2px; }
			  #color-sel .ui-state-default {background:none;}
			  #color-sel .ui-selected { border: 1px solid #F39814; color: white; }
			  #color-sel { list-style-type: none; margin: 0; padding: 0; width: 150px; }
			  #color-sel li { margin: 3px; padding: 1px; float: left; width: 20px; height: 20px; font-size: 4em; text-align: center; }

</style>

<script>
var base_price=1200;
var color= "red";
var pic=0;
var pic_pres=0;
var pic_new=200;
var pic_scan=500;

var dostav =0;
var dostav_kur =300;
var dostav_sam = 0;

var time=0;
var time_day=0;
var time_hour=300;
var stamp_count =1;

pic = pic_new;
time= time_day;
dostav = dostav_kur;

	function count_price(){
		document.getElementById('base_price').innerHTML = base_price;
		stamp_count = $('#number').val();
		document.getElementById('price').innerHTML = stamp_count*base_price + pic + dostav + time;
		return;
	}
	function showfileload(){
						$("#load-file").show();
					}
					function hidefileload(){
						$("#load-file").hide();
					}
					function picpresent(){
						showfileload();
						pic = pic_pres;
						count_price();
					}
					function picfromscan(){
						showfileload();
						pic = pic_scan;
						count_price();
					}
					function picpnew(){
						hidefileload();
						pic = pic_new;
						count_price();
					}
					function adddostavka(){
						dostav = dostav_kur;
						count_price();
					}
					function nondostavka(){
						dostav = dostav_sam;
						count_price();
					}
	$(window).load(function() {count_price();});
	
		$(document).ready(function(){
			$(".TSVYET li a").click(function(){
				$("#img img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
				$("#img h2").html($("> img", this).attr("title"));
				return false;
			});
			
			
				$("#open-dialog").click(function(){ $("#dial").dialog("open");});
				//Код первой вкладки (стандартное использование)
				   $("#dial").dialog({
				   width:880,
				   height:450,
				   autoOpen:false});
				//Код второй вкладки (модальное окно)
				   $("#dial2").dialog({modal:true,
				   width:400,
				   height:400,
				   autoOpen:false});
				//Код третьей вкладки (диалоговое окно с кнопками)
				   $("#dial3").dialog({buttons:{"Да":function(){ $(this).dialog("close");},
				   "Нет":function(){ $(this).dialog("close");}},
				   width:880,
				   height:500,
				   modal:true,
				   autoOpen:false});
			
			
			
			
		});
		
		$(function() {
		$( "#logist" ).buttonset();
		$( "#time" ).buttonset();
		$( "#clishe" ).buttonset();
		$( "#color" ).buttonset();
		
		
		$( "#color-sel" ).selectable();
				
			
				$(".color-click li a").click(function(){
					$("#img img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
					$("#img h2").html($("> img", this).attr("title"));
					color= $this.attr();
					return false;
				});
				$("#img>img").load(function(){$("#img>img:hidden").fadeIn("slow")});
				
				
				$( "#speed" ).selectmenu();
			 
				$( "#files" ).selectmenu();
			 
				$( "#number" )
				  .selectmenu()
				  .selectmenu( "menuWidget" )
					.addClass( "overflow" );
	  });
</script>


<div id="dial" title="Заказать печать на автоматической оснастке Colop R40">
	<script>
	  
	</script>
	<div  style="float:left; display:inline; width: 250px;max-width: 250px;">
		<div id="img" style="height:200px;">
		<img src="../zakaz/img/osnast/colop/colop-r-r.jpg" width="200px" height="200px" border="1px" />	
		</div>
	
	
		<div id="filter">
		
		
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
			Стоимость: <a id="base_price">1 200</a>р.
			<div style="background-color:#dc143c; max-width: 250px; text-align:center; line-height 50px;padding:25px 0 25px 0; border-radius:6px;">
				<a style="color:white; font-size:2em;">Итого: </a><a id="price" style="color:white; font-size:2em;">999999</a><a style="color:white;">p.</a>
			</div>
			
		</div>
	
	
	</div>
	  
	<div id="img-data" style="float:left; display:inline; max-width:600px; margin-left:10px; position: relative;">
	<div>
	  <div id="clishe" style="display:inline; float:left; max-width:300px; width:300px; ">
		Рисунок печати: <br />
			  <form>
				<input type="radio" id="clishe1" name="radio" onclick="picpresent()"><label for="clishe1" style="font-size:12px;">Есть</label>
				<input type="radio" id="clishe2" name="radio" onclick="picpnew()" checked="checked"><label for="clishe2" style="font-size:12px;">Новая</label>		
				<input type="radio" id="clishe3" name="radio" onclick="picfromscan()"><label for="clishe3" style="font-size:12px;">По оттиску</label>
				
				  <div id="load-file" style="margin-top:10px; display:none;">
					<input id="load-file" type="file" style="font-size:0.9em; padding:0; width:300px;">
				  </div>
				</form>
		</div>

		<div style="margin-left:15px; display:inline; float:left; max-width:250px;">
			Количество печатей:<br />
			<select name="number" id="number" style=" max-width:250px;" onchange=" count_price();">
			  <option selected="selected" onclick="stamp_count=1;count_price():">1</option>
			  <option onclick="stamp_count=2;count_price():">2</option>
			  <option onclick="stamp_count=3;count_price():">3</option>
			  <option onclick="stamp_count=4;count_price():">4</option>
			  <option onclick="stamp_count=5;count_price():">5</option>
			  <option onclick="stamp_count=6;count_price():">6</option>
			  <option onclick="stamp_count=7;count_price():">7</option>
			  <option onclick="stamp_count=8;count_price():">8</option>
			  <option onclick="stamp_count=9;count_price():">9</option>
			  <option onclick="stamp_count=10;count_price():">10</option>
			  <option onclick="stamp_count=11;count_price():">11</option>
			  <option onclick="stamp_count=12;count_price():">12</option>
			  <option onclick="stamp_count=13;count_price():">13</option>
			  <option onclick="stamp_count=14;count_price():">14</option>
			  <option onclick="stamp_count=15;count_price():">15</option>
			  <option onclick="stamp_count=16;count_price():">16</option>
			  <option onclick="stamp_count=17;count_price():">17</option>
			  <option onclick="stamp_count=18;count_price():">18</option>
			  <option onclick="stamp_count=19;count_price():">19</option>
			</select>
		</div>
	</div>
	<div style="clear:both;">
		<div style="position:relative; float:left; display:inline; width: 300px;">
		Доставка: <br />
		<form>
		  <div id="logist">
			<input type="radio" id="logist1" name="radio" checked="checked"  onclick="adddostavka()"><label for="logist1" style="font-size:12px;">Курьером</label>
			<input type="radio" id="logist2" name="radio" onclick="nondostavka()"><label for="logist2" style="font-size:12px;">Самовывоз</label>
		  </div>
		</form>
		</div>
		<div style="position:relative; float:left; display:inline;margin-left: 25px;">
		Срочность: <br />
		<form>
		  <div id="time">
			<input type="radio" id="time1" name="radio" checked="checked" onclick="time=time_day; count_price();"><label for="time1" style="font-size:12px;">1 день</label>
			<input type="radio" id="time2" name="radio"><label for="time2" style="font-size:12px;" onclick="time=time_hour; count_price();">за 1 час</label>
		  </div>
		</form>
		</div>
		<div id="message-form" style="clear:both; width:250px;">
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


<div style="position: relative; z-index:99; position: relative; margin-left: -22px;">
<h1 style="color:#0088cc; font-size:30px;margin-left: 20px;">Популярные товары</h1>
	<div id="tovary" style="width:100%; height:200px; margin: 0 0 20px 0; color:#333; background-color:#fff;">
			<div id="tovarpic" style="height:200px;float:left; display:block-inline;">
				<a href="#colopr40"><img src="../zakaz/img/osnast/colop/colop-r-r.jpg" width="200px" height="200px" border="0" /></a>	
			</div>
			<div id="tovarpic" style="height:200px;float:left; display:block-inline;">
				<a href="#colopr40"><img src="../zakaz/img/osnast/colop/colop-r-b.jpg" width="200px" height="200px" border="0" /></a>	
			</div>
			
	</div>
</div>
<div  style="max-width:947px; width:947px;height:20px;; background-color:#203052; color:#fff; position: relative;; position: relative; margin-left: -22px; margin-right: -250px;"></div>
<div id="liststamp" style="max-width:947px;width:947px;; background-color:#203052; color:#fff; position: relative; z-index:99; position: relative; margin-left: -22px; margin-right: -250px;">
	<div id="tovar1" style="width:100%; height:250px; margin: 0 0 20px 0; color:#333; background-color:#fff;">
		<div id="tovarpic" style="height:200px;float:left; display:block-inline;">
			<img src="../zakaz/img/osnast/colop/colop-r-r.jpg" width="200px" height="200px" border="0" />	
		</div>
		<div id="tovarpic2" style="height:200px;float:left; display:block-inline;padding: 50px 0 0 0;position: relative; margin-left: -50px;">
			<img src="../zakaz/img/osnast/pechat-mono.jpg" width="100px" height="100px" border="0" />	
		</div>
		
		<div id="tovarhead" style="height:200px;float:left; display:block-inline;padding: 10; margin-left: 20px; max-width:350px;">
			<a name="colopr40"><h1 style="color: #0088cc; font-style:italic; font-size:1.5em;">Печать на автоматической оснастке Colop R40</h1></a>
			Материал клише — резина<br />
			Оснастка — автоматическая<br />
			Производитель: Colop, Германия<br />
			Штемпельная подушка - встроенная<br />
		</div>
		<div id="tovarprice" style="height:200px;float:left; display:block-inline;padding: 10; margin-left: 20px; max-width:350px; color: #333;">
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