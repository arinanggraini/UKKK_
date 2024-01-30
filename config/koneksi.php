<?php 
$hostname = "localhost";
$userdb = "root";
$passdb ="";
$namedb ="ukk_gelerifoto";

$koneksi = mysqli_connect($hostname, $userdb, $passdb, $namedb);

if ($koneksi){
    echo "koneksi berhasil";

}else{
    echo "koneksi gagal";
}
?>