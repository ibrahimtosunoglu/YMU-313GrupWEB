<html>
<body background="bgimage.jpg">
<?php session_start();
if($_SESSION && $_SESSION['oturum']==true){
    echo"zaten oturum açık";
echo "<div class=\"container\" style=\"background-color:#f1f1f1\">
        <button onclick=\"window.location.href='/webproje/adminlogoutislem.php'\" type=\"button\" class=\"cancelbtn\">Çıkış Yap</button>
    </div>";
}
else{?>
<form align="center" action="adminloginislem.php" method="POST">
    <div class="container">
        <label><b>Kullanıcı Adı</b></label><br>
        <input type="text" placeholder="Kullanıcı Adı" name="nick" required><br>

        <label><b>Şifre</b></label><br>
        <input type="password" placeholder="Şifre" name="sifre" required><br>

        <button type="submit">Login</button><br>
        <input type="checkbox" checked="checked"> Remember me<br>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
    </div>
</form>
<?php }?>
</body>
</html>
<style>form {
        border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
    input[type=text], input[type=password] {
        width: 25%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 25%;
    }

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Extra style for the cancel button (red) */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    /* Avatar image */
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }</style>