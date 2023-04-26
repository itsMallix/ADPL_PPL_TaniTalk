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
            <div class="cardBody">
                <h2 class="title">Kota, Jember</h2>
                <p>
                    Cuaca Saat Ini: 28.88 °C
                    <br>
                    Terasa Seperti : 28.79 °C
                    <br>
                    Tertinggi : 30.59 °C, Terendah : 24.37 °C
                </p>
                <img class="castIcon" src="../../asset/img/dummyclouds.png" alt="">
            </div>
        </div>
        <!-- forecasting -->
        <div class="card" id="forecastContainer">
            <div class="cardBody">
                <h2 class="title">Kota, Jember</h2>
                <table class="table">
                    <tbody id="body">
                        <tr>
                            <td><img src="../../asset/img/dummyclouds.png" alt=""></td>
                            <td>
                                <i class="fa fa-calender-chec-o" aria-hidden="true"></i><?php echo date("d M"); echo "<br>";echo date("Y");?><br>
                                <i class="fa fa-clock-o" aria-hidden="true">08.00</i>
                            </td>
                            <td>
                                <h3 class="info" style="margin: 0 5px 0 5px"> 29.37 °C <br><small>Tertinggi : 28.88 °C <br> Terendah : 24.37 °C</small> </h3>
                            </td>
                            <td>Clouds <br>Overcast cloud</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<script src="../../js/cuaca.js"></script>