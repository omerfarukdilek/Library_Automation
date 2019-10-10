<?php
include("baglan.php");

if(isset($_POST['btngeri']))
{
	header("Location: menu.php");
}


function fark_bul($tarih1,$tarih2,$ayrac)
{
//mktime( int saat, int dakika, int saniye, int ay, int gun, int yil);
list($y1,$a1,$g1) = explode($ayrac,$tarih1);
list($y2,$a2,$g2) = explode($ayrac,$tarih2);
$t1_timestamp = mktime('0','0','0',$a1,$g1,$y1);
$t2_timestamp = mktime('0','0','0',$a2,$g2,$y2);
if ($t1_timestamp > $t2_timestamp)
{
$result = ($t1_timestamp - $t2_timestamp) / 86400;
}
else if ($t2_timestamp > $t1_timestamp)
{
$result = ($t2_timestamp - $t1_timestamp) / 86400;
}
return $result;
}


?>
<!DOCTYPE html>

<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1254">
	<META HTTP-EQUIV="Content-language" CONTENT="tr">
	<title>Geciken Kitap Listesi Paneli</title>
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

<h2><ins><b>Geciken Kitap Listesi</b></ins></h2>

<table style="width:600px;">
	<tr>
		<td> <ins><b>Uye Adı</b></ins></td>
		<td> <ins><b> Uye Soyadi</b></ins></td>
		<td> <ins><b> Kitap Adı</b></ins></td>
		<td> <ins><b> Emanet Tarihi</b></ins></td>
		<td> <ins><b> Teslim Tarihi</b></ins></td>
		<td> <ins><b> Gecikme Suresi</b></ins></td>
	</tr>
	<?php 
	include("baglan.php");
	mysql_query("set names utf8");
	date_default_timezone_set('Europe/Istanbul');
	$tarih = date("Y.m.d");
	$Kitap_liste = mysql_query("SELECT  u.adi,u.soyadi,k.kitap_adi,e.emanettarihi,e.teslimtarihi From uyeler AS u , kitap AS k , emanet AS e where u.uyeid = e.uyeid 
					and k.id = e.kitapid and e.teslimtarihi < '$tarih'");
	
	while($kayit=mysql_fetch_array($Kitap_liste)){
		
		$bugun = date('Y-m-d');
		$tarih = $kayit["teslimtarihi"];
		$gun = fark_bul($tarih,$bugun,'-');
		
		echo("<tr>");
		echo "<td>",$kayit["adi"],"</td>";
		echo "<td>",$kayit["soyadi"],"</td>";
		echo "<td>",$kayit["kitap_adi"],"</td>";
		echo "<td>",$kayit["emanettarihi"],"</td>";
		echo "<td>",$kayit["teslimtarihi"],"</td>";
		echo "<td>",$gun," gun","</td>";
		echo "</tr>";
		
		
		
		
	}
	?>
	
 </table>
	
 </form>
</body>
<!-- END BODY -->
</html>








