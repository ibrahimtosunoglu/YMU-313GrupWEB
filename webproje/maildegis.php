<?php include 'baglanti.php';?>
<?php

session_start();

if (isset($_POST["email"])) {

    $kadi=$_SESSION['kadi'];
    $email = $_POST['email'];//Boşlukları ve HTML taglerini temizliyoruz
    $ymail = $_POST['ymail'];
    $tmail = $_POST['tmail'];
    $sorgu2 = $baglanti->query("select kullaniciAdi from uyeler where email ='$email'",PDO::FETCH_ASSOC);
    $kontrol = $baglanti->prepare("SELECT * FROM uyeler WHERE email=?");//E-Posta ile daha önce kayıt olunmuşmu?
    $kontrol->execute(array($ymail));
    $sorgu = $baglanti->query("select * from uyeler where email ='$email'",PDO::FETCH_ASSOC);
    if (empty($email) || empty($ymail) || empty($tmail) ) {//İnputların kontrolü
        echo"<center><span style=\"color:Red\"><td>Boş Alan Bırakmayın</td></span></center>";
    }else{
        if(filter_var($ymail, FILTER_VALIDATE_EMAIL)){// Geçerli E-Posta adresimi?

        if($kontrol->rowCount()){
            echo "<center><span style=\"color:Red\"><td>Kayıt Olmaya Çalıştığınız E-Posta Sistemde Kayıtlı</td></span></center>";
        }
        else if(!$sorgu->rowCount()){
            echo "<center><span style=\"color:Red\"><td>Mail Adresiniz Yanlış</td></span></center>";
        }
        else if ($ymail <> $tmail) {
            echo "<center><span style=\"color:Red\"><td>Mail Adresleri Eşleşmedi</td></span></center>";
        }
        else{
            $baglanti->query("update uyeler SET email = '$ymail' where kullaniciAdi = '$kadi'");
            echo "<center><span style=\"color:Red\"><td>Mail Adresiniz Başarıyla Değiştirildi</td></span></center>";
        }
        }
        else  {
                echo "Geçerli E-Posta Adresi Girin !";
        }

    }

}
?>