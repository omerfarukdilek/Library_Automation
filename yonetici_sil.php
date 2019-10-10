<?php
include("baglan.php");

if(isset($_POST['btnuyesil']))
{
$yonetici_ad = $_POST['yonetici_ad'];
$yonetici_soyad = $_POST['yonetici_soyad'];


if($yonetici_ad != "" && $yonetici_soyad != ""){
$kategori_ekle_sorgu = mysql_query("delete from yonetici where yonetici_ad='$yonetici_ad' and yonetici_soyad='$yonetici_soyad'");
header("Location: yonetici_sil.php");
exit();
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
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1254">
	<META HTTP-EQUIV="Content-language" CONTENT="tr">
	<title>Yönetici Silme Paneli</title>
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
 
<h2>Yonetici Sil</h2>
	<table >
		<tr>
			<td>Yonetici Adı</td>
			<td> :</td>
			<td><input name="yonetici_ad" type="text" value=""/></td>
			
			
		</tr>
		
		<tr>
			<td>Yonetici Soyadı</td>
			<td> :</td>
			<td> <input name="yonetici_soyad" type="text" value=""/></td> 
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btnuyesil" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Yonetici Sil</button></td>	
		</tr>
	</table >
	
 <h3><ins><b>Yonetici Listesi</b></ins></h3>

<table style="width:900px;">
	<tr>
		<td> <ins><b> Yonetici Adı</b></ins></td>
		<td> <ins><b> Yonetici Soyadı</b></ins></td>
		<td> <ins><b> Yonetici KUllanıcı Adı</b></ins></td>
		<td> <ins><b> Yonetici Sifre</b></ins></td>
		<td> <ins><b> Yonetici E-Posta</b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	$yonetici_liste = mysql_query("select yonetici_ad,yonetici_soyad,yonetici_kullanici,yonetici_sifre,yonetici_email from yonetici");
	
	while($kayit=mysql_fetch_array($yonetici_liste)){
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








