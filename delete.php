<?php 
    include("mysqlbaglan.php");
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location:login.php");
        exit();

}

    $sql="DELETE FROM `kiralanan` where islem_id=".$_GET['islem_id'];
    $cevap=mysqli_query($baglanti,$sql);
    if(!$cevap){
        echo '<br>HATA:'. mysqli_error($baglanti);
    }

   mysqli_close($baglanti);

   header('Location: araclarım.php');



?>