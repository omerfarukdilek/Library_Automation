<?php
include("baglan.php");

if(isset($_POST['btnguncelle']))
{
	$eskikitapadi = $_POST['eskikitapadi'];
	
$kitap_adi = $_POST['kitap_adi'];
$yazaradi = $_POST['yazaradi'];
$yayinyili = $_POST['yayinyili'];
$yayinciadi = $_POST['yayinciadi'];
$stokadet = $_POST['stokadet'];

if($kitap_adi != "" && $stokadet != ""){
$kitap_guncelle = mysql_query("update kitap set kitap_adi='$kitap_adi', yazaradi='$yazaradi', yayinyili='$yayinyili', yayinciadi='$yayinciadi' where kitap_adi='$eskikitapadi'");

$secilen_kitap = mysql_query("select id from kitap where kitap_adi = '$kitap_adi'");
		while($bul=mysql_fetch_array($secilen_kitap ))
		{
			$secilen_kitap_id = $bul["id"];
		}
		$stok_guncelle = mysql_query("update stok set kitapadet='$stokadet' where kitapid='$secilen_kitap_id'");
		

if($kitap_guncelle){
	header("Location: kitap_guncelle.php");
exit();
}else{
	echo("Kayıtlı Kullanıcı Bulunamadı.");
}


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
	
	<title>Kitap Güncelle Paneli</title>
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
 <h2>Kitap Guncelle</h2>
 <div style="width:400px;height:280px;margin-left:auto;margin-right:auto;">
 
  <h3><ins><b> Kayıtlı Kitap</b></ins></h3>
 <table style="width:400px;">
	<tr>
		<td> Kitap Adı </td>
		<td> :</td>
		<td>  <input name="eskikitapadi" type="text" value=""/></td>
	</tr>
	
 </table>
 <h3><ins><b> Güncel Kitap Bilgiler</b></ins></h3>
 <table style="width:400px;">
	<tr>
		<td> Kitap Adı</td>
		<td> :</td>
		<td>  <input name="kitap_adi" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yazar Adı</td>
		<td> :</td>
		<td> <input name="yazaradi" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yayın Yılı</td>
		<td> :</td>
		<td> <input name="yayinyili" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> Yayıncı Adı</td>
		<td> :</td>
		<td> <input name="yayinciadi" type="text" value=""/></td>
	</tr>
	<tr>
		<td> Stok Adet</td>
		<td> :</td>
		<td> <input name="stokadet" type="text" value=""/></td>
	</tr>
	
	<tr>
		<td> </td>
		<td> </td>
		<td> <button type="submit" name="btnguncelle" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i>Kitap Güncelle</button></td>
	</tr>
 </table>

    </div>
	
	<h3><ins><b>Kitap Listesi</b></ins></h3>

<table style="width:600px;">
	<tr>
		<td> <ins><b> Kitap Adı</b></ins></td>
		<td> <ins><b> Yazar Adı</b></ins></td>
		<td> <ins><b> Yayın Yılı</b></ins></td>
		<td> <ins><b>Yayıncı Adı</b></ins></td>
		<td> <ins><b> Stok Adet</b></ins></td>
		
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	$uye_liste = mysql_query("select kitap_adi,yazaradi,yayinyili,yayinciadi,stok.kitapadet from kitap,stok where kitap.id = stok.kitapid");
	
	while($kayit=mysql_fetch_array($uye_liste)){
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


























