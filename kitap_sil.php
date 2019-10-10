<?php
include("baglan.php");

if(isset($_POST['btnkitapsil']))
{
$kitapadi = $_POST['kitapadi'];


if($kitapadi != ""){
	
	$secilen_kitap = mysql_query("select id from kitap where kitap_adi = '$kitapadi'");
		while($bul=mysql_fetch_array($secilen_kitap ))
		{
			$secilen_kitap_id = $bul["id"];
		}
	$kategori_ekle_sorgu2 = mysql_query("delete from stok where kitapid='$secilen_kitap_id'");
	
$kategori_ekle_sorgu = mysql_query("delete from kitap where kitap_adi='$kitapadi'");
header("Location: kitap_sil.php");
exit();
}else{
echo("Kitap Adını Giriniz.");
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
	<title>Kitap Sil Paneli</title>
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
<h2>Kitap Sil</h2>
	<table >
		<tr>
			<td>Kitap Adı</td>
			<td> :</td>
			<td><input name="kitapadi" type="text" value=""/></td>
		</tr>
		
		<tr>
			<td></td>
			<td> </td>
			<td><button type="submit" name="btnkitapsil" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i>Kitabı Sil</button><td> 	
		</tr>
	</table >
 
<h4><ins><b>Kitap Listesi</p></b></ins></h4>

<table style="width:600px;">
	<tr>
		<td> <ins><b> Kitap Adı</b></ins></td>
		<td> <ins><b> Yazar Adi</b></ins></td>
		<td> <ins><b>Yayın Yılı</b></ins></td>
		<td> <ins><b> Yayıncı Adı</b></ins></td>
		<td> <ins><b> Stok Adet</b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	$kitap_liste = mysql_query("select kitap_adi,yazaradi,yayinyili,yayinciadi,stok.kitapadet from kitap,stok where kitap.id = stok.kitapid");
	
	while($kayit=mysql_fetch_array($kitap_liste)){
		echo("<tr>");
		echo "<td>",$kayit["kitap_adi"],"</td>";
		echo "<td>",$kayit["yazaradi"],"</td>";
		echo "<td>",$kayit["yayinyili"],"</td>";
		echo "<td>",$kayit["yayinciadi"],"</td>";
		echo "<td>",$kayit["kitapadet"],"</td>";
		echo "</tr>";
	}
	?>
	
 </table>
	
	
	
 </form>
</body>
<!-- END BODY -->
</html>








