<?php include 'baglanti.php';?>
<?php include 'profil.php';?>

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


<div class="kayit-form" >
    <div class="row" style="height: 400px;">
        <div class="col-sm-4 content">
        </div>
        <div class="col-sm-4 content">
            <p><br><br><br>
            <form action='sifredegis.php' method='post' accept-charset='UTF-8'>
                <label>Şifre Değiştirme</label>
                <div class="form-group">
                    <input type="password" class="form-control" name="esifre" placeholder="Eski Şifre"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="ysifre" placeholder="Yeni Şifre"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="tsifre" placeholder="Yeni Şifre Tekrar"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Değiştir">
                </div>
            </form>
            </p>
        </div>
        <div class="col-sm-4 content">
        </div>
    </div>

    <div class="row" style="height: 400px;">
        <div class="col-sm-4 content">
        </div>
        <div class="col-sm-4 content">
            <p>
            <form action='maildegis.php' method='post' accept-charset='UTF-8'>
                <label>Mail Değiştirme</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Eski Mail"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ymail" placeholder="Yeni Mail"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="tmail" placeholder="Yeni Mail Tekrar"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Değiştir">
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


