<?php
include("baglan.php");

if(isset($_POST['btnkaydet']))
{
$yonetici_ad = $_POST['yonetici_ad'];
$yonetici_soyad = $_POST['yonetici_soyad'];
$yonetici_kullanici = $_POST['yonetici_kullanici'];
$parola=mysql_real_escape_string($_POST['yonetici_sifre']);
$md5_parola = md5($parola);


$yonetici_email = $_POST['yonetici_email'];



if($yonetici_ad != "" && $yonetici_soyad != "" &&$yonetici_kullanici != "" && $parola != "" && $yonetici_email != ""){
$kategori_ekle_sorgu = mysql_query("INSERT INTO yonetici (yonetici_ad,yonetici_soyad,yonetici_kullanici,yonetici_sifre,yonetici_email) 
									value('$yonetici_ad','$yonetici_soyad','$yonetici_kullanici','$md5_parola','$yonetici_email')");
header("Location: yonetici_ekle.php");
exit();
}else{
echo("Tüm Bilgileri Giriniz.");
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
	<title>Yonetici Ekle Paneli</title>
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
 <form action="#" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
<h2>Yonetici Ekle</h2>
 <div style="width:400px;height:800px;margin-left:auto;margin-right:auto;">
 <table style="width:400px;">
	<tr>
		<td> Yonetici Ad</td>
		<td> :</td>
		<td>  <input name="yonetici_ad" type="text" value=""/></td>
	</tr>
	<tr>
		<td> Yonetici Soyad</td>
		<td> :</td>
		<td>  <input name="yonetici_soyad" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yonetici Kullanıcı Adı</td>
		<td> :</td>
		<td> <input name="yonetici_kullanici" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yonetici Sifre</td>
		<td> :</td>
		<td> <input name="yonetici_sifre" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yonetici Eposta</td>
		<td> :</td>
		<td> <input name="yonetici_email" type="text" value=""/></td>
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


























