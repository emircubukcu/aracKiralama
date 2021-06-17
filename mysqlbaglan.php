<?php
    $server='localhost';
    $user='285342';
    $password='emir5516';
    $database='285342';

    $baglanti=mysqli_connect($server,$user,$password,$database);
    if(!$baglanti){
        echo "MySQL sunucu ile bağlantı kurulamadı <br />";
        echo "Hata: ".mysqli_connect_error();
    }
?>
