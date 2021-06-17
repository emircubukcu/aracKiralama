<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location:login.php");
        exit();
    
    }
    include("mysqlbaglan.php");
    $sql="SELECT * FROM kullanicilar";
    $cevap= mysqli_query($baglanti,$sql);
    if(!$cevap){
        echo '<br>HATA:'. mysqli_error($baglanti);
    }
    $gelen=mysqli_fetch_array($cevap);
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Cubukcu Araç Kiralama</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Cubukcu Araç Kiralama</h1>
        <ul>
            <li><a href="index.html">Anasayfa</a></li>
            <li><a href="araclar.php">Araçlar</a></li>
            <li><a href="araclarım.php">Araçlarım</a></li>
            <li style="float:right"><a class="active"href="islemler.php">Kullanıcı İşlemleri</a></li>
            <li style="float:right"><a href="login.php">Giriş Yap</a></li>
            <li style="float:right"><a href="signup.php">Kayıt Ol</a></li>
        </ul>

        <p><?php echo "<a href=guncelle.php?username=";
        echo $_SESSION['username'];
        echo">Güncelle</a>";?></p>
    </body>
</html>