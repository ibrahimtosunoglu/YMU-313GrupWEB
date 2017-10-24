<?php
    session_start();
    include "baglanti.php";
?>

<form action="" method="POST">
    <table align="center">
        <tr>
            <td>Kullanici Adi</td>
            <td>:</td>
            <td><input type="text" name="kadi"></td>
        </tr>
        <tr>
            <td>Sifre</td>
            <td>:</td>
            <td><input type="password" name="ksifre"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Giris"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="checkbox" name="hatirla"/>Beni Hatırla</br/></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo "<a href=\"?baslik=sunuttum\"class=\"w3-button w3-bar-item\">Şifrenimi Unuttun ? </a>";?></td>
        </tr>
    </table>


<?php

if(isset($_GET["baslik"])){
    $baslik   = $_GET["baslik"];
    if($baslik=="sunuttum"){
        header("Location:sifremiunuttum.php");
    }
}

if(isset($_POST["kadi"])) {

    $kadi = $_POST["kadi"];
    $ksifre = $_POST["ksifre"];

    if(!$kadi || !$ksifre){
        echo "Kullanıcı Adı/Şifre Boş Olamaz";
    }
    else {
        $sorgu = $baglanti->query("select * from uyeler where kullaniciAdi = '$kadi' && sifre='$ksifre'",PDO::FETCH_ASSOC);

        if($sorgu->rowCount()){
            $_SESSION["login"]=true;
            header("Location:index.php");
        }
        elseif(!$sorgu->rowCount()){
            echo "Kullanıcı Adı/Şifre Yanlış";
        }
    }
}

?>