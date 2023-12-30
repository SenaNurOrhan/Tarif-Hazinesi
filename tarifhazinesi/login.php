<?php

include("baglanti.php");

$username_err="";

if(isset($_POST["giris"])){

    if(empty($_POST["kullanici-ad"]))
    {
        $username_err="kullanıcı adı boş geçilemez";
    }



$username=$_POST["kullanici-adi"];
$parola=$_POST["sifre"];


if (isset($username) && isset($parola)) {
  
$secim ="SELECT*FROM kullanicilar where kullanici_adi = '$username'";
$calistir=mysqli_query($baglanti,$secim);
$kayitsayisi =mysqli_num_rows($calistir);//ya sıfır ya birdir
if ($kayitsayisi>0) {
    
    $ilgilikayit = mysqli_fetch_assoc($calistir);
    $hashlisifre=$ilgilikayit["parola"];

    if (password_verify($parola,$hashlisifre)) {
        
        session_start();
        $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
        $_SESSION["email"]=$ilgilikayit["email"];
        header("location:tarifBul.php");
        exit(); // Yönlendirmeyi hemen uygula ve betiği sonlandır

    }

    else {
        echo'<div class="alert alert danger">Parola yanlış.</div>';
    }

}else {
    echo'<div class="alert alert danger">Kullanıcı adı yanlış. </div>';
}

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
           
            <form action="login.php" method="POST" id="Login" class="input-group">
                <input type="text" class="input-field" placeholder="kullanıcı adı" name="kullanici-adi" required>
                <input type="password" class="input-field" placeholder="şifre" name="sifre" required>
                <button type="submit" class="submit-btn" name="giris">Giriş Yap</button>
            </form>
            
            <form action="kayit.php" method="POST" id="Register" class="input-group">
                <input type="text" class="input-field is-invalid" placeholder="kullanıcı adı" name="" required>
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
    </script>

</body>
</html>