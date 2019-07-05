<?php
// menghubungkan dengan login.html
// menghubungkan username dengan username yang ada di login dan passwordnya
if (isset($_POST['login'])){
$login = $_POST['username'];
$pass = $_POST['password'];
// membuat form login username dan password sudah di tentukan 
if($login == "admin" && $pass == "admin"){
include ("index.php");
}else{
echo "<h2>Mohon Maaf Login Gagal Username atau Password Salah</h2>";
}
}
?>