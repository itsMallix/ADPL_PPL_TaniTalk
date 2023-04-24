<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pupuk</title>
</head>
    <?php
        include '_sidebarPetani.php';
        include '_navbarPetani.php';

        if(isset($_POST['hitung'])){
            if($_POST['jenisPola']=='persegi'){
                
            }
        }
    ?>
<body>
    <div class="content">
        <div class="kalkulator">
            <form action="" method="GET">
                <h2>Kalkulator Pupuk</h2>
                <input type="text" name="luasLahan" placeholder="Luas Lahan" class="input">

                <label>Pola Tanam</label>
                <select name="jenisPola" class="jenis">
                    <option value="persegi">Persegi</option>
                    <option value="segitiga">Segitiga</option>
                    <option value="persegi_P">Persegi Panjang</option>
                </select>
                <input type="text" name="jarakTanam_1" placeholder="Jarak Tanam Sisi 1" class="input">
                <input type="text" name="jarakTanam_2" placeholder="jarak Tanam Sisi 2" class="input">

                <input type="submit" value="Hitung" name="hitung" class="hitung">
            </form>
        </div>
    </div>
</body>
</html>

<style>
    .input{
        width: 300px;
        margin: 5px;
        border: 1px solid;
        border-radius: 5px;
        padding: 10px;
        font-size: 15pt;
    }
    .hitung{
        border-top: none;
        border-left: none;
        border-right: none;
        border-radius: 5px;
        padding: 10px 20px;
        border-bottom: 5px;
        width: 300px;
    }
    .jenis{
        font-size: 12pt;
        border: 1px solid;
        width: 220px;
        margin: 5px;
        border-radius: 5px;
        padding: 10px;
    }
    .content{
        margin-left: 320px;
        width: 350px;
        margin: 100px auto;
        padding: 10px 20px 50px 20px;
        border-radius: 5px;
        box-shadow: 0px 10px 20px 0px;
    }
    .kalkulator label{
        font-size: 12pt;
    }
</style>
