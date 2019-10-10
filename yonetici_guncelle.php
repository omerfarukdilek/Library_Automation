<?php
include("baglan.php");

if(isset($_POST['btnguncelle']))
{
	$eskiyoneticiadi = $_POST['eskiyoneticiadi'];
	$eskiyoneticisoyadi = $_POST['eskiyoneticisoyadi'];
	
$yonetici_ad = $_POST['yonetici_ad'];
$yonetici_soyad = $_POST['yonetici_soyad'];
$yonetici_kullanici = $_POST['yonetici_kullanici'];
$yonetici_sifre = $_POST['yonetici_sifre'];
$yonetici_email = $_POST['yonetici_email'];

if($yonetici_ad != "" && $yonetici_soyad != ""){
$yonetici_guncelle = mysql_query("update yonetici set yonetici_ad='$yonetici_ad', yonetici_soyad='$yonetici_soyad', yonetici_kullanici='$yonetici_kullanici', 
							   yonetici_sifre='$yonetici_sifre', yonetici_email='$yonetici_email' where yonetici_ad='$eskiyoneticiadi' and yonetici_soyad='$eskiyoneticisoyadi'");

if($yonetici_guncelle){
	header("Location: yonetici_guncelle.php");
exit();
}else{
	echo("Kayıtlı Yonetici Bulunamadı.");
}


}else{
echo("Yonetici Adını ve Soyadını Giriniz.");
}	

}

if(isset($_POST['btngeri']))
{
	header("Location: menu.php");
}


?>

<!DOCTYPE html>

<head>
	
	<title>Yonetici Güncelle Paneli</title>
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
<h2>Yonetici Güncelle</h2>
 <div style="width:400px;height:300px;margin-left:auto;margin-right:auto;">
 
   <h3><ins><b> Kayıtlı Yonetici</b></ins></h3>
 <table style="width:400px;">
	<tr>
		<td> Yonetici Adı</td>
		<td> :</td>
		<td>  <input name="eskiyoneticiadi" type="text" value=""/></td>
	</tr>
	<tr>
		<td> Yonetici Soyadı</td>
		<td> :</td>
		<td>  <input name="eskiyoneticisoyadi" type="text" value=""/></td>
	</tr>
	
 </table>
 
<h3><ins><b> Güncel Yonetici Bilgiler</b></ins></h3>
 <table style="width:400px;">
	<tr>
		<td> Yonetici Adı</td>
		<td> :</td>
		<td>  <input name="yonetici_ad" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yonetici Soyadı</td>
		<td> :</td>
		<td> <input name="yonetici_soyad" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yonetici Kullanıcı</td>
		<td> :</td>
		<td> <input name="yonetici_kullanici" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yonetici Sifre</td>
		<td> :</td>
		<td> <input name="yonetici_sifre" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yonetici E-Posta</td>
		<td> :</td>
		<td> <input name="yonetici_email" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> </td>
		<td> </td>
		<td> <button type="submit" name="btnguncelle" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Güncelle</button></td>
	</tr>
 </table>

    </div>
	
	<h3><ins><b>Yonetici Listesi</b></ins></h3>

<table style="width:900px;">
	<tr>
		<td> <ins><b> Yonetici Adı</b></ins></td>
		<td> <ins><b> Yonetici Soyadı</b></ins></td>
		<td> <ins><b>Yonetici Kullanıcı</b></ins></td>
		<td> <ins><b>Yonetici Sifre</b></ins></td>
		<td> <ins><b> Yonetici E-Posta</b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	$uye_liste = mysql_query("select yonetici_ad,yonetici_soyad,yonetici_kullanici,yonetici_sifre,yonetici_email from yonetici");
	
	while($kayit=mysql_fetch_array($uye_liste)){
		echo("<tr>");
		echo "<td>",$kayit["yonetici_ad"],"</td>";
		echo "<td>",$kayit["yonetici_soyad"],"</td>";
		echo "<td>",$kayit["yonetici_kullanici"],"</td>";
		echo "<td>",$kayit["yonetici_sifre"],"</td>";
		echo "<td>",$kayit["yonetici_email"],"</td>";
		echo "</tr>";
	}
	?>
	
 </table>
 </form>
</body>
<!-- END BODY -->
</html>


























