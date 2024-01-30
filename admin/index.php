Selamat datang
<?php 
session_start();

echo $_SESSION['username'];

?>

<a href="../config/aksi_logout.php">logout</a>