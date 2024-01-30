<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$password', '$email', '$nama', '$alamat')");


    if ($sql){
        echo "<script>alert('Berhasil Daftar');
        location.href='../login.php'</script>";
    }
?>