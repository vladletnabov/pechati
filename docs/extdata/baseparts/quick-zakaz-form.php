    <!--<script src="feedback/js/feedback.js"></script>
    <script src="feedback/js/jquery.arcticmodal.js"></script>
    <script src="feedback/js/jquery.jgrowl.js"></script>
	<script type="text/javascript"></script>-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.arcticmodal.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.jgrowl.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">


<div style="display:table; width:245px; height: 290px;  padding-left: 15px;padding-bottom:10px;  margin-left: 50px; box-shadow: 0 0 5px 2px #7f7f7f; background-color: #fff;  position:absolute; left: 750px; top:-10px; z-index:98;">
	<div style="background:url(/extdata/images/header-quick-zakaz.png) no-repeat; height:150px; margin:0; padding-top:10px;text-align:center;"><span id="quick-zakaz-text" style="font-size:3em; font-weight:bold; text-align:center;color: #fff; margin-top:10px;">Быстрый заказ</span></div>
	<form action="" method="get" name="<?php 
		$quickZakaz="quick-zakaz-begovaya";
		if (isset($filialDataListCP1251[$curFilial]['quickZakaz'])
			&&(strcasecmp($filialDataListCP1251[$curFilial]['quickZakaz'],'')!=0)) {
			$quickZakaz = $filialDataListCP1251[$curFilial]['quickZakaz'];
		}
		echo $quickZakaz;
	
	?>" style="margin-bottom:0;" >
		<div class="input-prepend" style="margin-left:0px; ">
							<span class="add-on"><i class="icon-user"></i></span>
							<input class="input-large focused" name="name" type="text" placeholder="Имя и телефон" style="width:200px;">
						</div>
		<div class="input-prepend" style="margin-left:0px; ">
							<span class="add-on"><i class="icon-envelope"></i></span>
							<input class="input-large focused" name="e-mail" type="text" placeholder="Ваш E-mail" style="width:200px;">
						</div>
		
		
		<textarea type="text" name="text"  placeholder="Пожелания по заказу" class="input-large focused"  style="margin-left:0px; width:227px; max-width:230px;"></textarea>
		 <input class="feedback btn btn-block btn-large btn-success" name="send" type="button" value="Заказать"  style="margin-left:0px; width:227px; max-width:227px; margin-top:10px; margin-bottom: 10px;" >
	</form>
</div>