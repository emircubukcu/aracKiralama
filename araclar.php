<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Cubukcu Araç Kiralama</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        //mysql baglanti kodunu ekliyoruz
        include("mysqlbaglan.php");
        
        function kirala(){
            echo "Selam";
        }
        ?>
        <script>
            function kirala(){
                var kirala= "<?php echo kirala();?> ";
            }
        </script>
        <h1>Cubukcu Araç Kiralama</h1>
        <ul>
            <li><a  href="index.html">Anasayfa</a></li>
            <li><a class="active" href="araclar.php">Araçlar</a></li>
            <li><a href="araclarım.php">Araçlarım</a></li>
            <li style="float:right"><a href="islemler.php">Kullanıcı İşlemleri</a></li>
            <li style="float:right"><a href="login.php">Giriş Yap</a></li>
            <li style="float:right"><a href="signup.php">Kayıt Ol</a></li>
        </ul>
       <div class="row">
            <div class="column">
                <div class="card">
                    <img src="resimler/arac1.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='1'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=1" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac2.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='2'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=2" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>  
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac3.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='3'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=3" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac4.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='4'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=4" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="resimler/arac5.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='5'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=5" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac6.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='6'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=6" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form> 
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac7.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='7'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=7" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac8.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='8'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=8" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="resimler/arac9.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='9'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=9" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac10.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='10'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=10" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form> 
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac11.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='11'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=11" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac12.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='12'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=12" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="resimler/arac13.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='13'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=13" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac14.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='14'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=14" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac15.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='15'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=15" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac16.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='16'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=16" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="resimler/arac17.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='17'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?> 
                       <form action="kaydet.php?id=17" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac18.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='18'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=18" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac19.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='19'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=19" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac20.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='20'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=20" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="resimler/arac21.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='21'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?> 
                        <form action="kaydet.php?id=21" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac22.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='22'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=22" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac23.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='23'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?> 
                        <form action="kaydet.php?id=23" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="resimler/arac24.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <?php 
                            $sql = "SELECT * FROM araclar WHERE id='24'"; 
                            $cevap = mysqli_query($baglanti,$sql);
                            if(!$cevap ){
                                echo '<br>Hata:' . mysqli_error($baglanti);
                            }
                            $gelen=mysqli_fetch_array($cevap);
                            echo "<h4><b>".$gelen['aracAd']."</b></h4>";
                            echo "<p>Aylık fiyat: ".$gelen['aracFiyat']."₺</p>";
                        ?>
                        <form action="kaydet.php?id=24" method="POST"> 
                        <input type="submit" value="Kiralama"/> 
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>