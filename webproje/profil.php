<?php include 'baglanti.php';
session_start();

if(isset($_SESSION["login"])&& $_SESSION["login"] ){
?>

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
        echo "<a href=\"uyekayit.php\">Kayıt Ol</a>";
    }?>
</div>



<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-large w3-light-grey" style="width:20%">
    <a href="uyebilgiler.php" class="w3-bar-item w3-button w3-padding-16">Kişisel Bilgiler</a>
    <a href="sifremailekran.php" class="w3-bar-item w3-button w3-padding-16">Şifre-Mail Değişikliği</a>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>
</body>
</html>
<?php
}
?>