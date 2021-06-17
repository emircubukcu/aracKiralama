<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");
session_start();
if (!isset($_SESSION['username'])){
    header("Location:login.php");
    exit();

}

//degiskenleri formdan aliyoruz
extract($_POST); 
$password = hash('sha256', $password);
//sorguyu hazirliyoruz
$sql ="UPDATE kullanicilar ".
"SET name='$name',surname='$surname',mail='$mail',username='$username',password='$password' ".
"WHERE id=".$_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
