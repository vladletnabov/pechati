<?php
require_once "../../../extdata/baseparts/filialsData.php";
$filialName = '';
if (isset($_GET['filial_name'])) {
    $filialName =$_GET['filial_name'];
	$filialName = iconv('utf-8', 'windows-1251', $filialName);
	$filialName = str_replace('"', '', $filialName);
} else {
	redirect_to_main('not_setted');
}
if (isset($filialDataListCP1251[$filialName])){
	if ($filialDataListCP1251[$filialName]['uslugi']==0){
		redirect_to_main('_absent_uslugi_');
	}
}
else{
	redirect_to_main('_absent_filial_' . $filialName . '_');
}
$curFilial = $filialName;



function redirect_to_main($error){
	header('Refresh: 10; URL=/');
	echo 'Не верно указан филиал. Перенаправление на главную';
	echo 'filialName: ' . $error ;
	exit;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Печати на Каширская. Печать новая, печать ИП, печать ООО, печать предприятия, печать организации, изготовление штампов  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>. </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<meta name="keywords" content="Печати, Полиграфия, оборудование для производства штемпельной продукции. Канцелярские товары, штемпельная продукция, автоматическая оснастка для печатей  Trodat Colop. Юридические услуги, регистрация предприятий, изготовление печатей.">
	<meta HTTP-EQUIV="Keywords" NAME="Печати, Полиграфия, оборудование для производства штемпельной продукции. Канцелярские товары, штемпельная продукция, автоматическая оснастка для печатей  Trodat Colop. Юридические услуги, регистрация предприятий, изготовление печатей.">
	<meta name="Description" content="Печати, Полиграфия, оборудование для производства штемпельной продукции. Канцелярские товары, штемпельная продукция, автоматическая оснастка для печатей  Trodat Colop. Юридические услуги, регистрация предприятий, изготовление печатей.">
	<meta HTTP-EQUIV="description" content="Печати, Полиграфия, оборудование для производства штемпельной продукции. Канцелярские товары, штемпельная продукция, автоматическая оснастка для печатей  Trodat Colop. Юридические услуги, регистрация предприятий, изготовление печатей.">
	<script>
	var $curFilialJS = "<?php echo $curFilial?>";
	</script>
	
	<?php require_once "../../../extdata/baseparts/header.php" ?>
		  
	<!-- КОнец обязательного блока -->
	
</head>

<?php require_once "../../../extdata/baseparts/tmplContacts2SubDomainZakaz.php"?>
</html>