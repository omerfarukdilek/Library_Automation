<?php
include("baglan.php");




if(isset($_POST['btngeri']))
{
	header("Location: menu2.php");
}


?>

<!DOCTYPE html>

<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1254">
	<META HTTP-EQUIV="Content-language" CONTENT="tr">
	<title>Kitap Al</title>
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
  
<h2>Kitap Al</h2>
 <table >
	<tr>
		<td> Kitap Adı </td>
		<td> :</td>
		<td><input name="kitap_adi" type="text" value=""/></td>
		
	</tr>
	
	<tr>
		<td> Teslim Tarihi </td>
		<td> :</td>
		<td><input name="kitap_teslim_tarihi" type="text" value=""/></td>
		
	</tr>

	<tr>
		<td> </td>
		<td> </td>
		<td><button type="submit" name="btnkitapal" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Kitap Al</button><br><br></td>
	</tr>	

	
		
		

 
 
 
  </table>
  <td><button type="submit" name="btntumkitaplistesi" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Tüm Kitap Listesi</button></td>
<h3><ins><b>Kitap Listesi</b></ins></h3>

<table id="tabloliste" style="width:600px;">
	<tr>
	<td> <ins><b>Kitap Adı</td></b></ins></td>
	<td> <ins><b> Yazar Adı</td></b></ins></td>
	<td> <ins><b> Yayın Yılı</td></b></ins></td>
	<td> <ins><b> Yayıncı Adı</td></b></ins></td>
	<td> <ins><b> Stok Adet</b></ins></td>
	</tr>

	<?php 
	if(isset($_POST['btntumkitaplistesi']))
{
	include("baglan.php");
	mysql_query("set names utf8");
	$kitap_liste = mysql_query("select kitap_adi,yazaradi,yayinyili,yayinciadi,stok.kitapadet from kitap,stok where kitap.id = stok.kitapid");
	
	while($kayit=mysql_fetch_array($kitap_liste)){
		if($kayit["kitapadet"] > 0){
		echo("<tr>");
		echo "<td>",$kayit["kitap_adi"],"</td>";
		echo "<td>",$kayit["yazaradi"],"</td>";
		echo "<td>",$kayit["yayinyili"],"</td>";
		echo "<td>",$kayit["yayinciadi"],"</td>";
		echo "<td>",$kayit["kitapadet"],"</td>";
		echo "</tr>";
		}
	}
}
	?>
	
	<?php 
	session_start();
	if(isset($_POST['btnkitapal']))
{
	date_default_timezone_set('Europe/Istanbul');
$yonetici_id_sabit = $_SESSION['uyeid'];
$bugun = date('Y-m-d');

$kitap_adi = $_POST['kitap_adi'];
$kitap_teslim_tarihi = $_POST['kitap_teslim_tarihi'];

$secilen_kitap = mysql_query("select id from kitap where kitap_adi = '$kitap_adi'");
		while($bul=mysql_fetch_array($secilen_kitap ))
		{
			$secilen_kitap_id = $bul["id"];
		}
		

if($kitap_adi != "" && $kitap_teslim_tarihi != "")
{
$bulunan_kitap_listesi = mysql_query("insert into emanet(uyeid,kitapid,emanettarihi,teslimtarihi) value ('$yonetici_id_sabit', '$secilen_kitap_id', '$bugun'
																										, '$kitap_teslim_tarihi')");

$secilen_kitap_adet = mysql_query("update stok set kitapadet = kitapadet-1 where kitapid = '$secilen_kitap_id' ");																						
																										
}
else
{
echo("Kitap Adını ve Teslim Tarihini Giriniz.");
}	

}

	?>
	
	
	
 </table>
	
	
	
 </form>
</body>
<!-- END BODY -->
</html>








