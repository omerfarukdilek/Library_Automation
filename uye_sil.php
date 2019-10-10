<?php
include("baglan.php");

if(isset($_POST['btnuyesil']))
{
$uyeadi = $_POST['uyeadi'];
$uyesoyadi = $_POST['uyesoyadi'];


if($uyeadi != "" && $uyesoyadi != ""){
$kategori_ekle_sorgu = mysql_query("delete from uyeler where adi='$uyeadi' and soyadi='$uyesoyadi'");
header("Location: uye_sil.php");
exit();
}else{
echo("Üye Adını ve Soyadını Giriniz.");
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
	<title>Uye Sil Paneli</title>
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
<h2>Üye Sil</h2>

	<table >
		<tr>
			<td>Uye Adı</td>
			<td> :</td>
			<td><input name="uyeadi" type="text" value=""/></td>
		</tr>
		
		<tr>
			<td>Uye Soyadı</td>
			<td> :</td>	
			<td><input name="uyesoyadi" type="text" value=""/></td>
		</tr>
		
		<tr>
			<td></td>
			<td> </td>
			<td><button type="submit" name="btnuyesil" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i>Üye Sil</button></td>	
		</tr>
	</table >
	
	
 <h3><ins><b>Üye Listesi</b></ins></h3>

<table style="width:600px;">
	<tr>
		<td> <ins><b>Üye Adı</b></ins></td>
		<td> <ins><b>Üye Soyadı</b></ins></td>
		<td> <ins><b> Eposta</b></ins></td>
		<td> <ins><b> Adres</b></ins></td>
		<td> <ins><b> Açıklama</b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	$uye_liste = mysql_query("select adi,soyadi,eposta,adres,aciklama from uyeler");
	
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








