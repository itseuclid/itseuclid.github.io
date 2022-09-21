<?php
include_once("db_connect.php");
session_start();
if(isset($_SESSION['user_id'])) {
	header("Location: index.php");
}
$error = false;
if (isset($_POST['signup'])) {
	$user = mysqli_real_escape_string($conn, $_POST['user']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Lütfen geçerli bir e-posta adresi giriniz.";
	}
	if(strlen($pass) < 6) {
		$error = true;
		$pass_error = "Şifreniz 6 karakterden fazla olmalıdır.";
	}
	if($pass != $cpass) {
		$error = true;
		$cpass_error = "Şifreleriniz uyuşmamaktadır.";
	}
	if (!$error) {
		if(mysqli_query($conn, "INSERT INTO users(user, email, pass) VALUES('" . $user . "', '" . $email . "', '" . md5($pass) . "')")) {
			$success_message = "İşlem başarılı! Giriş yapmak için <a href='login.php'>tıklayınız</a>.";
		}
		else {
			$error_message = "Kayıt tamamlanamadı! Lütfen tekrar deneyiniz...";
		}
	}
}
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

  <!-- ======= KAYDOL ======= -->
  <header id="header" class="header-top">
	<div class="container">
      <h1><a href="index.php"><h1>Minecraft Sunucum</h1></a></h1>
      <nav id="navbar" class="navbar">
        <ul style="margin-top: -25px;">
          <li><a class="nav-link" href="index.php">Anasayfa</a></li>
          <li><a class="nav-link" href="magaza.php">Mağaza</a></li>
			<?php if (isset($_SESSION['user_id'])) { ?>
			<li><a class="nav-link" href="profil.php">Profil</a></li>
			<li><a class="nav-link" href="logout.php">Çıkış Yap</a></li>
			<?php } else { ?>
			<li><a class="nav-link" href="login.php">Giriş Yap</a></li>
			<li><a class="nav-link active" href="register.php">Kaydol</a></li>
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
      <p>KAYDOL</p>
    </div>
    <div class="wrapper fadeIn">
     <div id="formContent">
      <div>
        <img src="assets/img/flying-heroes.png" id="icon" alt="" />
      </div>
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
        <input type="text" class="fadeIn" name="user" placeholder="Kullanıcı Adı" required />
        <input type="email" class="fadeIn" name="email" placeholder="E-Posta" required />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
        <input type="password" class="fadeIn" name="pass" placeholder="Şifre" required />
						<span class="text-danger"><?php if (isset($pass_error)) echo $pass_error; ?></span>
        <input type="password" class="fadeIn" name="cpass" placeholder="Tekrar Şifre" required />
						<span class="text-danger"><?php if (isset($cpass_error)) echo $cpass_error; ?></span>
        <input type="submit" class="fadeIn" name="signup" value="KAYDOL" />
        </form>
			<span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
     </div>
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

