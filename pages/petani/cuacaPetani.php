<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <input type="text" class="formControl" id="city">
            <button class="searchBtn" id="search">Search</button>
        </div>
    </div>
</body>
</html>

<style>
    .container{
        padding: 5px;
        margin-left: 320px;
        margin-right: 320px;
    }
    .searchBtn{
        border: none;
        background-color: blueviolet;
    }
</style>