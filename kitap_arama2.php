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
	<title>Kitap Arama</title>
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

<h2>Kitap Ara</h2>
<table >
		<tr>
			<td>Kitap Adı</td>
			<td> :</td>
			<td><input name="kitap_adi" type="text" value=""/></td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btnkitapara" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Kitap Ara</button><br><br></td>
		</tr>
		
		<tr>
			<td>Yazar Adı</td>
			<td> :</td>
			<td><input name="yazar_adi" type="text" value=""/></td>
		</tr>
 
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btnyazarara" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Yazar Ara</button> 	<br><br></td>

		</tr>
	</table >
	
 <button type="submit" name="btntumkitaplistesi" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Tüm Kitap Listesi</button>	
 
 
<h3><ins><b>Kitap Listesi</b></ins></h3>

<table id="tabloliste" style="width:600px;">
	<tr>
		<td> <ins><b>  Kitap Adı</td></b></ins></td>
		<td> <ins><b>  Yazar Adı</td></b></ins></td>
		<td> <ins><b>  Yayın Yılı</td></b></ins></td>
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
		echo("<tr>");
		echo "<td>",$kayit["kitap_adi"],"</td>";
		echo "<td>",$kayit["yazaradi"],"</td>";
		echo "<td>",$kayit["yayinyili"],"</td>";
		echo "<td>",$kayit["yayinciadi"],"</td>";
		echo "<td>",$kayit["kitapadet"],"</td>";
		echo "</tr>";
	}
}
	?>
	
	<?php 
	if(isset($_POST['btnkitapara']))
{
$kitap_adi = $_POST['kitap_adi'];

if($kitap_adi != ""){
$bulunan_kitap_listesi = mysql_query("select kitap_adi,yazaradi,yayinyili,yayinciadi,stok.kitapadet from kitap,stok where kitap_adi='$kitap_adi' and kitap.id = stok.kitapid");
while($kayit=mysql_fetch_array($bulunan_kitap_listesi)){
		echo("<tr>");
		echo "<td>",$kayit["kitap_adi"],"</td>";
		echo "<td>",$kayit["yazaradi"],"</td>";
		echo "<td>",$kayit["yayinyili"],"</td>";
		echo "<td>",$kayit["yayinciadi"],"</td>";
		echo "<td>",$kayit["kitapadet"],"</td>";
		echo "</tr>";
	}
}else{
echo("Kitap Adını Giriniz.");
}	

}

	?>
	
	
	<?php 
	if(isset($_POST['btnyazarara']))
{
$yazar_adi = $_POST['yazar_adi'];

if($yazar_adi != ""){
$bulunan_kitap_listesi = mysql_query("select kitap_adi,yazaradi,yayinyili,yayinciadi,stok.kitapadet from kitap,stok where yazaradi='$yazar_adi' and kitap.id = stok.kitapid");
while($kayit=mysql_fetch_array($bulunan_kitap_listesi)){
		echo("<tr>");
		echo "<td>",$kayit["kitap_adi"],"</td>";
		echo "<td>",$kayit["yazaradi"],"</td>";
		echo "<td>",$kayit["yayinyili"],"</td>";
		echo "<td>",$kayit["yayinciadi"],"</td>";
		echo "<td>",$kayit["kitapadet"],"</td>";
		echo "</tr>";
	}
}else{
echo("Yazar Adını Giriniz.");
}	

}

	?>
 </table>
	
	
	
 </form>
</body>
<!-- END BODY -->
</html>








