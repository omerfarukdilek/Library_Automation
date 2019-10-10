<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ogrenci Paneli</title>
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
			background-color: #e2d8bd;
			background-image: url(images/body.jpg);
			background-repeat: repeat;
		}
		
		#tooplate_wrapper 
		{
			width: 954px;
			height: 753px;
			margin: 50px auto 20px;
			background: url(images/kitap.jpg) top left no-repeat;
		}

		#tooplate_sidebar 
		{
			float: left;	
			width: 296px;
			padding: 10px 0 0;
		}
		
		
		
		
		#menu 
		{
			width: 230px;
			padding-left: 50px;
			padding: 40px 30px 0;
		}
		#header 
		{
			width: 224px;
			padding: 55px 36px 0;
			text-align: center;
			
		}
		
		ul.navigation 
		{
			list-style: none;
			margin: 0 auto;
			padding: 0;
		}

ul.navigation li {
    display: inline;
    margin: 0;
	padding: 0;
	color: #660000;
	font-size: 18px;
	
    text-decoration: none;
	font-family: Georgia, "Times New Roman", Times, serif;
	
}

ul.navigation a {
	display: block;

	padding: 5px 0 0 10px;
	color: #330066;
	font-size: 14px;
	
    text-decoration: none;
	font-family: Georgia, "Times New Roman", Times, serif;
}


		#logo
		{
			
			font-size: 30px;
			padding: 30px 0 0 5px;
			color : #330066;
		}
	</style>
</head>
<body id="background">
 
<div id="slider">

  	<div id="tooplate_wrapper">
		
			
        
		<div id="tooplate_sidebar">
			 
			 
			 <div id="header">
					<a href="#"><font color="#660000" size="5"><p><b> ANASAYFA </b></p></font></a>
			 </div> 
        
		
		 
			
			
		  <div id="menu">
			<ul class="navigation">
				
				
				  
				
				 
                 <li class="has-sub ">
					
					<i class="icon-calendar"></i> 
					<span class="title"><u><b>Arama</b></u></span>
					<span class="arrow "></span>
					
					<ul class="sub">
						<li ><a href="menu2.php?sayfa=kitapara2">Kitap Arama</a></li>
						
                   
					</ul>
				</li>
				<li class="has-sub ">
					
					<i class="icon-sort"></i> 
					<span class="title"><u><b>Kitaplar Ödünç Alın</b></u></span>
					<span class="arrow "></span>
					
					<ul class="sub">
						<li ><a href="menu2.php?sayfa=kitapal">Kitap Al</a></li>
                        <li ><a href="menu2.php?sayfa=kitapver">Kitap Ver</a></li>
						
					</ul>
				</li>
                
                                
				
				
                
             
				
                
                <li class="has-sub ">
					
					<i class="icon-cogs"></i> 
					<span class="title"><u><b>Ogrenci Bilgileri</b></u></span>
                    <span class="arrow "></span>
					
                    <ul class="sub">
                       
						<li ><a href="menu2.php?sayfa=ogrbilgiguncelle">Ogrenci Bilgileri Güncelle</a></li>    
              
						<li ><a href="cikis.php">Oturumu Kapat</a></li> 						
					</ul>
                    
				</li>
				
			</ul>
			
			</div> 
			</div> 
			<div id="logo">
					<!-- <center><img src="images/logo.png" alt="" ></center>-->
					<center><p><b> Kütüphane Otomasyonu </b></p></center>
			 </div> 
			 
			 <div style="width:600px;height:600px;margin-left:300px;"> 
			  <?php 
				$sayfa = $_GET['sayfa'];
				
				if($sayfa == "kitapara2"){
			   ?>
			   
			 <iframe style="width:600px;height:600px;" src="kitap_arama2.php"> </iframe>
			
			 <?php 
				}else if ($sayfa == "kitapal"){
			   ?>
			  <iframe style="width:600px;height:600px;" src="kitap_al.php"> </iframe>
			  
			  <?php
			  }else if ($sayfa == "kitapver"){
			  ?>
			  <iframe style="width:600px;height:600px;" src="kitap_ver.php"> </iframe>
			  
			  <?php
			  }else if ($sayfa == "ogrbilgiguncelle"){
			  ?>
			    <iframe style="width:600px;height:600px;" src="ogrenci_bilgileri_guncelle.php"> </iframe>
				
			   <?php
			  }
			  ?>
			  
			 </div>
			 
			 
		</div >	
		</div >	
	</body>
</html>