<style>
	.accord-filial-item {
		margin:0;
	}
	.accord-header {
		width:100%;
		height: 20px;
		color: #fff;
		font-size: 16px;
		font-weight:bold;
		margin:0px;
		padding:10px 0;
		cursor:pointer;
	}
	.accord-header-red {
		background-color:red;	
		border: 1px solid red;	
	}
	.accord-header-green {
		background-color: green;	
		border: 1px solid green;	
	}
	.accord-header-blue {
		background-color:blue;	
		border: 1px solid blue;	
	}
	.accord-header-grey {
		background-color:grey;	
		border: 1px solid grey;	
	}
	.accord-body {
		height:0;
		background-color: #fff;
		width:100%;
		border: 1px solid #efefef;
		margin:0;
		padding:0;
		overflow:hidden;
	}
	.accord-body-elem {
		margin: 20px 0 0 0;
		background-color:rgba(255,255,255, 0.1);
		border: 1px solid #dfdfdf;
		text-align:left;
		padding:0;
		width:100%;
	}
	.accord-body-price{
		border:0;
	}
	.accord-body-price span{
		font-weight: bold;
		font-size: 18px;
	}
	.accord-body-price .zakaz-price{
		font-size: 24px;
		font-weight: bold;
		color: red;
	}
	.accord-body-elem input {
		border: 0;
		background-color:(255,255,255,0.1);
		height:30px;
		margin:0  ;
		padding:0;
		width:100%;
	}
	.accord-body-elem textarea {
		max-width: 100%;
		min-width: 100%;
		background-color: rgba(255,255,255, 0.1);
		border:0;
		height:105px;
		padding: 0;
		margin:0;
		space: 0;
		font-size: 14px;
		line-height:16px;
	}
	.accord-body-elem textarea:before{
		clear:both;
	}
	.accord-body-file{
		border:0;
	}
	.send-button{
		text-transform: uppercase;
		color: #fff;
		background-color: orange;
		text-align:center;
		padding: 10px;
		font-weight:bold;
		cursor:pointer;
	}
	.send-button:hover{		
		background-color: gold;
		color:#333;
	}
	.send-button:active{		
		background-color: #fff;
		color:#333;
		border: 1px solid orange;
	}
	.span-enter{
		padding:0;
		margin:10px;
		/*border:1px dotted navy;*/
	}
	.sub-body{
		margin:20px;
	}
</style>

<script>
$(document).ready(function(){
	$(".accord-header").click(function(){
		var parentId = $(this).parent().attr('id');
		var parentObj= $(this).parent();
		//getIdAccordBody();	
		//var thisBodyId= $("#$parentId .accord-body").attr('id');
		//alert($(parentObj).attr('id'));
		//$(parentObj).children('.accord-body').height(0);
		getIdAccordBody(parentObj);	
		//alert('hi');
	});

});
function getIdAccordBody(parent){
	var elements = $.makeArray($('.accord-filial-item'));
	//alert(elements);
	var a = " "
	for(var i=0;i<$(elements).length; i++){
		//a = a + " : " + elements[i].attr('id');
		var el = elements[i];
		var str = $(el).attr('id');
		
		
		if(str.localeCompare($(parent).attr('id'))){
			//alert( str ); // -1
			$(el).children('.accord-body').css('height', '0px');
			//alert($(el).attr('id'));
		}else {
			//alert( '++++++' ); // -1
			$(el).children('.accord-body').css('height', '410px');
		}
		//a = a + " : " +$(el).attr('id');
		//alert($(el).attr('id'));
	}
	//a = a + " . " + $(elements).length;
	//alert(a);
	return false;
}
</script>
<p align="center" style="font-size: 18pt;"><strong>Выберите филиал</strong></p>
<div class="row-fluid center-align">
		<div class="span6">
			<div id="filial-1" class="accord-filial-item">
				<div class="accord-header accord-header-red">м.Станция1</div>
				<div class="accord-body">
					<div class="sub-body">
						<div class="accord-body-elem accord-body-price">
							<span>Стоимость Вашего заказа: </span> <span class="zakaz-price">1000</span> <span>руб.</span>
						</div>
						<div class="accord-body-elem accord-body-name">
							<input type="text" name="name" value=" Введите имя и телефон" onfocus="if (this.value == ' Введите имя и телефон') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите имя и телефон';}" />
						</div>
						<div class="accord-body-elem accord-body-email">
							<input type="text" name="email" value=" Введите e-mail" onfocus="if (this.value == ' Введите e-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите e-mail';}" />
						</div>
						<div class="accord-body-elem accord-body-file">
							<input type="file" />
						</div>
						<div class="accord-body-elem accord-body-name">
							<textarea name="content" onblur="if(this.value=='') this.value='Ваше сообщение...';" onfocus="if(this.value=='Ваше сообщение...') this.value='';">Ваше сообщение...</textarea>
						</div>
						<div class="accord-body-elem accord-body-send">
							<div class="send-button">Отправить</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="filial-2" class="accord-filial-item">
				<div class="accord-header accord-header-red">м.Станция2</div>
				<div class="accord-body">
					<div class="sub-body">
						<div class="accord-body-elem accord-body-price">
							<span>Стоимость Вашего заказа: </span> <span class="zakaz-price">1000</span> <span>руб.</span>
						</div>
						<div class="accord-body-elem accord-body-name">
							<input type="text" name="name" value=" Введите имя и телефон" onfocus="if (this.value == ' Введите имя и телефон') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите имя и телефон';}" />
						</div>
						<div class="accord-body-elem accord-body-email">
							<input type="text" name="email" value=" Введите e-mail" onfocus="if (this.value == ' Введите e-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите e-mail';}" />
						</div>
						<div class="accord-body-elem accord-body-file">
							<input type="file" />
						</div>
						<div class="accord-body-elem accord-body-name">
							<textarea name="content" onblur="if(this.value=='') this.value='Ваше сообщение...';" onfocus="if(this.value=='Ваше сообщение...') this.value='';">Ваше сообщение...</textarea>
						</div>
						<div class="accord-body-elem accord-body-send">
							<div class="send-button">Отправить</div>
						</div>
					</div>
				</div>
			</div>
			<div id="filial-3" class="accord-filial-item">
				<div class="accord-header accord-header-green">м.Станция3</div>
				<div class="accord-body">
					<div class="sub-body">
						<div class="accord-body-elem accord-body-price">
							<span>Стоимость Вашего заказа: </span> <span class="zakaz-price">1000</span> <span>руб.</span>
						</div>
						<div class="accord-body-elem accord-body-name">
							<input type="text" name="name" value=" Введите имя и телефон" onfocus="if (this.value == ' Введите имя и телефон') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите имя и телефон';}" />
						</div>
						<div class="accord-body-elem accord-body-email">
							<input type="text" name="email" value=" Введите e-mail" onfocus="if (this.value == ' Введите e-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите e-mail';}" />
						</div>
						<div class="accord-body-elem accord-body-file">
							<input type="file" />
						</div>
						<div class="accord-body-elem accord-body-name">
							<textarea name="content" onblur="if(this.value=='') this.value='Ваше сообщение...';" onfocus="if(this.value=='Ваше сообщение...') this.value='';">Ваше сообщение...</textarea>
						</div>
						<div class="accord-body-elem accord-body-send">
							<div class="send-button">Отправить</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="span6">
		
			<div id="filial-4" class="accord-filial-item">
				<div class="accord-header accord-header-blue">м.Станция4</div>
				<div class="accord-body">
					<div class="sub-body">
						<div class="accord-body-elem accord-body-price">
							<span>Стоимость Вашего заказа: </span> <span class="zakaz-price">1000</span> <span>руб.</span>
						</div>
						<div class="accord-body-elem accord-body-name">
							<input type="text" name="name" value=" Введите имя и телефон" onfocus="if (this.value == ' Введите имя и телефон') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите имя и телефон';}" />
						</div>
						<div class="accord-body-elem accord-body-email">
							<input type="text" name="email" value=" Введите e-mail" onfocus="if (this.value == ' Введите e-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите e-mail';}" />
						</div>
						<div class="accord-body-elem accord-body-file">
							<input type="file" />
						</div>
						<div class="accord-body-elem accord-body-name">
							<textarea name="content" onblur="if(this.value=='') this.value='Ваше сообщение...';" onfocus="if(this.value=='Ваше сообщение...') this.value='';">Ваше сообщение...</textarea>
						</div>
						<div class="accord-body-elem accord-body-send">
							<div class="send-button">Отправить</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="filial-5" class="accord-filial-item">
				<div class="accord-header accord-header-grey">м.Станция5</div>
				<div class="accord-body">
					<div class="sub-body">
						<div class="accord-body-elem accord-body-price">
							<span>Стоимость Вашего заказа: </span> <span class="zakaz-price">1000</span> <span>руб.</span>
						</div>
						<div class="accord-body-elem accord-body-name">
							<input type="text" name="name" value=" Введите имя и телефон" onfocus="if (this.value == ' Введите имя и телефон') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите имя и телефон';}" />
						</div>
						<div class="accord-body-elem accord-body-email">
							<input type="text" name="email" value=" Введите e-mail" onfocus="if (this.value == ' Введите e-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите e-mail';}" />
						</div>
						<div class="accord-body-elem accord-body-file">
							<input type="file" />
						</div>
						<div class="accord-body-elem accord-body-name">
							<textarea name="content" onblur="if(this.value=='') this.value='Ваше сообщение...';" onfocus="if(this.value=='Ваше сообщение...') this.value='';">Ваше сообщение...</textarea>
						</div>
						<div class="accord-body-elem accord-body-send">
							<div class="send-button">Отправить</div>
						</div>
					</div>
				</div>
			</div>
			<div id="filial-6" class="accord-filial-item">
				<div class="accord-header accord-header-grey">м.Станция6</div>
				<div class="accord-body">
					<div class="sub-body">
						<div class="accord-body-elem accord-body-price">
							<span>Стоимость Вашего заказа: </span> <span class="zakaz-price">1000</span> <span>руб.</span>
						</div>
						<div class="accord-body-elem accord-body-name">
							<input type="text" name="name" value=" Введите имя и телефон" onfocus="if (this.value == ' Введите имя и телефон') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите имя и телефон';}" />
						</div>
						<div class="accord-body-elem accord-body-email">
							<input type="text" name="email" value=" Введите e-mail" onfocus="if (this.value == ' Введите e-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Введите e-mail';}" />
						</div>
						<div class="accord-body-elem accord-body-file">
							<input type="file" />
						</div>
						<div class="accord-body-elem accord-body-name">
							<textarea name="content" onblur="if(this.value=='') this.value='Ваше сообщение...';" onfocus="if(this.value=='Ваше сообщение...') this.value='';">Ваше сообщение...</textarea>
						</div>
						<div class="accord-body-elem accord-body-send">
							<div class="send-button">Отправить</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
</div>			
			