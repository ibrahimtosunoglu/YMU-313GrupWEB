<?php include 'baglanti.php';?>
<?php

session_start();

if (isset($_POST["esifre"])) {

    $kadi=$_SESSION['kadi'];
    $esifre = $_POST['esifre'];//Boşlukları ve HTML taglerini temizliyoruz
    $ysifre = $_POST['ysifre'];
    $tsifre = $_POST['tsifre'];
    $sorgu2 = $baglanti->query("select kullaniciAdi from uyeler where sifre ='$esifre'",PDO::FETCH_ASSOC);

    $sorgu = $baglanti->query("select * from uyeler where sifre ='$esifre'",PDO::FETCH_ASSOC);

    if(!$sorgu->rowCount()){
        echo "<center><span style=\"color:Red\"><td>Şifre Yanlış</td></span></center>";

    }
    else if ($ysifre <> $tsifre) {
        echo "<center><span style=\"color:Red\"><td>Şifreler Eşleşmedi</td></span></center>";
    } else  {
        $baglanti->query("update uyeler SET sifre = '$ysifre' where kullaniciAdi = '$kadi'");
        echo "<center><span style=\"color:Red\"><td>Şifre Başarıyla Değiştirildi</td></span></center>";
    }


}
?>