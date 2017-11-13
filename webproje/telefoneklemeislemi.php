<?php
include "baglanti.php";
if(isset($_FILES['dosya'])){
    $hata = $_FILES['dosya']['error'];
    if($hata != 0) {
        echo 'Yüklenirken bir hata gerçekleşmiş.';
    } else {
        $marka=$_POST['marka'];
        $model=$_POST['model'];
        $fiyat=$_POST['fiyat'];
        $ekran_boyutu=$_POST['ekran_boyutu'];
        $kamera_cozunurlugu=$_POST['kamera_cozunurlugu'];
        $ram=$_POST['ram'];
        $islemci_hizi=$_POST['islemci_hizi'];
        $isletim_sistemi=$_POST['isletim_sistemi'];
        $hafiza=$_POST['hafiza'];
        $on_kamera=$_POST['on_kamera'];
        $hafiza_destegi=$_POST['hafiza_destegi'];
        if($_POST['wifi_hiz']==1) $wifi_hiz="802.11 a/b/g/n/ac";
        elseif ($_POST['wifi_hiz']==2) $wifi_hiz="802.11 b/g/n";
        elseif ($_POST['wifi_hiz']==3) $wifi_hiz="802.11 a/b/g/n";
        elseif ($_POST['wifi_hiz']==4) $wifi_hiz="802.11 b/g";
        elseif ($_POST['wifi_hiz']==5) $wifi_hiz="Yok";
        $gps=$_POST['gps'];
        if($_POST['mobil_hiz']==1) $mobil_hiz="4.5G";
        elseif ($_POST['mobil_hiz']==2) $mobil_hiz="3G HSDPA";
        elseif ($_POST['mobil_hiz']==3) $mobil_hiz="3G";
        elseif ($_POST['mobil_hiz']==4) $mobil_hiz="4G";
        elseif ($_POST['mobil_hiz']==5) $mobil_hiz="2G";
        elseif ($_POST['mobil_hiz']==6) $mobil_hiz="UMTS";
        $_FILES['dosya']['name']=$_POST["model"].".jpg";
        $tip = $_FILES['dosya']['type'];
        $isim = $_FILES['dosya']['name'];
        $uzanti = explode('.', $isim);
        $uzanti = $uzanti[count($uzanti)-1];
        if($tip != 'image/jpeg' || $uzanti != 'jpg') {
            echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
        } else {
            if(file_exists("fotolar/telefonlar/$isim")) unlink("fotolar/telefonlar/$isim");
            $dosya = $_FILES['dosya']['tmp_name'];
            copy($dosya, 'slider/' . $_FILES['dosya']['name']);
            $baglanti->exec('INSERT INTO `telefonlar` VALUES (\''.$marka.','.$model.','.$fiyat.','.$ekran_boyutu.',,'.$kamera_cozunurlugu.','.$ram.','.$islemci_hizi.','.$isletim_sistemi.','.$hafiza.','.$on_kamera.','.$hafiza_destegi.','.$wifi_hiz.','.$mobil_hiz.','.$gps.',fotolar/telefonlar/'.$isim.'\')');
            echo 'Dosyanız upload edildi!';
        }

    }
}?>