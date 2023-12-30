<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarif Hazinesi</title>
    <link rel="stylesheet" href="anaSayfa.css">
    <link rel="icon" href="order-online.png" type="image/x-icon">
</head>
<body>

    <header>
        <div class="logo-container">
            <a href="#" class="logo"><img src="order-online.png" alt="">Tarif Hazinesi</a>
        </div>
        <ul>
            <li><a href="tarifler.php" class="none">Tarifler</a></li>
            <li><a href="#" id="tarifBulButton" class="none">Tarif Bul</a></li>
            <li><a href="login.php" id="girisYapButton" class="active">Giriş Yap</a></li>
        </ul>
    </header>
    <div class="masa">
        <img  src="yemekmasa.webp" alt="">
    </div>
   
    <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY >0 );
        })
        window.addEventListener("scroll", function (e) {
    // Sayfanın scroll olayını engelle
    e.preventDefault();
    // Sayfanın scroll pozisyonunu sıfıra (en üst) ayarla
    window.scrollTo(0, 0);
});
// Kullanıcının giriş yapmış olup olmadığını kontrol eden fonksiyon
function checkLogin() {
    // Kullanıcının giriş yapmış olduğunu simüle etmek için bir değişken
    var isLoggedIn = false; // Bu değeri gerçek bir oturum kontrolü ile değiştirmeniz gerekecek

    return isLoggedIn;
}
document.getElementById("girisYapButton").addEventListener("click", function () {
    location.href = "login.php";
});

// Tarif Bul butonuna tıklandığında çalışacak fonksiyon
function checkLogin() {
    // Kullanıcının giriş yapmış olduğunu simüle etmek için bir değişken
    var isLoggedIn = false; // Bu değeri gerçek bir oturum kontrolü ile değiştirmeniz gerekecek

    return isLoggedIn;
}

function onTarifBulClick() {
    // Kullanıcı giriş yapmış mı kontrol et
    var isUserLoggedIn = checkLogin();

    if (isUserLoggedIn) {
        // Kullanıcı giriş yapmışsa tarif bulma işlemlerine devam et
        location.href = "tarifler.php";
    } else {
        // Kullanıcı giriş yapmamışsa uyarı mesajını göster
        alert("Tarif bulmak için önce giriş yapmalısınız.");
    }
}

// Tarif Bul butonuna tıklandığında onTarifBulClick fonksiyonunu çağır
document.getElementById("tarifBulButton").addEventListener("click", onTarifBulClick);
    </script>
</body>
</html>
