<?php
include("baglan.php");

if(isset($_POST['btnguncelle']))
{
	$eskiAd = $_POST['eskiAd'];
	$eskiSoyad = $_POST['eskiSoyad'];
	
$adi = $_POST['adi'];
$soyadi = $_POST['soyadi'];
$sifre = $_POST['sifre'];
$eposta = $_POST['eposta'];
$adres = $_POST['adres'];
$aciklama = $_POST['aciklama'];

if($adi != "" && $soyadi != ""){
$ogrenci_bilgileri_guncelle = mysql_query("update uyeler set adi='$adi', soyadi='$soyadi', sifre='$sifre', eposta='$eposta', adres='$adres', aciklama='$aciklama' where adi='$eskiAd' and soyadi='$eskiSoyad'");

if($ogrenci_bilgileri_guncelle){
	header("Location: ogrenci_bilgileri_guncelle.php");
exit();
}else{
	echo("Kayıtlı Kullanıcı Bulunamadı.");
}


}else{
echo("Kullanıcı Adını ve Soyadını Giriniz.");
}	

}

if(isset($_POST['btngeri']))
{
	header("Location: menu2.php");
}


?>

<!DOCTYPE html>

<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1254">
	<META HTTP-EQUIV="Content-language" CONTENT="tr">
	<title>Ogrenci Bilgi Güncelleme Paneli</title>
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
  <h2> 	Öğrenci Bilgi Güncelle </h2>
 <div style="width:400px;height:330px;margin-left:auto;margin-right:auto;">
 
  <h3><ins><b> Kayıtlı Kullanıcı</b></ins></h3>
 <table style="width:400px;">
	<tr>
		<td> Ogrenci Adı</td>
		<td> :</td>
		<td>  <input name="eskiAd" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Ogrenci Soyadı</td>
		<td> :</td>
		<td> <input name="eskiSoyad" type="text" value=""/></td>
	</tr>
 </table>
 <h3><ins><b> Güncel Bilgiler</b></ins></h3>
 <table style="width:400px;">
	<tr>
		<td> Ogrenci Adı</td>
		<td> :</td>
		<td>  <input name="adi" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Ogrenci Soyadı</td>
		<td> :</td>
		<td> <input name="soyadi" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Ogrenci Şifre</td>
		<td> :</td>
		<td> <input name="sifre" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td>Ogrenci Eposta</td>
		<td> :</td>
		<td> <input name="eposta" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td>Ogrenci Adres</td>
		<td> :</td>
		<td> <input name="adres" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td>Ogrenci Açıklama</td>
		<td> :</td>
		<td> <input name="aciklama" type="text" value=""/></td>
	</tr>
	<tr>
		<td> </td>
		<td> </td>
		<td> <button type="submit" name="btnguncelle" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i>Bilgileri Güncelle</button></td>
	</tr>
 </table>

    </div>
	
	<h3><ins><b>Ogrenci Bilgisi</b></ins></h3>

<table style="width:600px;">
	<tr>
		<td> <ins><b> Ogrenci Adı</td></b></ins></td>
		<td> <ins><b> Ogrenci Soyadı</td></b></ins></td>
		<td> <ins><b>Ogrenci Eposta</td></b></ins></td>
		<td> <ins><b> Ogrenci Adres</td></b></ins></td>
		<td> <ins><b> Ogrenci Açıklama</td></b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	
	session_start();
	mysql_query("set names utf8");
	$yonetici_id_sabit = $_SESSION['uyeid'];
	$uye_liste = mysql_query("select adi,soyadi,eposta,adres,aciklama from uyeler where uyeid = '$yonetici_id_sabit'");
	
	while($kayit=mysql_fetch_array($uye_liste)){
		echo("<tr>");
		echo "<td>",$kayit["adi"],"</td>";
		echo "<td>",$kayit["soyadi"],"</td>";
		echo "<td>",$kayit["eposta"],"</td>";
		echo "<td>",$kayit["adres"],"</td>";
		echo "<td>",$kayit["aciklama"],"</td>";
		echo "</tr>";
	}
	?>
	
 </table>
 </form>
</body>
<!-- END BODY -->
</html>


























