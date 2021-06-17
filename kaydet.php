<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location:login.php");
    exit();

}
include("mysqlbaglan.php");

$aracid=$_GET['id'];
$kullanıcıUsername=$_SESSION['username'];


$sql="INSERT INTO `kiralanan` "."(arac_id,kullanici_adi)"."VALUES('$aracid','$kullanıcıUsername');";

$cevap=mysqli_query($baglanti,$sql);

if(!$cevap){
    echo"<br>Hata:". mysqli_error($baglanti);

}
mysqli_close($baglanti);

header('Location: araclarım.php');


?>