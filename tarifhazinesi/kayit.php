<?php

include("baglanti.php");

$username_err="";

if(isset($_POST["kaydet"])){

    if(empty($_POST["kullanici-ad"]))
    {
        $username_err="kullanıcı adı boş geçilemez";
    }
    elseif (strlen($_POST["kullanici-ad"]) <6) {
        //kullanıcı adı 6 karakterden az olmalı.
        $username_err="";
        
    }elseif (! preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullanici-ad"])) {
        //kullanıcı adı büyük küçük harf ve rakamdan oluşabilir.
        $username_err="";
        } 
        else {
           
        }




$name=$_POST["kullanici-ad"];
$email=$_POST["e-posta"];
$password=password_hash($_POST["parola"], PASSWORD_DEFAULT);

$ekle="INSERT INTO kullanicilar(kullanici_adi, email,parola) VALUES('$name','$email','$password')";

$calistirekle = mysqli_query($baglanti,$ekle);

if($calistirekle){
    echo'<div class="alert alert success">Kayıt başarılı bir şekilde eklendi. Giriş yapablirsiniz:)</div>';


 // Yönlendirme işlemi
 header("Location: login.php");
 exit(); // Yönlendirmeyi hemen uygula ve betiği sonlandır

}
else{
    echo'<div class="alert alert danger">Kayıt başarılı eklenirken hata oluştu.Lütfen tekrar deneyiniz</div>';
}
mysqli_close($baglanti);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Hazinesi</title>
    <link rel="stylesheet" href="giris.css">
    <link rel="icon" href="order-online.png" type="image/x-icon">
</head>
<body>


    <div class="main">
        <div class="fore-box">
            <div class="button-box">
                <div id="btn"> </div>
              <a href="login.php">  <button type="button" class="toggle-btn" onclick="login()"> Giriş</button></a>
              <a href="kayit.php">  <button type="button" class="toggle-btn" onclick="register()">Kayıt</button></a>
            </div>
           
            <form action="login.php" id="Login" class="input-group">
                <input type="text" class="input-field" placeholder="kullanıcı adı" name="kullanici-adi" required>
                <input type="password" class="input-field" placeholder="şifre" name="sifre" required>
                <button type="submit" class="submit-btn" name="giris">Giriş Yap</button>
            </form>
            
            <form action="kayit.php" method="POST" id="Register" class="input-group">
                <input type="text" class="input-field is-invalid" placeholder="kullanıcı adı" name="kullanici-ad" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
       <?php
       echo $username_err;
       ?>
      </div>
                <input type="text" class="input-field is-invalid" placeholder="e-mail" name="e-posta" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
   
      </div>
                <input type="text" class="input-field is-invalid" placeholder="parola" name="parola" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
       
      </div>
                <button type="submit" class="submit-btn" name="kaydet">Kayıt ol</button>
            </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("Login");
        var z=document.getElementById("Register");
        var y=document.getElementById("btn");

        function register() {
    x.style.left = "-600px";
    z.style.left = "50px";
    y.style.left = "110px";
}

function login() {
    x.style.left = "50px";
    z.style.left = "450px";
    y.style.left = "0px";
}
 // Sayfa yüklendiğinde kayıt formunu göster
 window.onload = function () {
            register();
        };
    </script>

</body>
</html>