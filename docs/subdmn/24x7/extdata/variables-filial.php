<?php
//setlocale(LC_ALL, 'ru_RU.CP1251');

$parametrs = array (
	"filials" => array(
		"19" =>  array(
			"id"  =>  19,
			"name"  =>  "Колет",
			"nameof"  =>  "aaaa",
			"email" =>  "b",
			"phone" =>  array(
				"main" => "(495) 111-11-11",
				"phones" =>  array(
					"1" =>  "(495) 222-22-22",
					"2" =>  "(499) 333-33-33"
				)
			),
			"city"  =>  "Москва",
			"metro" =>  "Беговая",
			"street"  =>  "Хорошёвское шоссе",
			"building"  =>  "13А, к.1",
			"preftovar" => "pechat1",
			"tovary"  =>  array(
				"pechat1"  =>  array (
					"nametovar"  =>  "С автоматической оснасткой COLOP R40",
					"material"  =>  "резина",
					"osnastka" => "автоматическая",
					"maker" => "Colop",
					"country" => "Германия",
					"podushka" => "встроенная",
					"pechat_price"  =>  1200,
					"pechat_price_srochno"  =>  1500,
					"pechat_time_obycho"  =>  0,
					"pechat_time_srochno"  =>  200,
					"pechat_pic_svoy"  =>  0,
					"pechat_pic_otrisovka"  =>  700,
					"pechat_pic_new"  =>  300,
					"pechat_dostavka_sam"  =>  0,
					"pechat_dostavka_kur"  =>  300,
					"pref_pic"  =>  "red",
					"stamp_pic" =>  "/zakaz/img/osnast/pechat-mono.jpg",
					"pic"  => array(
						"red" =>  array(
						  "name" => "Красный",
						  "src" => "/zakaz/img/osnast/colop/colop-r-r.jpg"
						),
						"blue" =>  array(
						  "name" => "Синий",
						  "src" => "/zakaz/img/osnast/colop/colop-r-w.jpg"
						),
						"black" =>  array(
						  "name" => "Чёрный",
						  "src" => "/zakaz/img/osnast/colop/colop-r-b.jpg"
						)
					)
				),
				"pechat2"  =>  array (
					"pref_pic"  =>  "black",
					"nametovar"  =>  "С автоматической оснасткой RGM",
					"material"  =>  "резина",
					"osnastka" => "автоматическая",
					"maker" => "RGM",
					"country" => "Тайвань",
					"podushka" => "встроенная",
					"pechat_price"  =>  1100,
					"pechat_price_srochno"  =>  1400,
					"pechat_time_obycho"  =>  0,
					"pechat_time_srochno"  =>  200,
					"pechat_pic_svoy"  =>  0,
					"pechat_pic_otrisovka"  =>  700,
					"pechat_pic_new"  =>  300,
					"pechat_dostavka_sam"  =>  0,
					"pechat_dostavka_kur"  =>  300,
					"pref_pic"  =>  "blue",
					"stamp_pic" =>  "/zakaz/img/osnast/pechat-mono.jpg",
					"pic"  => array(
						"red" =>  array(
						  "name" => "Красный",
						  "src" => "/zakaz/img/osnast/colop/colop-r-r.jpg"
						),
						"blue" =>  array(
						  "name" => "Синий",
						  "src" => "/zakaz/img/osnast/colop/colop-r-w.jpg"
						),
						"black" =>  array(
						  "name" => "Чёрный",
						  "src" => "/zakaz/img/osnast/colop/colop-r-b.jpg"
						)
					),
					
				)
			)
		)	
    )
);

/*iconv_array($parametrs, "UTF-8","WINDOWS-1251");

 //iconv("WINDOWS-1251", "UTF-8",  $parametrs);
$result = json_encode($parametrs);
echo $result;


 function  iconv_array($arr, $in, $out){
	 
	echo count($arr); 
	 echo $in . " --- " . $out ."<hr />";
	foreach ($arr as $k=>$v){
		if (is_array($arr[$k])) {
			echo "is array. ".$k."<br />";
			iconv_array($arr[$k], $in, $out);
		}
		else {
			echo "$in,"." $out,"." $arr[$k]";
			$arr[$k] = iconv($in, $out, $arr[$k]);
			echo " ----> ".$arr[$k]."<br />";
		}	
	}
	return $arr;
}*/

?>