<?php include "baglanti.php"; ?>

<!DOCTYPE html>
<html>
<title>BİLGİSAYAR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
    <div class="w3-row-padding">
        <div class="w3-third">

            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                        <img src="fotolar/bilgisayarresim/1.jpg" style="width:50%">
                    <br>
                    <br>
                     <div class="w3-display-bottomleft w3-container w3-text-black">
                        <h2>
                                <?php $query=$baglanti->query('SELECT markaadi FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['markaadi']."</a>";
                                } ?>
                        </h2>
                    </div>
                </div>
                <div class="w3-container">
                    <p><?php echo"MODEL NO : ";
                        $query=$baglanti->query('SELECT modelno FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['modelno']."</a>";
                        } ?></p>
                    <hr>

                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>ÜSTÜN ÖZELLİK</b></p>
                    <p><?php $query=$baglanti->query('SELECT ekrankarti FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['ekrankarti']."</a>";
                        } ?></p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div></div>
                    </div>
                    <p><?php $query=$baglanti->query('SELECT ram FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['ram']."</a>";
                        } echo " GB RAM"; ?></p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <p><?php $query=$baglanti->query('SELECT ssdkapasite FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['ssdkapasite']."</a>";
                        } echo " GB SSD"; ?></p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div></div>
                    </div>
                    <p><?php $query=$baglanti->query('SELECT hddkapasite FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['hddkapasite']."</a>";
                        } echo " TB HARDDİSK"; ?></p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                        <div></div>
                    </div>
                    <br><br>
                </div>
            </div><br>
        </div>
        <div class="w3-twothird">

            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>TÜM ÖZELLİKLER</h2>
                    <div class="w3-container">
                    <h5 class="w3-opacity"><b>MARKA ADI</b></h5>
                    <p> <?php $query=$baglanti->query('SELECT markaadi FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['markaadi']."</a>";
                        }?></p>
                    <hr>
                    </div>

                <div class="w3-container">
                    <h5 class="w3-opacity"><b>MODEL NO</b></h5>
                    <p><?php $query=$baglanti->query('SELECT modelno FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['modelno']."</a>";
                        }?></p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>RAM YUVA</b></h5>
                    <p><?php $query=$baglanti->query('SELECT ramyuva FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['ramyuva']."</a>";
                        } echo " ADET"; ?></p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>RAM HIZI</b></h5>
                    <p><?php $query=$baglanti->query('SELECT ramhizi FROM bilgisayar');
                        foreach( $query as $row ){
                            echo "<a>".$row['ramhizi']."</a>";
                        } echo " MHz"; ?></p><br>
                </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>RAM KAPASİTE</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ram FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['ram']."</a>";
                                } echo " GB"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>RAM TİPİ</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ramtipi FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['ramtipi']."</a>";
                                }?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>CİHAZ AĞIRLIK</b></h5>
                            <p><?php $query=$baglanti->query('SELECT cihazagirlik FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['cihazagirlik']."</a>";
                                } echo " KG"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>EKRAN BOYUTU</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ekranboyut FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['ekranboyut']."</a>";
                                } echo " \" "; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>EKRAN KARTI HAFIZA</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ekrankartihafiza FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['ekrankartihafiza']."</a>";
                                } echo " GB"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>EKRAN KARTI</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ekrankarti FROM bilgisayar');
                            echo "NVIDIA GTX ";
                            foreach( $query as $row ){
                                    echo "<a>".$row['ekrankarti']."</a>";
                                }; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>EKRAN ÖZELLİK</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ekranozellik FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['ekranozellik']."</a>";
                                } ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>HARDDİSK</b></h5>
                            <p><?php $query=$baglanti->query('SELECT hddkapasite FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['hddkapasite']."</a>";
                                } echo " GB"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>HDD HIZ</b></h5>
                            <p><?php $query=$baglanti->query('SELECT hddhiz FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['hddhiz']."</a>";
                                } echo " RPM"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>İŞLEMCİ ÖNBELLEK</b></h5>
                            <p><?php $query=$baglanti->query('SELECT islemcicache FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['islemcicache']."</a>";
                                } echo " MB"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>İŞLEMCİ HİZ</b></h5>
                            <p><?php $query=$baglanti->query('SELECT islemcihiz FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['islemcihiz']."</a>";
                                } echo " GHz"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>İŞLEMCİ TİPİ</b></h5>
                            <p><?php $query=$baglanti->query('SELECT islemcitip FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['islemcitip']."</a>";
                                }?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>EKRAN</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ekrancozunurluk FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['ekrancozunurluk']."</a>";
                                }?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>SSD</b></h5>
                            <p><?php $query=$baglanti->query('SELECT ssdkapasite FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['ssdkapasite']."</a>";
                                } echo " GB"; ?></p><br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>USB</b></h5>
                            <p><?php $query=$baglanti->query('SELECT usb FROM bilgisayar');
                                foreach( $query as $row ){
                                    echo "<a>".$row['usb']."</a>";
                                }?></p><br>
                        </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
