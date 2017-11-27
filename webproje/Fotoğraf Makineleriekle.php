<?php
include "adminpanel.php";
include "baglanti.php";
?>
<style>


    input[type=submit] {
        width: 20%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }



</style>
<html>
<head>

</head>
<body>
<center>
    <form method="post" action="Fotoğraf%20Makineleriekle.php">
        Markası:<br>
        <input type="text" name="marka"><br>
        Modeli :<br>
        <input type="text" name="model"><br>
        Fiyatı :<br>
        <input type="number" name="fiyat" ><br>
        Maksimum ISO : <br>
        <input type="number"  name="max_iso"><br>
        Minimum ISO:<br>
        <input type="number" name="min_iso"><br>
        Maksimum Odak:<br>
        <input type="number" name="max_odak"><br>
        Minimum Odak:<br>
        <input type="number" name="min_odak"><br>
        Enstantane :<br>
        <input type="number" name="enstantane"><br>
        Minimum Diyafram Açıklığı:<br>
        <input type="text" name="min_diyafram"><br>
        Maksimum Diyafram Açıklığı: <br>
        <input type="number" name="max_diyafram"><br>
        Video Çözünürlüğü:<br>
        <select name="video_cozunurlugu">
            <option value="5.7K">5.7K</option>
            <option value="5.2K">5.2K</option>
            <option value="4K">4K</option>
            <option value="2K">2K</option>
            <option value="ULTRA HD">ULTRA HD</option>
            <option value="FULL HD">FULL HD</option>
            <option value="HD">HD</option>
            <option value="VGA">VGA</option>

        </select><br>
        Dijital Zoom:<br>
        <input type="number" name="digital_zoom"><br>
        <input type="submit" value="EKLE" name="submit">
    </form>
</center>
</body>
</html>

<?php if(isset($_POST['submit'])){
    $marka=$_POST['marka'];
    $model=$_POST['model'];
    $fiyat=$_POST['fiyat'];
    $max_iso=$_POST['max_iso'];
    $min_iso=$_POST['min_iso'];
    $min_odak=$_POST['min_odak'];
    $max_odak=$_POST['max_odak'];
    $enstantane=$_POST['enstantane'];
    $min_diyafram=$_POST['min_diyafram'];
    $max_diyafram=$_POST['max_diyafram'];
    $video_cozunurlugu=$_POST['video_cozunurlugu'];
    $digital_zoom=$_POST['digital_zoom'];


    $ekle=$baglanti->exec("INSERT INTO `fotograf makineleri` (`id`, `marka`, `model`, `fiyat`, `max_iso`, `min_iso`, `min_odak`, `max_odak`, `enstantane`, `min_diyafram`, `max_diyafram`, `video_cozunurlugu`, `digital_zoom`, `foto_url` ) VALUES (NULL, '$marka', '$model', '$fiyat', '$max_iso', '$min_iso', '$min_odak', '$max_odak', '$enstantane', '$min_diyafram', '$max_diyafram', '$video_cozunurlugu', '$digital_zoom', '');");
}
if($ekle)
    echo "başarıyla eklendi";



?>
