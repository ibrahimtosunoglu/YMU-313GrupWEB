<?php include 'baglanti.php';?>
<?php include 'profil.php';?>
<?php include 'class.upload.php';?>

<?php

if(isset($_SESSION["login"])&& $_SESSION["login"] ) {
    if($_FILES) {

        $kadi = $_SESSION['kadi'];
        $foo = new Upload($_FILES['uye_profil']);
        //unlink("fotolar/uyeresim/profile_$kadi.jpg");
        $foo->file_new_name_body = 'profile_' . $kadi; //Resmi adlandırma
        $foo->allowed = array ( 'image/*' ); //sadece resim formatları yüklensin
        $foo->image_convert = 'jpg'; //resmi jpg ye dönüştürme
        $foo->file_overwrite = true;//Dosyanın üzerine yazma
        //$foo->file_max_size  = '50000' ;
        $foo->Process('fotolar/uyeresim/');
        //$foo->file_auto_rename  =  false;

        if ($foo->processed) {

            $path = "fotolar/uyeresim/" . $foo->file_dst_name;
            $update = $baglanti->query("update uyeler set uye_profil='$path' where kullaniciAdi='$kadi'");
            if ($update) {
                echo "<center><span style=\"color:Red\"><td>Profil Resmi Güncellendi</td></span></center>";
            } else {
                echo "<center><span style=\"color:Red\"><td>Profil Resmi Güncellenemedi</td></span></center>";
            }
            //echo $foo->file_dst_name;
        } else {
            $err="<center><span style=\"color:Red\"><td>Resminiz sadece jpg, png ya da gif formatında ve maksimum 4 mb büyüklüğünde olmalıdır. Detaylı Hata Ayrintisi:</td></span></center>.$handle->error . ''";
            echo '<script type="text/javascript">alert("'.$err.'");</script>';
        }
    }



    //kullanıcı bilgileri
    $kadi = $_SESSION['kadi'];
    $id = @$_POST['id'];
    $sorgu = $baglanti->query("select kullaniciAdi,email from uyeler where uye_id ='$id'",PDO::FETCH_ASSOC);
    $sorgu2 = $baglanti->query("select email from uyeler where kullaniciAdi ='$kadi'",PDO::FETCH_ASSOC);
    $fetch=$baglanti->query("select * from uyeler where kullaniciAdi='$kadi'")->fetch();
    foreach( $sorgu2 as $row ){
        $row['email'];
    }
    $email=$row['email'];
    if(!$sorgu->rowCount()){?>

        <div style="margin-left:30%">
            <form action="uyebilgiler.php" method="post" align="" enctype="multipart/form-data">
                <br>
                <img src="<?=$fetch['uye_profil'];?>" width="200" height="200">
                <br><br>
                Resim 2 MB'tan az olmalıdır
                <br>
                <br>
                <input type="file" name="uye_profil">
                <input type="submit" value="Gönder">

            </form>
            <br><br>
            <div class="w3-container">

                <p><b><?php echo "<td>Kullanıcı Adı:</b><br/> $kadi </td>";?></p>


            </div>

        </div>

    <?php }
    if(!$sorgu->rowCount()) {
        ?>
        <div style="margin-left:30%">
            <br>
            <div class="w3-container">
                <p><b><?php echo "<td>Mail Adresi:</b><br/> $email </td>";?></p>

            </div>

        </div>

        <?php
    }
}
?>


