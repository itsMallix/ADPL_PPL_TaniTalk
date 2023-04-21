<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css-->
    
    <title>Petani</title>
</head>
<body>
    <?php
        session_start();

        if($_SESSION['level']==""){
            header("locaation:../index.php?pesan=gagal");
        }

    ?>

    <h1>halaman petani</h1>
</body>
</html>