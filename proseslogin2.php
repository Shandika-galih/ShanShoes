<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysqli_query($koneksi, "SELECT  COUNT(nm_usr) AS jumlah FROM user WHERE nm_usr='$username' AND pas_usr='$password'");

$data = mysqli_fetch_array($query);

if ($data['jumlah'] >= 1){
	session_start();
	$_SESSION['username']    = $username;
    $_SESSION['password']    = $password;

	echo "<script>alert('Selamat datang $username'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'loginKonsumen.php'</script>";	
}

?>