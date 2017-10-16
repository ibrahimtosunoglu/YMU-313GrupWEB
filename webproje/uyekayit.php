<?php include 'baglanti.php';?>
<div class="kayit-form">
    <form action="" method="post">
        <label>Üye Kayıt Formu</label>
        <input type="text" name="username" placeholder="Üye Ad"/>
        <input type="text" name="email" placeholder="E-Posta"/>
        <input type="password" name="password" placeholder="Şifre"/>
        <button type="submit">Kayıt Ol</button>
    </form>
</div>

<style>
    .kayit-form{
        margin:40px 20px 0;
    }
    .kayit-form input{
        width:220px;
        height:30px;
        clear:both;
        float:left;
        margin:0 10px 16px 20px;
    }
    .kayit-form button{
        width:80px;
        height:30px;
        float: left;
        margin:0 10px 16px 20px;
        clear:both;
    }
    .kayit-form label{
        font-size: 20px;
        float: left;
        margin:0 0 10px 60px;
    }



</style>

<?php
if ($_POST) {
    $kuladi = trim(strip_tags($_POST['username']));//Boşlukları ve HTML taglerini temizliyoruz
    $email  = trim(strip_tags($_POST['email']));
    $sifre  = trim(strip_tags($_POST['password']));

    if (empty($kuladi) || empty($email) || empty($sifre) ) {//İnputların kontrolü
        echo"Boş Alan Bırakmayın !";
    }else{
        $kontrol = $baglanti->prepare("SELECT * FROM uyeler WHERE email=?");//E-Posta ile daha önce kayıt olunmuşmu?
        $kontrol->execute(array($email));
        if($kontrol->rowCount()){
            echo "Kayıt Olmaya Çalıştığınız E-Posta Sistemde Kayıtlı !";
        }else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){// Geçerli E-Posta adresimi?
                $uyekayit = $baglanti->prepare("INSERT INTO uyeler SET kullaniciAdi=?, email=?, sifre=?");
                $uyekayit->execute(array($kuladi,$email,$sifre));
                if($uyekayit->rowCount()){
                    echo "Başarıyla Kayıt Oldunuz !";
                    //Burada login.php sayfasına yönlendirme yapıyoruz.
                    echo' <script> window.location.replace("http://localhost/webproje/userlogin.php/")</script>';
                }else{
                    echo"Hata Oluştu !";
                }
            }else{
                echo "Geçerli E-Posta Adresi Girin !";
            }
        }
    }
}
?>
