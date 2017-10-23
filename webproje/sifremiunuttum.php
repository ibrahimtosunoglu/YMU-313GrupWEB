
<div style="width:750px; background:#f1f1f1; border:1px solid #ddd; border-radius:10px; margin:10px auto; padding:15px;">

    <form action="" method="POST" align="center">
        <div>
            <br />
            Kullanıcı Adınız : <input type="text" name="kadi" />
        </div>
        <div>
            <br/>
            Eposta Adresiniz : <input type="text" name="email" />
        </div>
        <br />
        <input type="submit" value="Yeni Şifre Gönder" name="ara" />
    </form>

    <?php
    include "baglanti.php";

    if(isset($_POST["kadi"])) {

        $kadi = $_POST["kadi"];
        $email = $_POST["email"];


        if(!$kadi || !$email){
            echo "Kullanıcı Adı/E-posta Boş Olamaz";
        }
        else {
            $sorgu = $baglanti->query("select * from uyeler where kullaniciAdi = '$kadi' && email='$email'",PDO::FETCH_ASSOC);

            if($sorgu->rowCount()){
               header("Location:sifretalep.php?kadi=$kadi");
            }
            elseif(!$sorgu->rowCount()){
                echo "Böyle Bir Kullanici Yok !!";
            }
        }
    }

    ?>

