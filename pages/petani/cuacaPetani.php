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
    <div class="container p-3 my-3">
        <h2 class="text-title">Prakiraan Cuaca</h2>
        <div class="input-grup">
            <input type="text" class="formControl" id="city" placeholder="Masukkan Nama Kota">
            <br>
            <button class="searchBtn" id="send">Search</button>
        </div>

        <br>
        <div class="flex">
            <div class="check">
                <input type="checkbox" class="box0" name="weather" id="currentWeather">
                <label for="currentWeather">Cuaca Saat Ini</label>

                <input type="checkbox" class="box1" name="weather" id="forecast">
                <label for="forcast">Prakiraan Cuaca</label>
            </div>
        </div>
        <br>
        <!-- currrent  -->
        <div class="card" id="weatherContainer" style="display:none">
            <!-- muncul cuaca disini -->
        </div>
        <!-- forecasting -->
        <div class="card" id="forecastContainer" style="display:none">
            <div class="cardBody" id="cardBody">
                <h2 class="title" id="title"></h2>
                <table class="table">
                    <tbody id="body">
                        <!-- ramalan cuaca disini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<script src="../../js/cuaca.js"></script>