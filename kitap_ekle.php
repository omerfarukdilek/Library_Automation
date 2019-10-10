<?php
include("baglan.php");

if(isset($_POST['btnkaydet']))
{
$kitapadi = $_POST['kitapadi'];
$yazaradi = $_POST['yazaradi'];
$yayinyili = $_POST['yayinyili'];
$yayinciadi = $_POST['yayinciadi'];
$stokadet = $_POST['stokadet'];

if($kitapadi != "" && $stokadet != ""){
$kategori_ekle_sorgu = mysql_query("insert into kitap(kitap_adi,yazaradi,yayinyili,yayinciadi) value('$kitapadi','$yazaradi','$yayinyili','$yayinciadi')");
$id = mysql_insert_id();
$stokadet = $_POST['stokadet'];
$kategori_ekle_sorgu = mysql_query("insert into stok(kitapadet,kitapid) value('$stokadet','$id')");

header("Location: kitap_ekle.php");
exit();
}else{
echo("Kullanıcı Adını Giriniz.");
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
	<title>KITAP EKLE PANELİ</title>
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
 
 <h2> Kitap Ekle </h2>
 <div style="width:400px;height:400px;margin-left:auto;margin-right:auto;">
 <table style="width:400px;">
	<tr>
		<td> Kitap Adı</td>
		<td> :</td>
		<td>  <input name="kitapadi" type="text" value=""/></td>
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
		<td> Kitap Stok Adet</td>
		<td> :</td>
		<td> <input name="stokadet" type="text" value=""/></td>
	</tr>
	
	
	<tr>
		<td> </td>
		<td> </td>
		<td> <button type="submit" name="btnkaydet" onclick="submit()"><i class="icon-ok"></i> Kaydet</button></td>
	</tr>
 </table>

    </div>
 </form>
</body>
<!-- END BODY -->
</html>


























