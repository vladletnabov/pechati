<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
<style>
.tblpricediv {
	width:685px;
	//border:1px solid navy;
	display:table;
}
.tblpricedivtr{
	clear:both;
	position:relative;
	display:block;
	width:685px;
	height:30px;
	margin:0;
	padding:0;
}
.tblpricedivtrh{
	clear:both;
	position:relative;
	display:block;
	width:685px;
	height:30px;
	margin:0;
	padding:0;
}
.tblpricedivtr:hover{
	clear:both;
	position:relative;
	display:block;
	width:685px;
	height:30px;
	/*margin:-10px -10px -10px -10px;
	padding:10px 10px 10px 10px;;*/
	background-color:#efe;
	box-shadow: 0 0 5px 4px #7f7f7f;
	z-index:120;
}
.tblpricedivtd1{	
	position:relative;
	display:inline;
	float:left;
	width:561px;	
	height:30px;
	border:1px solid navy;
	background-color:#fff;
	margin: -1px 0 0 -1px;
	line-height: 30px;
	
}
.tblpricedivtd2{
	position:relative;
	display:inline-block;
	float:left;
    overflow: hidden;
    white-space: nowrap;
	width:61px;	
	height:30px;
	border:1px solid navy;
	margin: -1px -1px 0 -1px;
	background-color:#efe;
	font-size: 14px;
	font-weight: bold;
	line-height: 30px;
	text-decoration:none;
}
.tblpricedivtd2  a {
	padding-left:5px; 
	text-decoration:none; 
	vertical-align: middle;
	color:#0088cc;
}
.tblpricedivtd2:hover{
	position:relative;
	display:inline-block;
	float:left;
    overflow: hidden;
    white-space: nowrap;
	width:61px;	
	height:30px;
	border:1px solid navy;
	margin: -1px -1px 0 -1px;
	background-color:#CDE;
	line-height: 30px;
	font-size: 14px;
	font-weight: bold;
	line-height: 30px;
	cursor:pointer;
	text-decoration:none;
}
.tblpricedivtd2:hover  a{
	text-decoration:none;
	color: #005580;
}
.tblpricedivtd3{
	position:relative;
	display:inline-block;
	float:left;
    overflow: hidden;
    white-space: nowrap;
	width:61px;	
	height:30px;
	border:1px solid navy;
	margin: -1px -1px 0 -1px;
	background-color:#Dfe;
	line-height: 30px;
	font-size: 14px;
	font-weight: bold;
	line-height: 30px;
	cursor:pointer;
	
}
.tblpricedivtd3  a {
	padding-left:5px; 
	text-decoration:none; 
	vertical-align: middle;
	color:#0088cc;
}
.tblpricedivtd3:hover{
	position:relative;
	display:inline-block;
	float:left;
    overflow: hidden;
    white-space: nowrap;
	width:61px;	
	height:30px;
	border:1px solid navy;
	margin: -1px -1px 0 -1px;
	background-color:#DDD;
	line-height: 30px;
	font-size: 14px;
	font-weight: bold;
	line-height: 30px;
	
}
.tblpricedivtd3:hover  a{
	text-decoration:none;
	color: #005580;
}
.tblpricedivtd1h{	
	position:relative;
	display:inline;
	float:left;
	width:561px;	
	height:30px;
	border:1px solid navy;
	background-color:#fff;
	margin: -1px 0 0 -1px;
	line-height: 30px;
	
}
.tblpricedivtd2h{
	position:relative;
	display:inline-block;
	float:left;
    overflow: hidden;
	width:61px;	
	height:30px;
	border:1px solid navy;
	margin: -1px -1px 0 -1px;
	background-color:#efe;
	line-height: 30px;
	font-size: 14px;
	font-weight: bold;
	line-height: 30px;
	
}
.tblpricedivtd3h{
	position:relative;
	display:inline-block;
	float:left;
    overflow: hidden;
    white-space: nowrap;
	width:61px;	
	height:30px;
	border:1px solid navy;
	margin: -1px -1px 0 -1px;
	background-color:#Dfe;
	line-height: 30px;
	font-size: 14px;
	font-weight: bold;
	line-height: 30px;
	
}

/*------*/
fieldset { padding:0; border:0; margin-top:25px; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }


</style>
<script>

  $(document).ready(function() { {

	  
    $("#create_button").button().click(function()  {

      //dialog.dialog( 'open' );
		/*var msg;
		if (window.jQuery) {
			msg = 'You are running jQuery version: ' + jQuery.fn.jquery + ' status: ' + status;
		} else {
			msg = 'jQuery is not installed';
		}
		alert(msg);
		
      $('#dialog_window_1').dialog();*/
	  
	  var create_dialog = $("#dialog_window_1");
      var create_button = $(this);
 
      // если окно уже открыто, то закрыть его и сменить надпись кнопки
      if( create_dialog.dialog("isOpen") ) {
         create_button.button("option", "label", "Создать новое окно");
         create_dialog.dialog("close");
      } else {
         create_button.button("option", "label", "Закрыть окно");
         create_dialog.dialog("open");
      }
    });
	

	
  });
	
  </script>


  

<div class="tblpricediv">
	<div class="tblpricedivtrh">
		<div class="tblpricedivtd1h">
			
		</div>
		<div class="tblpricedivtd2h"><a style="padding-left:5px; text-decoration:none; color:#333; vertical-align: middle;">
			1 день
		</a>
		</div>
		<div class="tblpricedivtd3h"><a style="padding-left:5px; text-decoration:none; color:#333; vertical-align: middle;">
			Срочно
		</a>
		</div>
	</div>
	<div class="tblpricedivtr">
		<div class="tblpricedivtd1"><a >
			qwe
		</a>
		</div>
		<div class="tblpricedivtd2"><a >
			650р.
		</a>
		</div>
		<div class="tblpricedivtd3"><a >
			900р.
		</a>
		</div>
	</div>
	<div class="tblpricedivtr">
		<div class="tblpricedivtd1"><a >
			qwe
		</a>
		</div>
		<div class="tblpricedivtd2"><a >
			1 200р.
		</a>
		</div>
		<div class="tblpricedivtd3"><a >
			1 950р.
		</a>
		</div>
	</div>
	<div class="tblpricedivtr">
		<div class="tblpricedivtd1"><a >
			qwe
		</a>
		</div>
		<div class="tblpricedivtd2"><a >
			750р.
		</a>
		</div>
		<div class="tblpricedivtd3"><a >
			1 000р.
		</a>
		</div>
	</div>

</div>


<button id="create_button" role="button"><span class="ui-button-text">Create new user</span></button>

<div id="dialog_window_1" class="dialog_window" title="Это наше первое диалоговое окно">
   <p>Привет, мир!</p>
</div>

