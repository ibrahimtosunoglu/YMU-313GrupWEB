<?php
$db = new PDO("mysql:host=localhost;dbname=web3;charset=utf8", "root", "");


if($_POST)
{
    $nick =$_POST["nick"];
    $sifre =$_POST["sifre"];
    $query  = $db->query("SELECT * FROM admins WHERE nick='$nick' && sifre='$sifre'",PDO::FETCH_ASSOC);
    if ( $say = $query -> rowCount() ){
        if( $say > 0 ){
            session_start();
            $_SESSION['admin']=true;
            $_SESSION['name']=$nick;
            $_SESSION['pass']=$sifre;
            header("Location:adminpanel.php");
            echo "oturum başarıyla açıldı";

        }else{
            echo "oturum açılmadı hata";
        }
    }
}
        ?>