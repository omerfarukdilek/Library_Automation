<?php
include("baglan.php");

if(isset($_POST['btngeri']))
{
	header("Location: menu.php");
}



?>
<!DOCTYPE html>

<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1254">
	<META HTTP-EQUIV="Content-language" CONTENT="tr">
	<title>Oduncte Olan Kitap Listesi Paneli</title>
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
  
<h2><ins><b>Oduncte Olan Kitap Listesi</b></ins></h2>

<table style="width:600px;">
	<tr>
		<td> <ins><b> Uye Ad�</b></ins></td>
		<td> <ins><b> Uye Soyadi</b></ins></td>
		<td> <ins><b>Kitap Ad�</b></ins></td>
		<td> <ins><b> Emanet Tarihi</b></ins></td>
		<td> <ins><b> Teslim Tarihi</b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	$Kitap_liste = mysql_query("SELECT  u.adi,u.soyadi,k.kitap_adi,e.emanettarihi,e.teslimtarihi From uyeler AS u , kitap AS k , emanet AS e where u.uyeid = e.uyeid 
					and k.id = e.kitapid");
	
	while($kayit=mysql_fetch_array($Kitap_liste)){
		echo("<tr>");
		echo "<td>",$kayit["adi"],"</td>";
		echo "<td>",$kayit["soyadi"],"</td>";
		echo "<td>",$kayit["kitap_adi"],"</td>";
		echo "<td>",$kayit["emanettarihi"],"</td>";
		echo "<td>",$kayit["teslimtarihi"],"</td>";
		echo "</tr>";
	}
	?>
	
 </table>
	
 </form>
</body>
<!-- END BODY -->
</html>








