<?php
session_start();
include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_array($sql);

    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $_SESSION['username'] = $username; 
        $_SESSION['status'] ='login';
        echo "<script>alert('Berhasil Login');
        location.href='../admin/index.php'</script>";
    }else{
        echo "<script>alert('username atau password salah');
        location.href='../login.php'</script>";
    }


?>