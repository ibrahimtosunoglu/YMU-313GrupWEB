<?php
include "baglanti.php";
include "adminpanel.php";?>
<style>


    input[type=submit] {
        width: 20%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }



</style>
<html>
<head>

</head>
<body>
<center>
    <form method="post" action="telefoneklemeislemi.php">
        Markası:<br>
        <input type="text" name="marka"><br>
        Modeli :<br>
        <input type="text" name="model"><br>
        Fiyatı :<br>
        <input type="number" name="fiyat" ><br>
        Ekran Boyutu : (Örnek: 5.7 ise 57 giriniz.)<br>
        <input type="number" step="0.1" name="ekran_boyutu"><br>
        Kamera Çözünürlüğü:<br>
        <input type="number" name="kamera_cozunurlugu"><br>
        RAM:<br>
        <input type="number" name="ram"><br>
        İşlemci Hızı:<br>
        <input type="number" step="0.01" name="islemci_hizi"><br>
        İşletim Sistemi:<br>
        <input type="text" name="isletim_sistemi"><br>
        Hafıza (GB):<br>
        <input type="number" name="hafiza"><br>
        Ön Kamera:<br>
        <input type="number" name="on_kamera"><br>
        Hafıza Kartı Desteği: (Yoksa 0 giriniz)<br>
        <input type="number" name="hafiza_destegi"><br>
        Wi-Fi:<br>
        <select name="wifi_hiz">
            <option value="1">802.11 a/b/g/n/ac</option>
            <option value="2">802.11 b/g/n</option>
            <option value="3">802.11 a/b/g/n</option>
            <option value="4">802.11 b/g</option>
            <option value="5">Yok</option>
        </select><br>
        Mobil Bağlantı:<br>
        <select name="mobil_hiz">
            <option value="1">4.5G</option>
            <option value="2">3G HSDPA</option>
            <option value="3">3G</option>
            <option value="4">4G</option>
            <option value="5">2G</option>
            <option value="6">UMTS</option>
        </select><br>
        GPS:
        <input type="radio" name="gps" value="1">Var
        <input type="radio" name="gps" value="0">Yok<br>
        Yüklenecek Fotoğrafı Seçiniz:</br>
        <input type="file" name="foto" id="foto"></br>
        <input type="submit" value="EKLE" name="submit">
    </form>
</center>
</body>
</html>
