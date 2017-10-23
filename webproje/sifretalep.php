<div style="width:750px; background:#f1f1f1; border:1px solid #ddd; border-radius:10px; margin:10px auto; padding:15px;">

    <form action="" method="POST" align="center">
                <br />
                Gizli Yanıt : <input type="text" name="gizliyanit"/>
                <br/>
                <br/>
                Yeni Şifre : <input type="password" name="yenisifre"/>
                <input type="submit" value="Gönder" name="ara" />
    </form>

    <?php

    include "baglanti.php";

    $kadi=$_GET["kadi"];

    if(isset($_POST["yenisifre"]) && isset($_POST["gizliyanit"])){
        $yenisifre=$_POST["yenisifre"];
        $gizliyanit=$_POST["gizliyanit"];

        if(!$yenisifre|| !$gizliyanit ){
            echo "Gizli Yanıt/YeniŞifre Boş Olamaz";
        }else {

            $degisen = $baglanti->query("SELECT gizliyanit FROM uyeler WHERE kullaniciAdi='$kadi'");

            if ($degisen->rowCount()) {
                foreach ($degisen as $row) {
                    $gizli=$row['gizliyanit'];
                }
            }

            if ($gizli == $gizliyanit) {
                $baglanti->query("UPDATE uyeler SET sifre ='$yenisifre' WHERE kullaniciAdi='$kadi'");
                echo "Şifre Değişikliği Tamamlandı..";
            } else echo "Bir Hata oluştu";

        }
    }

    ?>
