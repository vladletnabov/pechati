<div style="display:table; width:245px; height: 300px;  padding-left: 15px;padding-bottom:10px;  margin-left: 50px; box-shadow: 0 0 5px 2px #7f7f7f; background-color: #fff;  position:relative; z-index:111;">
	<div style="background:url(/extdata/images/header-quick-zakaz.png) no-repeat; height:150px; margin:0; padding-top:10px;"><h1 style="text-align:center;color: #fff; margin-top:10px;">Быстрый заказ</h1></div>

	<div class="input-prepend" style="margin-left:0px; ">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="input-large focused" name="name" type="text" placeholder="Имя и телефон" style="width:200px;">
                    </div>
	<div class="input-prepend" style="margin-left:0px; ">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="input-large focused" name="e-mail" type="text" placeholder="Ваш E-mail" style="width:200px;">
                    </div>
					
	
 <!--<script src="/extdata/js/jquery-1.11.3.min.js"></script>-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="/feedback/js/feedback.js"></script>
    <script src="/feedback/js/jquery.arcticmodal.js"></script>
    <script src="/feedback/js/jquery.jgrowl.js"></script>
	
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/feedback/css/jquery.arcticmodal.css">
    <link rel="stylesheet" type="text/css" href="/feedback/css/jquery.jgrowl.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
	
	<script src="/extdata/js/fileinput.js"></script>
	
	<script>
		$(document).ready(function() {
			fileInputFormQuick();
		});
	</script>
	
	<style>

	</style>
	
	
	<div class="input-prepend" style="margin-left:0px; height:30px;">
                        <input type="file" name="file1"" >
	</div>
										<!--</div>-->
	<!--<input type="file" name="pict"  placeholder="Прикрепите файл" style="font-size: 10px; width:190px;; margin-top:3px;">-->
	<textarea type="text" name="text"  placeholder="Пожелания по заказу" class="input-large focused"  style="margin-left:0px; width:228px; max-width:230px;"></textarea>
	<input type="button" onclick="checkRequired()" value="Заказать" style="width:229; height: 35px; margin-top:3px; background-color:#3c17a2; border: 1px solid #8c4bc1; border-radius: 4px 4px 4px 4px; color: #fff; margin-top: 10px;">
</div>