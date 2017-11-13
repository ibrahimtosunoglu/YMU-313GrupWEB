<?php include "baglanti.php"; ?>
<?php include "baslik.php"; ?>

<!DOCTYPE html>
<html>
<title>BİLGİSAYAR EKLE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="" method="POST">
    <table align="center">
        </br>
        </br>
        </br>
        <tr>
            <td>MARKA ADI :</td>
            <td>:</td>
            <td><input type="text" name="markaadi"></td>
        </tr>
        <tr>
            <td>MODEL NO</td>
            <td>:</td>
            <td><input type="text" name="modelno"></td>
        </tr>
        <tr>
            <td>RAM YUVA :</td>
            <td>:</td>
            <td>
                <select name="ramyuva">
                    <option value="">seçiniz</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>RAM HIZI :</td>
            <td>:</td>
            <td>
                <select name="ramhiz">
                    <option value="">seçiniz</option>
                    <option value="2133">2133</option>
                    <option value="2400">2400</option>
                    <option value="2600">2600</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>RAM :</td>
            <td>:</td>
            <td>
                <select name="ram">
                    <option value="">seçiniz</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="16">16</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>CİHAZ AĞIRLIK :</td>
            <td>:</td>
            <td><input type="text" name="agirlik"></td>
        </tr>
        <tr>
            <td>EKRANBOYUT :</td>
            <td>:</td>
            <td>
                <select name="ekranboyut">
                    <option value="">seçiniz</option>
                    <option value="15">15"</option>
                    <option value="17">17"</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>EKRANKARTI TİPİ :</td>
            <td>:</td>
            <td>
                <select name="ekrankartitipi">
                    <option value="">seçiniz</option>
                    <option value="GDDR5">GDDR5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>EKRANKARTI HAFIZA :</td>
            <td>:</td>
            <td>
                <select name="ekrankartihafiza">
                    <option value="">seçiniz</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>EKRAN KARTI :</td>
            <td>:</td>
            <td>
                <select name="ekrankarti">
                    <option value="">seçiniz</option>
                    <option value="NVIDA GTX 950">NVIDA GTX 950</option>
                    <option value="NVIDA GTX 970">NVIDA GTX 970</option>
                    <option value="NVIDA GTX 980">NVIDA GTX 980</option>
                    <option value="NVIDA GTX 1050">NVIDA GTX 1050</option>
                    <option value="NVIDA GTX 1050 Ti">NVIDA GTX 1050 Ti</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>EKRAN ÖZELLİK :</td>
            <td>:</td>
            <td>
                <select name="ekranozellik">
                    <option value="">seçiniz</option>
                    <option value="Full HD LED">FULL HD LED</option>
                    <option value="TN PANEL">TN PANEL</option>
                    <option value="IPS">IPS</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>HDD KAPASİTE</td>
            <td>:</td>
            <td>
                <select name="hddkapasite">
                    <option value="">seçiniz</option>
                    <option value="120">120 GB</option>
                    <option value="320">320 GB</option>
                    <option value="500">500 GB</option>
                    <option value="750">750 GB</option>
                    <option value="1">1 TB</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>HDD HIZ :</td>
            <td>:</td>
            <td>
                <select name="hddhiz">
                    <option value="">seçiniz</option>
                    <option value="5400">5400</option>
                    <option value="5600">5600</option>
                    <option value="7200">7200</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>İSLEMCİ ÖN BELLEK</td>
            <td>:</td>
            <td><input type="text" name="islemcicache"></td>
        </tr>
        <tr>
            <td>İŞLEMCİ HIZ :</td>
            <td>:</td>
            <td><input type="text" name="islemcihiz"></td>
        </tr>
        <tr>
            <td>İSLEMCİ TİPİ</td>
            <td>:</td>
            <td>
                <select name="islemcitip">
                    <option value="">seçiniz</option>
                    <option value="Intel Core i3">Intel Core i3</option>
                    <option value="Intel Core i5">Intel Core i5</option>
                    <option value="Intel Core i7">Intel Core i7</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>EKRAN ÇÖZÜNÜRLÜĞÜ :</td>
            <td>:</td>
            <td>
                <select name="ekrancozunurluk">
                    <option value="">seçiniz</option>
                    <option value="1280*720">1280*720</option>
                    <option value="1920*1080">1920*1080</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>RAM TİPİ</td>
            <td>:</td>
            <td>
                <select name="ramtipi">
                    <option value="">seçiniz</option>
                    <option value="DDR3">DDR3</option>
                    <option value="DDR4">DDR4</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>SSD KAPASİTE :</td>
            <td>:</td>
            <td>
                <select name="ssdkapasite">
                    <option value="">seçiniz</option>
                    <option value="128">128 GB</option>
                    <option value="240">240 GB</option>
                    <option value="256">256 GB</option>
                    <option value="500">500 GB</option>
                    <option value="1000">1 TB</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>USB :</td>
            <td>:</td>
            <td>
                <select name="usb">
                    <option value="">seçiniz</option>
                    <option value="3 x USB 3.0">3 x USB 3.0</option>
                    <option value="2 x USB 3.0">2 x USB 3.0</option>
                    <option value="1 x USB 3.0">1 x USB 3.0</option>
                    <option value="USB 2.0">USB 2.0</option>
                </select>
            </td>
        </tr>
        <tr>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="EKLE"></td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>


    <?php

  if(isset($_POST["markaadi"])) {
        $markaadi = $_POST["markaadi"];
        $modelno = $_POST["modelno"];
        $ramyuva = $_POST["ramyuva"];
        $ramhiz = $_POST["ramhiz"];
        $ram = $_POST["ram"];
        $agirlik = $_POST["agirlik"];
        $ekranboyut = $_POST["ekranboyut"];
        $ekrankartitipi = $_POST["ekrankartitipi"];
        $ekrankartihafiza = $_POST["ekrankartihafiza"];
        $ekrankarti = $_POST["ekrankarti"];
        $ekranozellik = $_POST["ekranozellik"];
        $hddkapasite = $_POST["hddkapasite"];
        $hddhiz = $_POST["hddhiz"];
        $islemcicache = $_POST["islemcicache"];
        $islemcihiz = $_POST["islemcihiz"];
        $islemcitip = $_POST["islemcitip"];
        $ekrancozunurluk = $_POST["ekrancozunurluk"];
        $ramtipi = $_POST["ramtipi"];
        $ssdkapasite = $_POST["ssdkapasite"];
        $usb = $_POST["usb"];

        if (!$markaadi || !$modelno || !$ramyuva || !$ramhiz || !$ram || !$agirlik || !$ekranboyut || !$ekrankartitipi || !$ekrankartihafiza || !$ekrankarti || !$ekranozellik || !$hddkapasite || !$hddhiz || !$islemcicache || !$islemcihiz || !$islemcitip || !$ekrancozunurluk || !$ramtipi || !$ssdkapasite || !$usb) {
           echo "BOŞ ALAN BIRAKMAYINIZ ";
        } else {
           // if(  ($baglanti->query("SELECT markaadi FROM bilgisayar")==$markaadi ) && ($baglanti->query("SELECT modelno FROM bilgisayar")==$modelno) ) {

             //   echo "Bu model zaten kayıtlı";

           // }
            $ekle=$baglanti->query("INSERT INTO bilgisayar(markaadi,modelno,ramyuva,ramhizi,ram,cihazagirlik,ekranboyut,ekrankartitipi,ekrankartihafiza,ekrankarti,ekranozellik,hddkapasite,hddhiz,islemcicache,islemcihiz,islemcitip,ekrancozunurluk,ramtipi,ssdkapasite,usb) VALUES('$markaadi','$modelno','$ramyuva','$ramhiz','$ram','$agirlik','$ekranboyut','$ekrankartitipi','$ekrankartihafiza','$ekrankarti','$ekranozellik','$hddkapasite','$hddhiz','$islemcicache','$islemcihiz','$islemcitip','$ekrancozunurluk','$ramtipi','$ssdkapasite','$usb')", PDO::FETCH_ASSOC);
            if($ekle){
                echo "BAŞARIYLA EKLENDİ";
            }
            else{
                echo "eklenmedi";
            }
        }
    }

    ?>