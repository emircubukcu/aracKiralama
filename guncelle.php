<?php 
include("mysqlbaglan.php");
session_start();
if (!isset($_SESSION['username'])){
    header("Location:login.php");
    exit();

}
$sql="SELECT *FROM kullanicilar Where username='".$_GET['username']."'";
$cevap=mysqli_query($baglanti,$sql);

if(!$cevap){
    echo '<br>HATA: '. mysqli_error($baglanti);
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
            <li style="float:right"><a href="islemler.php">Kullanıcı İşlemleri</a></li>
            <li style="float:right"><a href="login.php">Giriş Yap</a></li>
            <li style="float:right"><a href="signup.php">Kayıt Ol</a></li>
        </ul>
        <form action="guncelkaydet.php?username=<?php echo $_GET['username'] ?>" method="POST">
            <label for="name">Adı:</label><br>
            <input type="text" name="name" value="<?php echo $gelen['name']?>" /><br>
            <label for="surname">Soyadı:</label><br>
            <input type="text" name="surname" value="<?php echo $gelen['surname'] ?>" /><br>
            <label for="mail">Mail:</label><br>
            <input type="text" name="mail" value="<?php echo $gelen['mail'] ?>" /><br>
            <label for="number">Telefon Numarası:</label><br>
            <input type="text" name="number" value="<?php echo $gelen['number'] ?>" /><br>
            <label for="username">Kullanıcı Adı:</label><br>
            <input type="text" name="username" value="<?php echo $gelen['username'] ?>" /><br>
            <label for="password">Şifre:</label><br>
            <input type="password" name="password"/><br>

            <input type="submit" value="KAYDET"/>
        </form>


        
    </body>
</html>