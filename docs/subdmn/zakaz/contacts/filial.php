<?php
require_once "../../../extdata/baseparts/filialsData.php";
$filailName = '';
if (isset($_GET['filail_name'])) {
    $filialName =$_GET['key1'];
} else {
	redirect_to_main();
}
if (isset($filialDataListCP1251[$filailName])){
	if ($filialDataListCP1251[$filailName]['uslugi']==0){
		redirect_to_main();
	}
}
else{
	redirect_to_main();
}
$curFilial = $filialName;



function redirect_to_main(){
	header('Refresh: 10; URL=/');
	echo '�� ����� ������ ������. ��������������� �� �������';
	exit;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>������ �� ���������. ������ �����, ������ ��, ������ ���, ������ �����������, ������ �����������, ������������ �������  <?php echo $filialDataListCP1251[$curFilial]['predlog']?> <?php echo $filialDataListCP1251[$curFilial]['padej']?>. </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<meta name="keywords" content="������, ����������, ������������ ��� ������������ ����������� ���������. ������������ ������, ����������� ���������, �������������� �������� ��� �������  Trodat Colop. ����������� ������, ����������� �����������, ������������ �������.">
	<meta HTTP-EQUIV="Keywords" NAME="������, ����������, ������������ ��� ������������ ����������� ���������. ������������ ������, ����������� ���������, �������������� �������� ��� �������  Trodat Colop. ����������� ������, ����������� �����������, ������������ �������.">
	<meta name="Description" content="������, ����������, ������������ ��� ������������ ����������� ���������. ������������ ������, ����������� ���������, �������������� �������� ��� �������  Trodat Colop. ����������� ������, ����������� �����������, ������������ �������.">
	<meta HTTP-EQUIV="description" content="������, ����������, ������������ ��� ������������ ����������� ���������. ������������ ������, ����������� ���������, �������������� �������� ��� �������  Trodat Colop. ����������� ������, ����������� �����������, ������������ �������.">
	<script>
	var $curFilialJS = "<?php echo $curFilial?>";
	</script>
	
	<?php require_once "../../../extdata/baseparts/header.php" ?>
		  
	<!-- ����� ������������� ����� -->
	
</head>

<?php require_once "../../../extdata/baseparts/tmplContacts2SubDomainZakaz.php"?>
</html>