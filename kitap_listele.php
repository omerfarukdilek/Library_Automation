<?php

if(isset($_POST['btngeri']))
{
	header("Location: menu.php");
}


?>
<!DOCTYPE html>

<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1254">
	<META HTTP-EQUIV="Content-language" CONTENT="tr">	
	<title>Kitap Listesi Paneli</title>
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
<h3><ins><b>Kitap Listesi</b></ins></h3>

<table style="width:600px;">
	<tr>
		<td> <ins><b> Kitap Adı</td></b></ins></td>
		<td> <ins><b> Yazar Adı</td></b></ins></td>
		<td> <ins><b> Yayın Yılı</td></b></ins></td>
		<td> <ins><b> Yayıncı Adı</td></b></ins></td>
		<td> <ins><b> Kitap Stok Adet</td></b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	$Kitap_liste = mysql_query("select kitap_adi,yazaradi,yayinyili,yayinciadi,stok.kitapadet from kitap,stok where stok.kitapid  = kitap.id");
	
	while($kayit=mysql_fetch_array($Kitap_liste)){
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








