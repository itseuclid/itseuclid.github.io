<?php
$servername = "localhost";
$username = "root";
$password = "MarlboroRed53!";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Hata: %s\n", mysqli_connect_error());
    exit();
}
?>