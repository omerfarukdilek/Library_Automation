<?php
include("baglan.php");

if(isset($_POST['btnkaydet']))
{
$adi = $_POST['adi'];
$soyadi = $_POST['soyadi'];
$sifre = mysql_real_escape_string($_POST['sifre']);
$md5_parola = md5($sifre);

$eposta = $_POST['eposta'];
$adres = $_POST['adres'];
$aciklama = $_POST['aciklama'];

if($adi != ""){
$kategori_ekle_sorgu = mysql_query("INSERT INTO uyeler (adi,soyadi,sifre,eposta,adres,aciklama) value('$adi','$soyadi','$md5_parola','$eposta','$adres','$aciklama')");
header("Location: uye_ekle.php");
exit();
}else{
echo("Kullanıcı Adını Giriniz.");
}	

}

if(isset($_POST['btngeri']))
{
	header("Location: menu.php");
}


?>

<!DOCTYPE html>

<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1254">
<META HTTP-EQUIV="Content-language" CONTENT="tr">
	<title>Uye Ekle Paneli</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<style>

		#background
		{
			margin: 0px;
			padding: 0px;
			color: #666;
			font-family: Tahoma, Geneva, sans-serif;
			font-size: 14px;
			line-height: 1.5em; 
			
		}
	</style>
</head>

<body class="fixed-top" id="background">
 <form style="height:300px;" action="#" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">

 <h2> Üye Ekle </h2>
 <div style="width:400px;height:400px;margin-left:auto;margin-right:auto;">
 <table style="width:400px;">
	<tr>
		<td> Üye Adı</td>
		<td> :</td>
		<td>  <input name="adi" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Üye Soyadı</td>
		<td> :</td>
		<td> <input name="soyadi" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Şifre</td>
		<td> :</td>
		<td> <input name="sifre" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Eposta</td>
		<td> :</td>
		<td> <input name="eposta" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Adres</td>
		<td> :</td>
		<td> <input name="adres" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Açıklama</td>
		<td> :</td>
		<td> <input name="aciklama" type="text" value=""/></td>
	</tr>
	<tr>
		<td> </td>
		<td> </td>
		<td> <button type="submit" name="btnkaydet" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Kaydet</button></td>
	</tr>
 </table>

    </div>
 </form>
</body>
<!-- END BODY -->
</html>


























