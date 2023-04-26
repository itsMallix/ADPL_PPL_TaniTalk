<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cuaca.css">
    <title>Cuaca</title>
</head>
<?php
    include '_sidebarPetani.php';
    include '_navbarPetani.php';
?>
<body>
    <div class="container">
        <h2 class="title">Prakiraan Cuaca</h2>
        <div class="input-grup">
            <input type="text" class="formControl" id="city" placeholder="Masukkan Nama Kota">
            <button class="searchBtn" id="search">Search</button>
        </div>
    </div>
</body>
</html>