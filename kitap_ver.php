<?php
include("baglan.php");
session_start();
if(isset($_POST['btnkitapara']))
{
$kitap_adi = $_POST['kitap_adi'];

if($kitap_adi != ""){
	
	
	$yonetici_id_sabit = $_SESSION['uyeid'];
	
	$secilen_kitap = mysql_query("select id from kitap where kitap_adi = '$kitap_adi'");
		while($bul=mysql_fetch_array($secilen_kitap ))
		{
			$secilen_kitap_id = $bul["id"];
		}
	
$bulunan_kitap_listesi = mysql_query("delete from emanet where uyeid = '$yonetici_id_sabit' and kitapid = '$secilen_kitap_id'");

$secilen_kitap_adet = mysql_query("update stok set kitapadet = kitapadet+1 where kitapid = '$secilen_kitap_id' ");

}else{
echo("Kitap Adını Giriniz.");
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
	<title>Kitap Ver</title>
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

<h2>Kitap Ver</h2>
<table >
		<tr>
			<td>Kitap Adı</td>
			<td> :</td>
			<td><input name="kitap_adi" type="text" value=""/></td>
		</tr>
 
		<tr>
			<td></td>
			<td> </td>
			
			<td><button type="submit" name="btnkitapara" onclick="submit()" class="btn btn-primary"><i class="icon-ok"></i> Kitap Ver</button><br><br></td>
		</tr>
	</table >
	
	
 </form>
</body>
<!-- END BODY -->
</html>








