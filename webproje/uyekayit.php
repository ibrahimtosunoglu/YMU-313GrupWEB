<?php include 'baglanti.php';
session_start();
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
            <b>alternatifim.com</b></font>
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


<div class="kayit-form">
    <div class="row" style="height: 400px;">
        <div class="col-sm-4 content">
        </div>
        <div class="col-sm-4 content">
            <p><br><br><br>
            <form action='' method='post' accept-charset='UTF-8'>
                <label>Üye Kayıt Formu</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Üye Ad"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="E-Posta"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Şifre"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Kayıt Ol">
                </div>
            </form>
            </p>
        </div>
        <div class="col-sm-4 content">
        </div>
    </div>
</div>

</body>
</html>


<?php


if(isset($_SESSION['kadi'])) {
    header("Location: index.php");
}
if ($_POST) {
    $kuladi = trim(strip_tags($_POST['username']));//Boşlukları ve HTML taglerini temizliyoruz
    $email  = trim(strip_tags($_POST['email']));
    $sifre  = trim(strip_tags($_POST['password']));

    if (empty($kuladi) || empty($email) || empty($sifre) ) {//İnputların kontrolü
        echo"<center><span style=\"color:Red\"><td>Boş Alan Bırakmayın</td></span></center>";
    }else{
        $kontrol = $baglanti->prepare("SELECT * FROM uyeler WHERE email=?");//E-Posta ile daha önce kayıt olunmuşmu?
        $kontrol->execute(array($email));
        if($kontrol->rowCount()){
            echo "<center><span style=\"color:Red\"><td>Kayıt Olmaya Çalıştığınız E-Posta Sistemde Kayıtlı</td></span></center>";
        }
        $kontrol2 = $baglanti->prepare("SELECT * FROM uyeler WHERE kullaniciAdi=?");//E-Posta ile daha önce kayıt olunmuşmu?
        $kontrol2->execute(array($kuladi));
        if($kontrol2->rowCount()){
            echo "<center><span style=\"color:Red\"><td>Kayıt Olmaya Çalıştığınız İsim Sistemde Kayıtlı</td></span></center>";
        }
        else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){// Geçerli E-Posta adresimi?
                $uyekayit = $baglanti->prepare("INSERT INTO uyeler SET kullaniciAdi=?, email=?, sifre=?");
                $uyekayit->execute(array($kuladi,$email,$sifre));
                if($uyekayit->rowCount()){
                    echo "<center><span style=\"color:Red\"><td>Başarıyla Kayıt Oldunuz</td></span></center>";
                    //Burada login.php sayfasına yönlendirme yapıyoruz.
                    echo' <script> window.location.replace("http://localhost/webproje/userlogin.php")</script>';
                }else{
                    echo "<center><span style=\"color:Red\"><td>Hata Oluştu</td></span></center>";
                }
            }else{
                echo "<center><span style=\"color:Red\"><td>Geçerli E-Posta Adresi Girin</td></span></center>";
            }
        }
    }
}
?>
