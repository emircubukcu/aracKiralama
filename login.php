<?php 
   session_start(); 
   require('mysqlbaglan.php'); 

   if (isset($_POST['username']) and isset($_POST['password'])){ 
      extract($_POST); 
   // sifre metni SHA256 ile şifreleniyor. 
   
   $password = hash('sha256', $password); 
   
   $sql = "SELECT * FROM `kullanicilar` WHERE "; 
   
   $sql= $sql . "username='$username' and password='$password'"; 

   $cevap = mysqli_query($baglanti, $sql); 
   //eger cevap FALSE ise hata yazdiriyoruz.       
   if(!$cevap ){ 
       echo '<br>Hata:' . mysqli_error($baglanti); 
   } 
   //veritabanindan dönen satır sayısını bul  
    $say = mysqli_num_rows($cevap); 
   
    if ($say == 1){ 
   
       $_SESSION['username'] = $username; 
    }
    else{ 
        $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 
    } 
   
   }  
   if (isset($_SESSION['username'])){

        header("Location: araclarım.php"); 
   
   }
   else{ 
   
   //oturum yok ise login formu görüntüle 
   }
?>


<html>
    <head>
        <title>Giriş Yap</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Cubukcu Araç Kiralama</h1>
        <ul>
            <li><a href="index.html">Anasayfa</a></li>
            <li><a href="araclar.php">Araçlar</a></li>
            <li><a href="araclarım.php">Araçlarım</a></li>
            <li style="float:right"><a href="islemler.php">Kullanıcı İşlemleri</a></li>
            <li style="float:right"><a class="active" href="login.php">Giriş Yap</a></li>
            <li style="float:right"><a href="signup.php">Kayıt Ol</a></li>
        </ul>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <label for="username">Kullanıcı Adı:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Şifre:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Giriş Yap">
        </form>
    </body>
</html>