<?php 
   require ('mysqlbaglan.php'); 
   
   if (isset($_POST['username']) && isset($_POST['password'])){ 

    extract($_POST);    
    $password = hash('sha256', $password); 

    $sql="INSERT INTO `kullanicilar` (name, surname, number,mail,username,password)";    
    $sql = $sql . "VALUES ('$name','$surname','$number','$mail','$username','$password')"; 

    $cevap = mysqli_query($baglanti, $sql); 
   
    if ($cevap){ 
        $mesaj = "<h1>Kullanıcı oluşturuldu.</h1>"; 
   
    }
    else{ 
        $mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>"; 
    } 
   } 
   ?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8" />
        <title>Giriş Yap</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Cubukcu Araç Kiralama</h1>
        <ul>
            <li><a href="index.html">Anasayfa</a></li>
            <li><a href="araclar.php">Araçlar</a></li>
            <li><a href="araclarım.php">Araçlarım</a></li>
            <li style="float:right"><a  href="login.php">Giriş Yap</a></li>
            <li style="float:right"><a class="active" href="signup.php">Kayıt Ol</a></li>
        </ul>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <label for="name">Ad:</label><br>
            <input type="text" id="name" name="name" ><br>
            <label for="surname">Soyad:</label><br>
            <input type="text" id="surname" name="surname" ><br>
            <label for="number">Telefon:</label><br>
            <input type="text" id="number" name="number" ><br>
            <label for="mail">E-Posta:</label><br>
            <input type="text" id="mail" name="mail" ><br>
            <label for="username">Kullanıcı Adı:</label><br>
            <input type="text" id="username" name="username" ><br>
            <label for="password">Şifre:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Kayıt Ol">
        </form>
    </body>
</html>