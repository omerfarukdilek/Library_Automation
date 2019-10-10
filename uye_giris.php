<?php
include("baglan.php");
session_start();
if(isset($_POST['giris']))
{
	 
	 $adi = mysql_real_escape_string($_POST['adi']);
	 $sifre = mysql_real_escape_string($_POST['sifre']);
	 $md5_parola = md5($sifre);
	 $giriskontrol = mysql_query("select * from uyeler where adi ='$adi' and sifre ='$md5_parola'"); 	 
	 $durum = mysql_fetch_array($giriskontrol);
	 if($durum)
	 {
		
		 $yonetici_id_sabit = $durum['uyeid'];
		 
		
		 
		 $_SESSION['adi']    	   		   = $durum['adi'];
		 $_SESSION['soyadi']      		   = $durum['soyadi'];
		 $_SESSION['sifre']       		   = $durum['sifre'];
		 $_SESSION['uyeid']          	   = $yonetici_id_sabit ;	
		 
		 $bilgi = '	 <div class="alert alert-success">
										<strong>BAŞARILI!</strong> Giriş yapılmıştır. yönlendiriliyorsunuz.
									</div>
		 
		 ' ;
		 
		 echo '<meta http-equiv="refresh" content="1; url=menu2.php?sayfa=">';
		 
	 }
	 else
	 {
		 $bilgi = '	 <div class="alert alert-error">
										<strong>HATA!</strong> Kullanıcı Adı veya Şifreniz Yanlış.
									</div>
		 
		 ' ;
	 }
}



?>



<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
	<title>Ogrenci Paneli</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
  <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/style-responsive.css" rel="stylesheet" />
  <link href="assets/css/themes/default.css" rel="stylesheet" id="style_color" />
  <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
  <link href="#" rel="stylesheet" id="style_metro" />
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN PAGE LEVEL STYLES -->  
  <link href="assets/css/pages/login.css" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
  <!-- BEGIN LOGO -->
  <div id="logo" class="center">
    <img src="assets/img/logo1.png" alt="logo" class="center" /> 
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" class="form-vertical no-padding no-margin" action="#" method="post">
      <p class="center">Kullanıcı Adınızı ve şifrenizi yazınız.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span><input id="input-username" name="adi" type="text" placeholder="Kullanıcı Adı" />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span><input id="input-password" name="sifre" type="password" placeholder="Şifre" />
          </div>
        </div>
      </div>
      <div class="control-group remember-me">
        <div class="controls">
          <label class="checkbox">
          <input type="checkbox" name="remember" value="1"/> Beni Hatırla
          </label>
          <a href="javascript:;" class="pull-right" id="forget-password">Şifremi Unuttum?</a>
        </div>
      </div>
      <input type="submit" id="login-btn" class="btn btn-block btn-inverse" value="GİRİŞ" name="giris" />
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="#">
      <p class="center">Lütfen sistemde kayıtlı mail adresinizi yazınız.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="E-mail Adresiniz" />
          </div>
        </div>
        <div class="space10"></div>
      </div>
      <input type="button" id="forget-btn" class="btn btn-block btn-inverse" value="GÖNDER"  name="unuttum" />
    </form>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
  <?=$bilgi?>
  
   Tüm Hakları Saklıdır.<br> 
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
  <!-- BEGIN CORE PLUGINS -->
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
  <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
  <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>    
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="assets/plugins/excanvas.js"></script>
  <script src="assets/plugins/respond.js"></script> 
  <![endif]-->  
  <script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>  
  <script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script> 
  <script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>  
  <!-- END CORE PLUGINS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="assets/scripts/app.js"></script>
  <script src="assets/scripts/login.js"></script> 
  <!-- END PAGE LEVEL SCRIPTS --> 
  <script>
    jQuery(document).ready(function() {     
      // initiate layout and plugins
      App.init();
      Login.init();
    });
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>