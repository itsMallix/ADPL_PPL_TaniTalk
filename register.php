<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TaniTalk</title>
</head>
<body>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=='gagal'){
            echo "<div class='alert'>Username dan Password Salah !</div>";
        }
    }
    ?>

    <div class="box">
        <p class="textLogin">Silahkan Login</p>
        <form action="config/cekLogin.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="formLogin" placeholder="username" required="required">

            <label>Password</label>
            <input type="password" name="password" class="formLogin" placeholder="password" required="required">

            <input type="submit" class="loginBtn" value="Login">
        </form>
    </div>
</body>
</html>
