<?php 
session_start();
include_once("db_connect.php");
?>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Minecraft Sunucum</title>
  <meta content="" name="açıklama">
  <meta content="" name="anahtar, kelimeler, yaziniz">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= ANASAYFA/BASLIK ======= -->
  <header id="header">
    <div class="container">
      <h1 style="margin-top: 20px;" >Minecraft Sunucum</h1>
		<div class="hero" id="main">
		<p style="margin-top: 10px; margin-left: 5px;" class="info">Şu anda <span class="sip" data-ip="oyna.minecraft.sunucum" data-port="25565">
			0</span> kişi oyunda! <span class="ip">oyna.minecraft.sunucum</span></p>
		</div>	
      <nav style="margin-top: 10px; margin-left: 5px;" id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="index.php">Anasayfa</a></li>
          <li><a class="nav-link" href="magaza.php">Mağaza</a></li>
			<?php if (isset($_SESSION['user_id'])) { ?>
			<li><a class="nav-link" href="profil.php">Profil</a></li>
			<li><a class="nav-link" href="logout.php">Çıkış Yap</a></li>
			<?php } else { ?>
			<li><a class="nav-link" href="login.php">Giriş Yap</a></li>
			<li><a class="nav-link" href="register.php">Kaydol</a></li>
			<?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <div style="margin-top: 30px; margin-left: 5px;" class="social-links">
        <a href="#" class="discord"><i class="bi bi-discord"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      </div>
    </div>
  </header>
  <div class="credits">
    by <a href="https://www.instagram.com/itseuclid/">euclidbeen</a>
  </div>

  <!-- SCRIPTLER -->
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
  <script src="assets/js/ip.js" type="text/javascript"></script>

</body>

</html>