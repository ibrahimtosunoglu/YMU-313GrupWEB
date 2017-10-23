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
