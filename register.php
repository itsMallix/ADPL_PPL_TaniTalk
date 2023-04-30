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
        <p class="textLogin">Daftar Akun</p>
        <form action="config/cekRegis.php" method="post">
            <label>Nama</label>
            <input type="text" name="nama" class="formLogin" placeholder="nama" required="required">
            
            <label>Email</label>
            <input type="text" name="email" class="formLogin" placeholder="email" required="required">
           
            <label>Alamat</label>
            <input type="text" name="alamat" class="formLogin" placeholder="alamat" required="required">

            <label>Password</label>
            <input type="password" name="password" class="formLogin" placeholder="password" required="required">
            
            <label>level</label>
            <input type="text" name="level" class="formLogin" placeholder="petani / pengelola" required="required">

            <input type="submit" class="loginBtn" value="Login">
        </form>
    </div>
</body>
</html>
