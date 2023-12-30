<?php


session_start();
if(isset($_SESSION["kullanici_adi"])){

    echo"";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Hazinesi </title>
    <link rel="stylesheet" href="tarifBu.css">
    <link rel="icon" href="order-online.png" type="image/x-icon">

</head>
<body>
    
    <header>
        <div class="logo-container">
            <a href="anaSayfa.php" class="logo"><img src="order-online.png" alt="">Tarif Hazinesi</a>
        </div>
        <ul>

            <li><a href="tarifler.php" class="none">Tarifler</a></li>
            <li><a href="tarifBul.php" class="active">Tarif Bul</a></li>
            <li><a href="anaSayfa.php" class="none" id="gir">Çıkış Yap</a></li>
            
        </ul>
    </header>

    <div class="kolon">
    <div class="kutu">
        <h3>Malzemeyi Seç</h3> 
        <div class="tercih">
            <label><input type="checkbox" class="malzemet" value="Arpa Şehriye"> Arpa Şehriye</label><br>
            <label><input type="checkbox" class="malzemet" value="Balık Fileto"> Balık Fileto</label><br>
            <label><input type="checkbox" class="malzemet" value="Beşamel Sos"> Beşamel Sos</label><br>
            <label><input type="checkbox" class="malzemet" value="Beyaz Peynir"> Beyaz Peynir</label><br>  
            <label><input type="checkbox" class="malzemet" value="Beyaz Lahana"> Beyaz Lahana(sarmalık)</label><br>
            <label><input type="checkbox" class="malzemet" value="Bezelye"> Bezelye</label><br>
            <label><input type="checkbox" class="malzemet" value="Bulgur"> Bulgur</label><br>
            <label><input type="checkbox" class="malzemet" value="Ince Bulgur"> Bulgur (ince)</label><br>
            <label><input type="checkbox" class="malzemet" value="Brokoli"> Brokoli</label><br>
            <label><input type="checkbox" class="malzemet" value="Ceviz içi"> Ceviz içi</label><br>

            <label><input type="checkbox" class="malzemet" value="Çikolata"> Çikolata</label><br>
            <label><input type="checkbox" class="malzemet" value="Domates"> Domates</label><br>
            <label><input type="checkbox" class="malzemet" value="Dolmalık Biber"> Dolmalık Biber</label><br>
            <label><input type="checkbox" class="malzemet" value="Et Suyu"> Et Suyu</label><br>
            <label><input type="checkbox" class="malzemet" value="Havuç"> Havuç</label><br>
            <label><input type="checkbox" class="malzemet" value="Hardal Sos"> Hardal Sos</label><br>
            <label><input type="checkbox" class="malzemet" value="Ispanak"> Ispanak<label><br>
            <label><input type="checkbox" class="malzemet" value="İrmik"> İrmik</label><br>

            <label><input type="checkbox" class="malzemet" value="Kabartma Tozu"> Kabartma Tozu</label><br>

            <label><input type="checkbox" class="malzemet" value="Kabak"> Kabak</label><br>  
            <label><input type="checkbox" class="malzemet" value="Kadayıf"> Kadayıf</label><br>
            <label><input type="checkbox" class="malzemet" value="Kakao"> Kakao</label><br>

            <label><input type="checkbox" class="malzemet" value="Karabiber"> Karabiber</label><br>
            <label><input type="checkbox" class="malzemet" value="Karides"> Karides</label><br>
            <label><input type="checkbox" class="malzemet" value="Karnabahar"> Karnabahar</label><br>
            <label><input type="checkbox" class="malzemet" value="Kaşar Peyniri"> Kaşar Peyniri</label><br>
            <label><input type="checkbox" class="malzemet" value="Kereviz"> Kereviz</label><br>
            <label><input type="checkbox" class="malzemet" value="Ketçap"> Ketçap</label><br>
            <label><input type="checkbox" class="malzemet" value="Kekik"> Kekik</label><br>
            <label><input type="checkbox" class="malzemet" value="Kırmızı Mercimek"> Kırmızı Mercimek</label><br>
            <label><input type="checkbox" class="malzemet" value="Kırmızı Biber"> Kırmızı Biber</label><br>
            <label><input type="checkbox" class="malzemet" value="Kıyma"> Kıyma</label><br>
            <label><input type="checkbox" class="malzemet" value="Kimyon"> Kimyon</label><br>
            <label><input type="checkbox" class="malzemet" value="Kişniş"> Kişniş</label><br>
            <label><input type="checkbox" class="malzemet" value="Krema"> Krema</label><br>

            <label><input type="checkbox" class="malzemet" value="Krem Peynir"> Krem Peynir</label><br>
            <label><input type="checkbox" class="malzemet" value="Kuru Fasulye"> Kuru Fasulye</label><br>
            <label><input type="checkbox" class="malzemet" value="Kuzu Eti"> Kuzu Eti</label><br>
            <label><input type="checkbox" class="malzemet" value="Limon"> Limon </label> <br>
            <label><input type="checkbox" class="malzemet" value="Mantar"> Mantar</label><br>
            <label><input type="checkbox" class="malzemet" value="Makarna"> Makarna</label><br>
            <label><input type="checkbox" class="malzemet" value="Marul"> Marul</label><br>
            <label><input type="checkbox" class="malzemet" value="Maya"> Maya</label><br>

            <label><input type="checkbox" class="malzemet" value="Maydanoz"> Maydanoz</label><br>
            <label><input type="checkbox" class="malzemet" value="Mayonez"> Mayonez</label><br>
            <label><input type="checkbox" class="malzemet" value="Mısır Taneleri"> Mısır Taneleri</label><br>
            <label><input type="checkbox" class="malzemet" value="Nar Ekşisi"> Nar Ekşisi</label><br>
            <label><input type="checkbox" class="malzemet" value="Nane"> Nane</label><br>
            <label><input type="checkbox" class="malzemet" value="Taze Nane"> Nane (taze)</label><br>
            <label><input type="checkbox" class="malzemet" value="Noodle"> Noodle</label><br>
            <label><input type="checkbox" class="malzemet" value="Nohut"> Nohut</label><br>
            <label><input type="checkbox" class="malzemet" value="Patates"> Patates</label><br>
            <label><input type="checkbox" class="malzemet" value="Patlıcan"> Patlıcan</label><br>
            <label><input type="checkbox" class="malzemet" value="Bostan patlıcan"> Patlıcan(Bostan)</label><br>
            <label><input type="checkbox" class="malzemet" value="Parmesan peyniri"> Parmesan peyniri</label><br>
            <label><input type="checkbox" class="malzemet" value="Pirinç"> Pirinç</label><br>
            <label><input type="checkbox" class="malzemet" value="Dolmalık pirinç"> Pirinç (Dolmalık)</label><br>
            <label><input type="checkbox" class="malzemet" value="Pırasa"> Pırasa</label><br>
            <label><input type="checkbox" class="malzemet" value="Salça"> Salça</label><br>
            <label><input type="checkbox" class="malzemet" value="Salatalık"> Salatalık</label><br>
            <label><input type="checkbox" class="malzemet" value="Sarımsak"> Sarımsak</label><br>
            <label><input type="checkbox" class="malzemet" value="Soğan"> Soğan</label><br>
            <label><input type="checkbox" class="malzemet" value="Kırmızı Soğan"> Soğan(Kırmızı)</label><br>
            <label><input type="checkbox" class="malzemet" value="Taze Soğan"> Soğan(taze)</label><br>
            <label><input type="checkbox" class="malzemet" value="Soya sosu"> Soya sosu</label><br>
            <label><input type="checkbox" class="malzemet" value="Süt"> Süt</label><br>
            <label><input type="checkbox" class="malzemet" value="Şekerr"> Şeker</label><br>
            <label><input type="checkbox" class="malzemet" value="Tarçın"> Tarçın</label><br>
            <label><input type="checkbox" class="malzemet" value="Tahin"> Tahin</label><br>

            <label><input type="checkbox" class="malzemet" value="Tavuk"> Tavuk</label><br>
            <label><input type="checkbox" class="malzemet" value="Tavuk Suyu"> Tavuk Suyu</label><br>
            <label><input type="checkbox" class="malzemet" value="Tavuk Göğsü"> Tavuk Göğsü</label><br>
            <label><input type="checkbox" class="malzemet" value="Taze Fasulye"> Taze Fasulye</label><br>
            <label><input type="checkbox" class="malzemet" value="Tel Şehriye"> Tel Şehriye</label><br>
            <label><input type="checkbox" class="malzemet" value="Tereyağı"> Tereyağı</label><br>
            <label><input type="checkbox" class="malzemet" value="Tuz"> Tuz</label><br>
            <label><input type="checkbox" class="malzemet" value="Un"> Un</label><br>
            <label><input type="checkbox" class="malzemet" value="Üzüm Yaprağı"> Üzüm Yaprağı</label><br>
            <label><input type="checkbox" class="malzemet" value="Vanilin "> Vanilin </label><br>
            <label><input type="checkbox" class="malzemet" value="Yeşil Mercimek"> Yeşil Mercimek</label><br>
            <label><input type="checkbox" class="malzemet" value="Yoğurt"> Yoğurt</label><br>
            <label><input type="checkbox" class="malzemet" value="Yumurta"> Yumurta</label><br>
            <label><input type="checkbox" class="malzemet" value="Yufka"> Yufka</label><br>
            <label><input type="checkbox" class="malzemet" value="Zeytinyağı"> Zeytinyağı</label><br> 



        </div>
        
        <button id="tarifBut">Tarif Bul</button>
    </div>   
    <div class="yazi">
        
        <p> <h3>Merhabalarr! </h3>
             İşte lezzet dolu bir serüvenin başlangıcı. <br>İlk adım olarak, elindeki malzemeleri seç. <br> Sonra sadece 'Tarif Bul' butonuna tıkla ve sihir başlasın!

            <h4>Malzeme Seçimi:</h4>
            Sol tarafta bulunan listeden mutfaktaki kahramanlarını seç. Domates mi, biber mi, yoksa başka bir sürü harika malzeme mi? Karar senin!
            
            <h4>Tarif Bul:</h4>
            Seçimini yaptıktan sonra hemen 'Tarif Bul' butonuna tıkla. Göreceksin, karşına anında bir dizi muhteşem tarif çıkacak.
            
            <h4>Haydi, Mutfağa!:</h4>
            Tarifleri inceledikten sonra hangisi seni çağırıyorsa, mutfağa adımını at! Adım adım tariflerle harika yemekleri sen de kolayca yapabilirsin.
            
            Unutma, mutfakta sadece yemek pişirmiyorsun, aynı zamanda kendi lezzet hikayeni yazıyorsun. Şimdi tıkla ve mutfakta sihirli anların başlasın! 🍳✨</p>
    </div>
</div>

        

    
 
 <script>
 // "Tarif Bul" butonuna tıklama olayını dinle
 document.getElementById("tarifBut").addEventListener("click", function () {
            // Seçilen malzemeleri al
            var secilenMalzemeler = document.querySelectorAll(".malzemet:checked");
            // Malzemeleri bir diziye dönüştür
            var malzemelerArray = Array.from(secilenMalzemeler).map(function (malzeme) {
                return malzeme.value;
            });
            // Malzemeleri kaydet 
            saveMalzemeler(malzemelerArray);
            // Tarifleri güncelle
            updateTarifler(malzemelerArray);
            // Seçilen malzemelerin checkbox'larını temizle
            secilenMalzemeler.forEach(function (malzeme) {
                malzeme.checked = false;
            });
        });
    // Tariflerin bulunduğu bir nesne
    var tarifler = {
        "Ispanaklı Peynirli Börek": {
        malzemeler: ["Ispanak", "Beyaz Peynir", "Yufka"],
        yapilis: "1. Ispanakları doğrayın. Beyaz peyniri ezin.<br>2. Yufkaları açın ve içine ıspanak, beyaz peynir karışımını yerleştirin.<br>3. Yufkaları rulo şeklinde sarın ve tepsiye yerleştirin.<br>4. Önceden ısıtılmış fırında üzeri kızarana kadar pişirin.",
        resim: "images/ispanakli-peynir-börek.jpg"
    },
    " Fırın Tavuk  ": {
        malzemeler: ["Tavuk", "Zeytinyağı", "Baharatlar"],
        yapilis: "1. Tavuk butlarını yıkayın ve baharatlarla marine edin.<br>2. Tepsiye yerleştirin ve üzerine zeytinyağı sürün.<br>3. Önceden ısıtılmış fırında tavuklar iyice kızarana kadar pişirin.",
        resim: "images/firin-tavuk.jpg"
    },
    " Omlet  ": {
        malzemeler: ["Yumurta", "Süt", "Tuz", "Karabiber", "Kaşar Peyniri"],
        yapilis: "1. Yumurtaları bir kaba kırın, süt, tuz ve karabiber ekleyin.<br>2. İyice çırpıp tavada pişirin.<br>3. Üzerine rendelenmiş kaşar peyniri serperek sıcak servis yapın.",
        resim: "images/omlet.jpg"
    },
    "Ezogelin Çorbası": {
        malzemeler: ["Kırmızı Mercimek", "Bulgur", "Ince Bulgur", "Soğan", "Salça", "Nane"],
        yapilis: "1. Soğanı ince doğrayın ve yağda kavurun.<br>2. Salçayı ekleyip kavurmaya devam edin.<br>3. Yıkanmış kırmızı mercimeği ekleyin ve karıştırın.<br>4. Üzerine su ekleyip kaynamaya bırakın.<br>5. Kaynayan çorbaya ince bulguru, nane ve baharatları ekleyin ve karıştırın.",
        resim: "images/ezogelin-corbasi.png"
    },
    "Mercimek Çorbası": {
        malzemeler: ["Kırmızı Mercimek", "Soğan", "Havuç", "Domates", "Tereyağı"],
        yapilis: "1. Soğanı doğrayın ve tereyağında kavurun.<br>2. Doğranmış havuçları ekleyip soteleyin.<br>3. Yıkanmış kırmızı mercimeği ve doğranmış domatesi ekleyin.<br>4. Üzerine su ilave edip kaynatın.",
        resim: "images/mercimek-corba.jpg"
    },
    "Yeşil Mercimek Yemeği": {
        malzemeler: ["Yeşil Mercimek", "Soğan", "Domates", "Zeytinyağı", "Baharatlar"],
        yapilis: "1. Soğanı doğrayın ve zeytinyağında kavurun.<br>2. Doğranmış domatesi ekleyip soteleyin.<br>3. Yıkanmış yeşil mercimeği ekleyin ve karıştırın.<br>4. Üzerine su ilave edip pişirin. Baharatlarını ekleyerek servis yapın.",
        resim: "images/yesil-mercimek-yemek.jpg"
    },
    "Kuru Fasulye": {
        malzemeler: ["Kuru Fasulye", "Soğan", "Domates", "Salça", "Zeytinyağı"],
        yapilis: "1. Kuru fasulyeyi akşamdan suda bekletin.<br>2. Soğanı doğrayın ve zeytinyağında kavurun.<br>3. Doğranmış domatesi ve biber salçasını ekleyip soteleyin.<br>4. Süzülmüş kuru fasulyeyi ekleyin ve üzerine su ilave edip pişirin.",
        resim: "images/kuru-fasulye-yemek.jpg"
    },
    "Taze Fasulye Yemeği": {
        malzemeler: ["Taze Fasulye", "Soğan", "Domates", "Zeytinyağı", "Limon"],
        yapilis: "1. Taze fasulyeleri temizleyip doğrayın.<br>2. Soğanı doğrayın ve zeytinyağında kavurun.<br>3. Doğranmış domatesi ekleyip soteleyin.<br>4. Taze fasulyeleri ekleyin ve su ilave edip pişirin. Limon sıkarak servis yapın.",
        resim: "images/taze-fasulye-yemek.jpg"
    },
    "Yaprak Sarma": {
        malzemeler: ["Üzüm Yaprağı", "Pirinç", "Soğan", "Zeytinyağı", "Nar Ekşisi"],
        yapilis: "1. Üzüm yapraklarını yıkayın ve sıcak suda bekletin.<br>2. Pirinci yıkayın. Soğanı doğrayın ve zeytinyağında kavurun.<br>3. Pirinci ekleyip soteleyin. İnce doğranmış taze soğanı da ekleyin.<br>4. Üzüm yapraklarının içine hazırladığınız içten koyun ve sarın.<br>5. Yaprak sarmaları tencereye dizin ve üzerine nar ekşisi ekleyerek pişirin.",
        resim: "images/yaprak-sarma.jpg"
    },
    "Lahana Sarma": {
        malzemeler: ["Beyaz Lahana", "Kıyma", "Pirinç", "Soğan", "Baharatlar"],
        yapilis: "1. Lahana yapraklarını haşlayın.<br>2. Soğanı doğrayın ve kıymayla birlikte kavurun.<br>3. Pirinci ekleyip soteleyin. Baharatları ekleyin.<br>4. Lahana yapraklarına iç harcı koyun ve sarın.<br>5. Lahana sarmalarını tencereye dizin ve üzerine su ekleyerek pişirin.",
        resim: "images/lahana-sarma.jpg"
    },
    "Arpa Şehriye Pilavı": {
        malzemeler: ["Arpa Şehriye", "Pirinç", "Tereyağı", "Et Suyu", "Tuz"],
        yapilis: "1. Tereyağını bir tencerede eritin ve arpa şehriyeyi ekleyip kavurun.<br>2. Üzerine yıkanmış pirinci ekleyin ve karıştırın.<br>3. Et suyu ve tuz ekleyip karıştırın. Pilav suyunu çekene kadar pişirin.",
        resim: "images/arpa-sehriye-pilavı.jpg"
    },
    "Mısırlı Pilav": {
        malzemeler: ["Mısır Taneleri", "Pirinç", "Soğan", "Sarımsak", "Zeytinyağı"],
        yapilis: "1. Soğanı doğrayın ve zeytinyağında kavurun.<br>2. Doğranmış sarımsakları ekleyin, ardından mısır tanelerini ekleyip soteleyin.<br>3. Yıkanmış pirinci ekleyin ve karıştırın. Üzerine su ekleyip pilav suyunu çekene kadar pişirin.",
        resim: "images/mısırlı-pilav.jpg"
    },
    "Sebzeli Pilav": {
        malzemeler: ["Pirinç", "Bezelye", "Soğan", "Tereyağı", "Et Suyu", "Kabak", "Havuç"],
        yapilis: "1. Soğanı doğrayın ve tereyağında kavurun.<br>2. Doğranmış sebzeleri ekleyip soteleyin.<br>3. Yıkanmış pirinci ekleyin ve karıştırın.<br>4. Üzerine et suyu ekleyip pilav suyunu çekene kadar pişirin.",
        resim: "images/sebzeli-pilav.jpg"
    },
    "Mercimek Köftesi": {
            malzemeler: ["Kırmızı Mercimek", "İnce Bulgur", "Soğan", "Salça", "Zeytinyağı"],
            yapilis: "1. Mercimeği yıkayın ve su ekleyerek haşlayın.<br>2. İnce bulguru haşlanmış mercimek üzerine ekleyin ve karıştırın.<br>3. Soğanı rendeleyin ve karışıma ilave edin.<br>4. Domates salçasını ve zeytinyağını ekleyip yoğurun.<br>5. Köfteleri şekil vererek servis yapın.",
            resim: "images/mercimekkofte.jpg"
        },
    "İçli Köfte": {
            malzemeler: ["İnce Bulgur", "Kıyma", "Soğan", "Salça", "Baharatlar"],
            yapilis: "1. İnce bulguru sıcak su ile ıslatın ve yoğurun.<br>2. İç harcı için soğanı doğrayın, kıyma ve baharatlarla karıştırın.<br>3. Islattığınız bulgurdan ceviz büyüklüğünde parçalar koparıp içine harçtan koyun ve şekil verin.<br>4. İçli köfteleri pişirme öncesi buğulama yöntemiyle pişirin.",
            resim: "images/icli-kofte.jpg"
        },
    "Yayla Çorbası": {
            malzemeler: ["Yoğurt", "Yumurta", "Un", "Nane", "Tereyağı"],
            yapilis: "1. Yoğurdu bir kaba alın, üzerine un ve yumurtayı ekleyip çırpın.<br>2. Karışımı tencereye alın ve sürekli karıştırarak kaynamaya bırakın.<br>3. Çorba kaynadıktan sonra tuzunu ekleyin.<br>4. Ayrı bir tavada tereyağını eritin ve nane ekleyip karıştırın.<br>5. Hazırladığınız naneli tereyağını çorbanın üzerine gezdirip servis yapın.",
            resim: "images/yayla-corbasi.jpg"
        },
     "Arpa Şehriye Çorbası": {
            malzemeler: ["Arpa Şehriye", "Tavuk Suyu", "Soğan", "Havuç", "Tereyağı"],
            yapilis: "1. Soğanı doğrayın ve tereyağında kavurun.<br>2. Doğranmış havuçları ekleyip soteleyin.<br>3. Arpa şehriyeyi ekleyip karıştırın.<br>4. Tavuk suyunu ekleyin ve çorba kaynamaya başlayana kadar pişirin.",
            resim: "images/arpa-seyhriye-corbasi.jpg"
        },
    "Domates Çorbası": {
            malzemeler: ["Domates", "Soğan", "Un", "Tereyağı", "Su", "Süt"],
            yapilis: "1. Soğanı doğrayın ve tereyağında kavurun.<br>2. Doğranmış domatesleri ekleyip soteleyin.<br>3. Unu ekleyip karıştırın. Ardından su ve sütü ekleyin.<br>4. Çorba kaynadıktan sonra tuz ekleyip karıştırın.",
            resim: "images/doamtes-corbasi.jpg"
        },
    "Tavuk suyu Çorba": {
            malzemeler: ["Tavuk Suyu", "Tavuk Göğsü", "Tel Şehriye", "Soğan", "Havuç"],
            yapilis: "1. Tavuk suyunu kaynatın ve tavuk göğsünü ekleyip haşlayın.<br>2. Soğanı doğrayın ve tavuk suyuna ekleyin.<br>3. Tel şehriyeyi ekleyip karıştırın.<br>4. Doğranmış havuçları da ekleyip çorba kaynamaya başlayana kadar pişirin.",
            resim: "images/tavuk-suyu-corba.jpg"
        },
    "Sebze Çorbası": {
            malzemeler: ["Havuç", "Bezelye", "Kabak", "Soğan", "Patates", "Sarımsak", "Tereyağı", "Et Suyu"],
            yapilis: "1. Soğanı doğrayın ve tereyağında kavurun.<br>2. Doğranmış sebzeleri ekleyip soteleyin.<br>3. Doğranmış patatesi ve sarımsağı ekleyin.<br>4. Üzerine et suyu ekleyip çorba kaynamaya başlayana kadar pişirin.",
            resim: "images/sebze-corba.jpg"
        },
    "Mantar Çorbası": {
            malzemeler: ["Mantar", "Soğan", "Tereyağı", "Un", "Süt", "Et Suyu"],
            yapilis: "1. Mantarları doğrayın ve tereyağında kavurun.<br>2. Doğranmış soğanı ekleyip soteleyin.<br>3. Unu ekleyip karıştırın. Ardından sütü ve et suyunu ekleyin.<br>4. Çorba kaynadıktan sonra tuz ekleyip karıştırın.",
            resim: "images/mantar-corba.jpg"
        },
    "Mısır Çorbası": {
            malzemeler: ["Mısır", "Tavuk Suyu", "Soğan", "Sarımsak", "Tereyağı", "Un", "Süt"],
            yapilis: "1. Soğanı doğrayın ve tereyağında kavurun.<br>2. Doğranmış sarımsakları ekleyin, ardından mısır tanelerini ekleyip soteleyin.<br>3. Unu ekleyip karıştırın. Ardından sütü ve tavuk suyunu ekleyin.<br>4. Çorba kaynadıktan sonra tuz ekleyip karıştırın.",
            resim: "images/misir-corba.jpg"
        },
    "Falafel": {
            malzemeler: ["Nohut", "Soğan", "Sarımsak", "Kişniş", "Kimyon", "Tuz", "Zeytinyağı"],
            yapilis: "1. Nohutları haşlayın ve ezin.<br>2. Soğanı doğrayın ve sarımsakları ezin. Kişniş, kimyon, tuz ekleyin.<br>3. Karışımı yoğurun ve şekil vererek kızgın yağda kızartın.<br>4. Kağıt havlu üzerine alarak fazla yağını süzdürün.",
            resim: "images/falafel.jpg"
        },
    "Sebzeli Makarna": {
            malzemeler: ["Makarna", "Sebzeler (havuç, brokoli, kabak)", "Sarımsak", "Zeytinyağı", "Parmesan peyniri"],
            yapilis: "1. Makarnayı haşlayın.<br>2. Sebzeleri doğrayın ve sarımsakla birlikte zeytinyağında soteleyin.<br>3. Haşlanmış makarnayı sebzelerle karıştırın.<br>4. Üzerine rendelenmiş parmesan peyniri ekleyerek servis yapın.",
            resim: "images/sebzeli-makarna.jpg"
        },
    "Musakka": {
            malzemeler: ["Patlıcan", "Kıyma", "Soğan", "Domates", "Sarımsak", "Biber", "Zeytinyağı", "Baharatlar"],
            yapilis: "1. Patlıcanları dilimleyin ve tuzlu suda bekletin.<br>2. Kıymayı soğan, sarımsak ve baharatlarla kavurun.<br>3. Dilimlenmiş patlıcanları kızartın.<br>4. Patlıcanların üzerine kavrulmuş kıymayı ve dilimlenmiş domatesi ekleyin.<br>5. Önceden ısıtılmış fırında musakka kızarana kadar pişirin.",
            resim: "images/musakka.jpg"
        },
    "İmam Bayıldı": {
            malzemeler: ["Bostan patlıcan", "Soğan", "Domates", "Sarımsak", "Zeytinyağı", "Baharatlar"],
            yapilis: "1. Bostan patlıcanları alacalı dilimleyin.<br>2. Soğanı doğrayın ve zeytinyağında kavurun.<br>3. Doğranmış sarımsakları ekleyin, ardından dilimlenmiş domatesi ekleyip soteleyin.<br>4. Patlıcanların içine hazırladığınız karışımı doldurun.<br>5. Önceden ısıtılmış fırında patlıcanlar yumuşayana kadar pişirin.",
            resim: "images/imam-bayildi.jpg"
        },
    "Hünkar Beğendi": {
            malzemeler: ["Kuzu eti", "Patlıcan", "Un", "Süt", "Tereyağı", "Kaşar peyniri", "Baharatlar"],
            yapilis: "1. Kuzu etini pişirin ve baharatlarla marine edin.<br>2. Patlıcanları közleyin ve kabuklarını soyun.<br>3. Patlıcan püresini hazırlayın.<br>4. Un, süt ve tereyağını karıştırarak beşamel sosu hazırlayın.<br>5. Pişmiş etin üzerine patlıcan püresini ve beşamel sosu ekleyin.<br>6. Rendelenmiş kaşar peyniri serpip fırında kızarana kadar pişirin.",
            resim: "images/hünkar-begendi.jpg"
        }, 
        "Fırında Makarna": {
            malzemeler: ["Makarna", "Kıyma", "Soğan", "Domates", "Sarımsak", "Kaşar peyniri", "Zeytinyağı", "Baharatlar"],
            yapilis: "1. Makarnayı haşlayın.<br>2. Soğanı doğrayın ve zeytinyağında kavurun. Kıymayı ekleyip kavurmaya devam edin.<br>3. Doğranmış domates ve sarımsağı ekleyin. Baharatlarını ekleyip karıştırın.<br>4. Haşlanmış makarnayı kıymalı karışımla harmanlayın. Fırın kabına alın.<br>5. Üzerine rendelenmiş kaşar peyniri serpip, önceden ısıtılmış fırında kızarana kadar pişirin.",
            resim: "images/firinda-makarna.jpg"
        },
        "Biber Dolması": {
            malzemeler: ["Dolmalık Biber", "Dolmalık pirinç", "Kıyma", "Soğan", "Salça", "Zeytinyağı"],
            yapilis: "1. Dolmalık pirinci yıkayın ve kıyma, doğranmış soğan, domates salçası ve baharatlarla karıştırın.<br>2. Biberleri içini boşaltın ve hazırladığınız harçla doldurun.<br>3. Dolmaları bir tencereye veya fırın kabına dizin. Üzerine zeytinyağı gezdirin.<br>4. Önceden ısıtılmış fırında biberler yumuşayana kadar pişirin.",
            resim: "images/biber-dolmasi.jpg"
        },
        "Karnabahar Graten": {
    malzemeler: ["Karnabahar", "Beşamel Sos", "Kaşar Peyniri", "Tuz", "Karabiber"],
    yapilis: "1. Karnabaharları haşlayın.<br>2. Beşamel sosu hazırlayın ve karnabaharları sos ile karıştırın.<br>3. Karışımı fırın kabına alın, üzerine rendelenmiş kaşar peyniri serpin.<br>4. Önceden ısıtılmış fırında graten kızarana kadar pişirin.",
    resim: "images/karnabahar-graten.jpg"
        },
        "Balık Tava": {
    malzemeler: ["Balık Fileto", "Un", "Tuz", "Karabiber", "Limon", "Maydanoz"],
    yapilis: "1. Balık filetolarını una bulayın.<br>2. Tuz ve karabiberle tatlandırın.<br>3. Tavada her iki tarafını da kızartın.<br>4. Limon ve taze maydanoz ile servis yapın.",
    resim: "images/balik-tava.jpg"
         },

        "Yoğurtlu Kabak Salatası  ": {
    malzemeler: ["Kabak", "Yoğurt", "Sarımsak", "Nane", "Zeytinyağı", "Tuz"],
    yapilis: "1. Kabakları rendeleyin ve suyunu sıkın.<br>2. Yoğurt, ezilmiş sarımsak, tuz ve zeytinyağı ile karıştırın.<br>3. Kabakları yoğurt karışımına ekleyin ve nane ile süsleyerek servis yapın.",
    resim: "images/yogurtlu-kabak-salata.jpg"
        },
        "Tavuklu Noodle Çorbası": {
    malzemeler: ["Tavuk Göğsü", "Noodle", "Havuç", "Soğan", "Sarımsak", "Tuz", "Biber"],
    yapilis: "1. Tavuk göğsünü haşlayın ve didikleyin.<br>2. Havuçları ve soğanı doğrayın, sarımsakları ezin.<br>3. Sebzeleri tavada soteleyin, tavuk ekleyin.<br>4. Noodle makarnayı haşlayın ve çorbanın içine ekleyin. Tuz ve biberle tatlandırın.",
    resim: "images/tavuklu-noodle-corba.jpg"
},

"Kumpir": {
    malzemeler: ["Patates", "Tavuk Göğsü", "Mısır", "Bezelye", "Mayonez", "Ketçap"],
    yapilis: "1. Patatesleri haşlayın ve içini çıkartın.<br>2. Tavuk göğsünü küçük parçalara kesin ve kızartın.<br>3. Patates içine tavuk, mısır, bezelye ekleyin.<br>4. Üzerine mayonez ve ketçap sıkarak servis yapın.",
    resim: "images/kumpir.jpg"
},
"Karides Guacamole Tacos": {
    malzemeler: ["Karides", "Guacamole", "Marul", "Domates", "Hardal Sos"],
    yapilis: "1. Karidesleri marine edin ve tavada pişirin.<br>2. Mısır tortillalarını ısıtın ve marullarla doldurun.<br>3. Üzerine guacamole, karides, doğranmış domates ve hardal sos ekleyin.<br>4. Katlayarak taco şeklini verin ve servis yapın.",
    resim: "images/karides.jpg"
},

"Közlenmiş Patlıcan Salatası": {
    malzemeler: ["Patlıcan", "Domates", "Biber", "Sarımsak", "Zeytinyağı", "Tuz", "Sumak"],
    yapilis: "1. Patlıcanları közleyin ve kabuklarını soyun.<br>2. Domatesleri, biberleri ve sarımsakları doğrayın.<br>3. Sebzeleri karıştırın, zeytinyağı, tuz ve sumak ekleyin.<br>4. Servis yapmadan önce bir süre buzdolabında dinlendirin.",
    resim: "images/kozlenmis-patlıcan-salatasi.jpg"
},

"Çikolatalı Cheesecake": {
    malzemeler: ["Bisküvi", "Tereyağı", "Krem Peynir", "Şeker", "Yumurta", "Vanilin Şeker", "Çikolata"],
    yapilis: "1. Bisküvileri rondoda çekin, tereyağı ile karıştırın ve tabana yayın.<br>2. Krem peyniri, şekeri, yumurtayı, vanilin şekeri karıştırın ve<br> bisküvi tabanının üzerine dökün.<br>3. Üzerine eritilmiş çikolatayı ekleyin ve fırında pişirin.<br>4. Soğuduktan sonra dilimleyip servis yapın.",
    resim: "images/cikolatalı-cheesecake.jpg"
},
"Kısır": {
    malzemeler: ["Bulgur", "Salça", "Taze Soğan", "Maydanoz", "Nar Ekşisi", "Zeytinyağı", "Baharatlar"],
    yapilis: "1. Bulguru sıcak su ile ıslatın ve şişmesini bekleyin.<br>2. İnce doğranmış taze soğan, maydanoz ekleyin.<br>3. Domates salçası, nar ekşisi, zeytinyağı ve baharatları ekleyin.<br>4. Karışımı iyice yoğurun ve servis tabağına alarak servis yapın.",
    resim: "images/kisir.jpg"
},

"Kuzu Güveç": {
    malzemeler: ["Kuzu Eti", "Patates", "Havuç", "Soğan", "Domates", "Biber", "Sarımsak", "Tuz", "Karabiber", "Kimyon"],
    yapilis: "1. Kuzu etini doğrayın ve sebzelerle birlikte güveç tenceresine yerleştirin.<br>2. Üzerine tuz, karabiber ve kimyon serpin.<br>3. Domates sosu ekleyin ve kısık ateşte pişirin.<br>4. Servis yapmadan önce taze otlar ile süsleyin.",
    resim: "images/kuzu-guvec.jpg"
},
        
"Tavuk Sote": {
            malzemeler: ["Tavuk göğsü", "Soğan", "Biber", "Mantar", "Sarımsak", "Zeytinyağı", "Soya sosu", "Baharatlar"],
            yapilis: "1. Tavuk göğsünü doğrayın ve zeytinyağında kavurun.<br>2. Doğranmış soğanı ve sarımsağı ekleyin. Ardından biber ve mantarı ekleyip soteleyin.<br>3. Tavuklar pişip suyunu salıp çekene kadar karıştırın.<br>4. Soya sosu ve baharatları ekleyin. Karıştırarak pişirin.",
            resim: "images/tavuk-sote.jpg"
        },

"Pırasa Yemeği": {
        malzemeler: ["Pırasa", "Soğan", "Havuç", "Zeytinyağı", "Et suyu", "Tuz", "Baharatlar"], 
        yapilis: "1. Pırasaları temizleyin ve doğrayın.<br>2. Soğanı doğrayın ve zeytinyağında kavurun. Havuçları ekleyin ve soteleyin.<br>3. Doğranmış pırasayı ekleyin. Et suyu, tuz ve baharatları ekleyip karıştırın.<br>4. Pırasalar yumuşayana kadar pişirin.",
        resim: "images/pirasa-yemegi.jpg"
        },

"Patlıcan Dolması": {
    malzemeler: ["Patlıcan", "Kıyma", "Soğan", "Domates", "Biber", "Sarımsak", "Dolmalık Pirinç", "Tuz", "Karabiber", "Salça", "Zeytinyağı", "Limon"],
    yapilis: "1. Patlıcanları alacalı şekilde soyun ve tuzlu suda bekletin.<br>2. Soğanı ve sarımsağı doğrayın, biberi ve domatesi küp şeklinde kesin.<br>3. Kıymayı sıvı yağ ile kavurun, doğranmış sebzeleri ekleyin ve kavurmaya devam edin.<br>4. Yıkanmış pirinci ekleyin, tuz, karabiber ve domates salçasını ekleyin, karıştırın.<br>5. Patlıcanları doldurun ve tencereye dizin, üzerine dilimlenmiş limon ekleyin.<br>6. Üzerine su ekleyin ve kısık ateşte pişirin.",
    resim: "images/patlican-dolmasi.jpg"
},
"Çoban Salatası": {
    malzemeler: ["Domates", "Salatalık", "Biber", "Kırmızı Biber", "Kırmızı Soğan", "Taze Nane", "Zeytinyağı", "Limon", "Tuz", "Karabiber"],
    yapilis: "1. Domatesleri, salatalıkları, yeşil ve kırmızı biberleri küp şeklinde doğrayın.<br>2. Kırmızı soğanı ince dilimler halinde doğrayın.<br>3. Taze naneyi doğrayın ve sebzelerle karıştırın.<br>4. Zeytinyağı, limon suyu, tuz ve karabiberi ekleyin, karıştırın.<br>5. Salatayı bu sos ile harmanlayın ve servis yapın.",
    resim: "images/coban-salatasi.jpg"
},
"Kereviz Yemeği": {
    malzemeler: ["Kereviz", "Soğan", "Havuç", "Domates", "Sarımsak", "Zeytinyağı", "Tuz", "Karabiber", "Limon"],
    yapilis: "1. Kerevizleri temizleyin, kabuklarını soyun ve dilimleyin.<br>2. Soğanı doğrayın, havuçları rendeleyin ve zeytinyağında kavurun.<br>3. Kavrulan sebzelerin üzerine dilimlenmiş kerevizleri ekleyin.<br>4. Doğranmış sarımsakları, tuz ve karabiberi ekleyin, karıştırın.<br>5. Üzerine dilimlenmiş domatesleri ekleyin ve kısık ateşte pişirin.<br>6. Servis yapmadan önce limon sıkarak servis edin.",
    resim: "images/kereviz-yemegi.jpg"
},
"Ispanak Yemeği": {
    malzemeler: ["Ispanak", "Soğan", "Sarımsak", "Zeytinyağı", "Tuz", "Limon"],
    yapilis: "1. Ispanakları yıkayın ve iri doğrayın.<br>2. Soğanı doğrayın, sarımsakları ezin ve zeytinyağında kavurun.<br>3. Kavrulan soğan ve sarımsakların üzerine doğranmış ıspanakları ekleyin.<br>4. Ispanaklar suyunu salıp çekene kadar kısık ateşte pişirin.<br>5. Tuz ve limon suyu ekleyerek karıştırın ve servis yapın.",
    resim: "images/ispanak-yemegi.jpg"
},
"Nohutlu Bulgur Pilavı": {
    malzemeler: ["Bulgur", "Nohut", "Su", "Tuz", "Sıvı yağ"],
    yapilis: "1. Bulguru yıkayın ve süzün.<br>2. Bir tencerede sıvı yağı kızdırın ve nohutları ekleyip kavurun.<br>3. Nohutların üzerine yıkanmış bulguru ekleyin ve karıştırın.<br>4. Sıcak su, tuz ekleyip karıştırın. Tencerenin kapağını kapatın ve kısık ateşte suyunu çekene kadar pişirin.",
    resim: "images/nohutlu_bulgur_pilavi.jpg"
  },
  "Domatesli Makarna": {
    malzemeler: ["Makarna", "Domates", "Sarımsak", "Zeytinyağı", "Tuz", "Baharatlar"],
    yapilis: "1. Makarnayı tuzlu suda haşlayın.<br>2. Başka bir tavada zeytinyağını kızdırın, doğranmış sarımsakları ekleyip kavurun.<br>3. Doğranmış domatesleri ekleyin ve sosu pişirin.<br>4. Haşlanmış makarnayı sosla karıştırıp servis yapın.",
    resim: "images/domatesli_makarna.jpg"
  },
  "Kremalı Brokoli Çorbası": {
    malzemeler: ["Brokoli", "Soğan", "Sarımsak", "Krema", "Tavuk suyu", "Tuz", "Karabiber"],
    yapilis: "1. Soğanı doğrayın ve sarımsakları ezin. Brokolileri ayıklayın.<br>2. Bir tencerede soğan ve sarımsağı kavurun, brokolileri ekleyin.<br>3. Tavuk suyu, krema, tuz ve karabiber ekleyip kaynamaya bırakın.<br>4. Blender ile çorbayı pürüzsüz hale getirin ve sıcak servis yapın.",
    resim: "images/kremali_brokoli_corba.jpg"
  },
  "Mantarlı Tavuk Sote": {
    malzemeler: ["Tavuk göğsü", "Mantar", "Soğan", "Sarımsak", "Zeytinyağı", "Tuz", "Karabiber", "Baharatlar"],
    yapilis: "1. Tavuk göğsünü doğrayın, mantarları dilimleyin.<br>2. Zeytinyağında tavukları kızartın, sonra mantarları ekleyin.<br>3. Doğranmış soğan ve sarımsağı ekleyin, kavurun.<br>4. Tuz, karabiber ve isteğe bağlı baharatlar ekleyip soteleyin.<br>5. Sıcak servis yapın.",
    resim: "images/mantarli-tavuk-sote.jpg"
  },
  "Patates Püresi": {
    malzemeler: ["Patates", "Süt", "Tereyağı", "Tuz"],
    yapilis: "1. Patatesleri haşlayın ve ezin.<br>2. Süt, tereyağı ve tuz ekleyerek püre haline getirin.",
    resim: "images/patates-puresi.jpg"
  },
  "Patates Salatası": {
    malzemeler: ["Patates", "Yoğurt", "Mayonez", "Tuz", "Hardal", "Turşu"],
    yapilis: "1. Patatesleri haşlayın ve doğrayın.<br>2. Yoğurt, mayonez, tuz ve hardalı karıştırın.<br>3. Patatesleri ekleyin, turşu ile süsleyin.",
    resim: "images/patates-salatasi.jpg"
  },
  "Piyaz": {
    malzemeler: ["Kuru fasulye", "Soğan", "Biber", "Zeytinyağı", "Limon", "Tuz"],
    yapilis: "1. Kuru fasulyeyi haşlayın.<br>2. Soğanı doğrayın, yeşil biberi doğrayın ve karıştırın.<br>3. Zeytinyağı, limon suyu ve tuz ekleyin.",
    resim: "images/piyaz.jpg"
  },
  "Kabak Mücver": {
    malzemeler: ["Kabak", "Yumurta", "Un", "Maydanoz", "Soğan", "Tuz", "Karabiber"],
    yapilis: "1. Kabakları rendeleyin, suyunu sıkın.<br>2. Yumurta, un, ince doğranmış soğan ve maydanozu ekleyip karıştırın.<br>3. Tuz ve karabiber ekleyip kızgın yağda kızartın.",
    resim: "images/kabak-mucver.jpg"
  },
  "Domatesli Bulgur Pilavı": {
    malzemeler: ["Bulgur", "Domates", "Sarımsak", "Zeytinyağı", "Tuz", "Baharatlar"],
    yapilis: "1. Bulguru yıkayın ve süzün.<br>2. Zeytinyağında doğranmış sarımsakları kavurun, rendelenmiş domatesleri ekleyin.<br>3. Bulguru ekleyip karıştırın, su ve baharatları ekleyin.<br>4. Kapaklı bir tencerede suyunu çekene kadar pişirin.",
    resim: "images/sebzeli_bulgur_pilavi.jpg"
  },
  "Tavuklu Brokoli Graten": {
    malzemeler: ["Tavuk göğsü", "Brokoli", "Beşamel sos", "Kaşar peyniri", "Tuz", "Karabiber"],
    yapilis: "1. Tavuk göğsünü haşlayın ve doğrayın.<br>2. Brokolileri haşlayın ve doğrayın.<br>3. Tavuk ve brokolileri fırın kabına yerleştirin.<br>4. Üzerine beşamel sos ve rendelenmiş kaşar peyniri ekleyin.<br>5. Fırında kızarana kadar pişirin.",
    resim: "images/tavuk-brokoli-graten.jpg"
  },
  "İrmik Helvası": {
    malzemeler: ["İrmik", "Şeker", "Süt", "Tereyağı", "Ceviz içi"],
    yapilis: "1. İrmikleri tereyağında kavurun.<br>2. Şekeri ekleyin ve karıştırın.<br>3. Sütü yavaşça ekleyerek karıştırın ve kısık ateşte pişirin.<br>4. Ceviz içi ekleyip karıştırın.",
    resim: "images/irmik-helvasi.jpg"
  },
  "Un Helvası": {
    malzemeler: ["Un", "Şeker", "Su", "Tereyağı", "Ceviz içi"],
    yapilis: "1. Unu tereyağında kavurun.<br>2. Şekeri ekleyin ve karıştırın.<br>3. Suyu yavaşça ekleyerek karıştırın ve kısık ateşte pişirin.<br>4. Ceviz içi ekleyip karıştırın.",
    resim: "images/un-helvasi.jpg"
  },
  "Krep": {
    malzemeler: ["Un", "Yumurta", "Süt", "Tuz", "Şeker", "Tereyağı"],
    yapilis: "1. Unu, yumurtayı, sütü, tuzu ve şekeri karıştırın.<br>2. Tereyağını eritin ve karışıma ekleyin.<br>3. Krep tavasında arkalı önlü pişirin.",
    resim: "images/krep.jpg"
  },
  "Magnolia Puding": {
    malzemeler: ["Süt", "Mısır nişastası", "Yumurta", "Şeker", "Vanilin"],
    yapilis: "1. Sütü kaynatın ve bir kenarda soğumaya bırakın.<br>2. Ayrı bir kapta yumurta, şeker ve mısır nişastasını çırpın.<br>3. Kaynamış sütü yavaşça karışıma ekleyin ve karıştırarak pişirin.<br>4. Vanilini ekleyip puding kıvamına gelene kadar karıştırın.",
    resim: "images/magnolia-puding.jpg"
  },
  "Revani": {
    malzemeler: ["Yumurta", "Şeker", "Yoğurt", "Un", "Limon kabuğu rendesi", "Kabartma tozu", "Şeker şurubu"],
    yapilis: "1. Yumurta ve şekeri çırpın, yoğurdu ekleyin.<br>2. Unu ve kabartma tozunu ekleyip karıştırın.<br>3. Limon kabuğu rendesini ekleyin, yağlanmış tepsiye dökün ve önceden ısıtılmış fırında pişirin.<br>4. Fırından çıkan sıcak revaniye soğuyan şeker şurubunu dökün.",
    resim: "images/revani.jpg"
  },
  "Sade Kek": {
    malzemeler: ["Yumurta", "Şeker", "Un", "Süt", "Tuz", "Vanilin"],
    yapilis: "1. Yumurta ve şekeri çırpın, sütü ekleyin.<br>2. Un, tuz ve vanilini ekleyip karıştırın.<br>3. Yağlanmış kek kalıbına dökün ve önceden ısıtılmış fırında pişirin.",
    resim: "images/sade-kek.jpg"
  },
  "Çikolatalı Kek": {
    malzemeler: ["Yumurta", "Şeker", "Un", "Kakao", "Süt", "Tuz", "Vanilin"],
    yapilis: "1. Yumurta ve şekeri çırpın, sütü ekleyin.<br>2. Un, kakao, tuz ve vanilini ekleyip karıştırın.<br>3. Yağlanmış kek kalıbına dökün ve önceden ısıtılmış fırında pişirin.",
    resim: "images/cikolatali-kek.jpg"
  },
  "Zebra Kek": {
    malzemeler: ["Yumurta", "Şeker", "Un", "Kakao", "Süt", "Tuz", "Vanilin"],
    yapilis: "1. Yumurta ve şekeri çırpın, sütü ekleyin.<br>2. Un, kakao, tuz ve vanilini ekleyip karıştırın.<br>3. Yağlanmış kek kalıbına sırayla beyaz ve kakaolu karışımları dökün.<br>4. Önceden ısıtılmış fırında pişirin.",
    resim: "images/zebra-kek.jpg"
  },
  "Havuçlu Kek": {
    malzemeler: ["Havuç", "Yumurta", "Şeker", "Sıvı yağ", "Un", "Kabartma tozu", "Tarçın", "Vanilin"],
    yapilis: "1. Havuçları rendeleyin.<br>2. Yumurta ve şekeri çırpın, sıvı yağı ekleyin.<br>3. Un, kabartma tozu, tarçın, vanilini ekleyip karıştırın.<br>4. Rendelediğiniz havuçları da ekleyin ve karıştırın.<br>5. Yağlanmış kek kalıbına dökün ve önceden ısıtılmış fırında pişirin.",
    resim: "images/hauclu-kek.jpg"
  },
  "Kadayıf Dolması": {
    malzemeler: ["Kadayıf", "Ceviz içi", "Şeker şurubu"],
    yapilis: "1. Kadayıfları tereyağında kavurun.<br>2. İçine ceviz içi ekleyip karıştırın.<br>3. Şeker şurubunu hazırlayın ve kadayıfın üzerine dökün.",
    resim: "images/kadayif-dolmasi.jpg"
  },
  "Fırın Sütlaç": {
    malzemeler: ["Süt", "Pirinç", "Şeker", "Vanilin", "Tarçın"],
    yapilis: "1. Pirinci süt ile haşlayın.<br>2. Şekeri ve vanilini ekleyip karıştırın.<br>3. Fırın kabına dökün, üzerine tane tarçın ekleyin ve fırında kızarana kadar pişirin.",
    resim: "images/firin-sütlac.jpg"
  },
  "Brownie": {
    malzemeler: ["Çikolata", "Tereyağı", "Yumurta", "Şeker", "Un", "Kakao", "Vanilin", "Tuz"],
    yapilis: "1. Çikolatayı ve tereyağını eritin.<br>2. Yumurta ve şekeri çırpın, erimiş çikolata ve tereyağını ekleyin.<br>3. Un, kakao, vanilin, tuz ekleyip karıştırın.<br>4. Yağlanmış kare bir tepsiye dökün ve önceden ısıtılmış fırında pişirin.",
    resim: "images/brownie.jpg"
  },
  "Nohutlu Humus": {
    malzemeler: ["Nohut", "Tahin", "Sarımsak", "Limon", "Zeytinyağı", "Tuz", "Kimyon"],
    yapilis: "1. Nohutları blender'da püre haline getirin.<br>2. Tahini, ezilmiş sarımsağı, limon suyunu, zeytinyağını, tuzu ve kimyonu ekleyip karıştırın.",
    resim: "images/nohutlu-humus.jpg"
  },
  "Pişi": {
    malzemeler: ["Un", "Su", "Maya", "Şeker", "Tuz", "Sıvı yağ"],
    yapilis: "1. Ilık suya maya ve şeker ekleyip bekletin.<br>2. Un, tuz, sıvı yağ ve mayalı suyu karıştırın.<br>3. Hamurdan parçalar koparıp yağda kızartın.",
    resim: "images/pisi.jpg"
  },
  "Sütlaç": {
    malzemeler: ["Süt", "Pirinç", "Şeker", "Vanilin"],
    yapilis: "1. Pirinci süt ile haşlayın.<br>2. Şekeri ve vanilini ekleyip karıştırın.",
    resim: "images/sütlac.jpg"
  },
  "Muhallebi": {
    malzemeler: ["Süt", "Şeker", "Un", "Mısır nişastası", "Vanilin"],
    yapilis: "1. Süt, şeker, un ve mısır nişastasını karıştırın.<br>2. Karışımı sürekli karıştırarak pişirin.<br>3. Vanilini ekleyip karıştırın.",
    resim: "images/muhallebi.jpg"
  }
            // Diğer tarifler...
        };

   // updateTarifler fonksiyonunu güncelle
   function updateTarifler(malzemeler) {
            var yaziDiv = document.querySelector(".yazi");
            var yemekKutulariDiv = document.querySelector(".yemek-kutulari");
            var yeniIcerik = "";

            // Malzemelerle uyumlu tarifleri filtrele
            var uygunTarifler = Object.keys(tarifler).filter(function (tarifAdi) {
                var tarifMalzemeleri = tarifler[ tarifAdi ].malzemeler;
                return malzemeler.every(function (malzeme) {
                    return tarifMalzemeleri.includes(malzeme);
                });
            });

            // Uygun tarifler varsa ekle, yoksa üzgün mesajını göster
            if (uygunTarifler.length > 0) {
                uygunTarifler.forEach(function (tarifAdi) {
                    yeniIcerik += "<div class='yemek-kutu'>";
                    yeniIcerik += "<img src='" + tarifler[tarifAdi].resim + "' alt='" + tarifAdi + "'>";
                    yeniIcerik += "<h3>" + tarifAdi + "</h3>";
                    yeniIcerik += "<p>" + tarifler[tarifAdi].yapilis + "</p>";
                    yeniIcerik += "</div>";
                });
            } else {
                yeniIcerik = "<p>Üzgünüz, seçtiğiniz malzemelere uygun tarif bulunamadı:(</p>";
            }

            // Yazi div'inin içeriğini güncelle
            yaziDiv.innerHTML = yeniIcerik;

            // "yazi" div'ini görünür yap veya gizle
            yaziDiv.style.display = "block";
        }

        // Malzemeleri kaydetme fonksiyonu
        function saveMalzemeler(malzemeler) {
            // Malzemeleri gerektiğinde kullanmak üzere kaydedebilirsiniz
        }
</script>
</body>
</html>