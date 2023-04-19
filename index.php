<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p class="text_login">Silahkan Login</p>
        <form action=""></form>
    </div>
</body>
</html>