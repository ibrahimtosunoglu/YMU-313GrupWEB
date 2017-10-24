<!DOCTYPE html>
<?php @include "baglanti.php";
session_start();?>
<html>
<title>ANASAYFA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>.topnav {
        background-color: #35af9b;
        overflow: hidden;
    }
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .topnav a:hover {
        background-color: #ddd;
        color:#35af9b;
    }
    .topnav a.active {
        background-color: #35af9b;
        color: white;
    }</style>
<body>
<div class="topnav" id="myTopnav">
    <a href="index.php">Anasayfa</a>
    <a onclick="w3_open()">Kategoriler</a>
    <a href="iletisim.php">İletişim</a>
    <a href="canli.php">Canlı Sohbet</a>
    <?php if(isset($_SESSION["login"])&& $_SESSION["login"] ){
        echo "<a href=\"profil.php\">Profilim</a>";
        echo "<a href=\"uyecikis.php\">Çıkış Yap</a>";
    }
    else{
        echo "<a href=\"userlogin.php\">Giriş Yap</a>";
    }?>
</div>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Kapat &times;</button>

    <?php $query=$baglanti->query('SELECT adi FROM kategoriler');
    foreach( $query as $row ){
        echo "<a href=\"".$row["adi"].".php\" class=\"w3-bar-item w3-button\">".$row['adi']."</a>";
    }?>

</div>

<!-- Page Content -->
<div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
        <img src="logo.fw.png" alt="Car" style="width:5%"> <font face="arial" size="20" color="white">
            <b>alternatifim.con</b></font>
    </div>
</div>


<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>

</body>
</html>

<?php
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