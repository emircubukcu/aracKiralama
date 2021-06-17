<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
        exit();
    
    }
    include("mysqlbaglan.php");
    $sql="SELECT * FROM `kiralanan` Where kullanici_adi='". $_SESSION['username']."'";
    $cevap= mysqli_query($baglanti,$sql);
    if(!$cevap){
        echo '<br>HATA:'. mysqli_error($baglanti);
    }
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Cubukcu Araç Kiralama</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Cubukcu Araç Kiralama</h1>
        <ul>
            <li><a href="index.html">Anasayfa</a></li>
            <li><a href="araclar.php">Araçlar</a></li>
            <li><a class="active" href="araclarım.php">Araçlarım</a></li>
            <li style="float:right"><a href="islemler.php">Kullanıcı İşlemleri</a></li>
            <li style="float:right"><a href="login.php">Giriş Yap</a></li>
            <li style="float:right"><a href="signup.php">Kayıt Ol</a></li>
        </ul>
        <p>Merhaba <?php echo $_SESSION['username'] ?><br />Araçlarım sayfanıza hoş geldiniz.</p>
        <?php 
        echo "<table border=1>";
        echo "<tr><th>İşlem No</th><th>Arac Adı</th><th>Kiralayan</th><th></th></tr>";
    
        while($gelen=mysqli_fetch_array($cevap)){
        echo "<tr><td>".$gelen['islem_id']. "</td>";
        $sql2="SELECT * FROM `araclar` Where id=". $gelen['arac_id'];
        $cevap2= mysqli_query($baglanti,$sql2);
        if(!$cevap2){
            echo '<br>HATA:'. mysqli_error($baglanti);
        }
        while($gelen2=mysqli_fetch_array($cevap2)){  
        echo "<td>".$gelen2['aracAd']."</td>";
        }
        echo "<td>".$gelen['kullanici_adi']."</td>";
        echo "<td><a href='delete.php?islem_id=". $gelen['islem_id']."'>Bitir</a></td></tr>";
        }
        echo "</table>";
        mysqli_close($baglanti);
        ?>
        
        <form action="logout.php" >
            <input type="submit" value="Çıkış Yap"/> 
        </form>
    
    </body>
</html>
