<?php
    session_start();
    include "baglanti.php";
?>

<form action="userlogin.php" method="POST">
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
    </table>
</form>

<?php

if(isset($_POST["kadi"])) {

    $kadi = $_POST["kadi"];
    $ksifre = $_POST["ksifre"];

    if(!$kadi || !$ksifre){
        echo "Kullanıcı Adı/Şifre Boş Olamaz";
    }
    else {
        $sorgu = $db->query("select * from userlogin where kadi = '$kadi' && ksifre='$ksifre'",PDO::FETCH_ASSOC);

        if($sorgu->rowCount()){
            $_SESSION["login"]=true;
            header("Location:userlogin.php");
        }
        elseif(!$sorgu->rowCount()){
            echo "Kullanıcı Adı/Şifre Yanlış";
        }
    }
}

?>