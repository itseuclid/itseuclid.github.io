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

  <!-- ======= MAGAZA ======= -->
  <header id="header" class="header-top">
	<div class="container">
      <h1><a href="index.php"><h1>Minecraft Sunucum</h1></a></h1>
      <nav id="navbar" class="navbar">
        <ul style="margin-top: -25px;">
          <li><a class="nav-link" href="index.php">Anasayfa</a></li>
          <li><a class="nav-link active" href="magaza.php">Mağaza</a></li>
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
	</div>
   </header>
   
  <section class="section-show">
    <div class="container">
      <div class="section-title">
        <h2>MINECRAFT SUNUCUM</h2>
        <p>MAĞAZA</p>
      </div>
    </div>
  </section>
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