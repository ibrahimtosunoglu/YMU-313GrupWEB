<?php

$host   ="localhost";
$dbname ="web3";

try{

    $db =new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","root","");

}catch (PDOException $mesaj) {
    echo $mesaj->getMessage();
}

?>