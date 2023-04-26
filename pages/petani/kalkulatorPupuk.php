<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/kalkulasiPupuk.css">
    <title>Kalkulator Pupuk</title>
</head>
    <?php
        include '_sidebarPetani.php';
        include '_navbarPetani.php';

        if(isset($_POST['hitung'])){
            $dosis = 0.33;
            if($_POST['jenisPola']=='persegi'){
                $jumlah_tanaman = ($_POST['luasLahan']/$_POST['jarakTanam_1']) * ($_POST['luasLahan']/$_POST['jarakTanam_2']);
                $hasil = $jumlah_tanaman * $dosis;
            }elseif($_POST['jenisPola']=='segitiga'){
                $jumlah_tanaman = ($_POST['luasLahan']/($_POST['jarakTanam_1']+$_POST['jarakTanam_2']))*2;
                $hasil = $jumlah_tanaman * $dosis;
            }elseif($_POST['jenisPola']=='persegi_P'){
                $jumlah_tanaman = ($_POST['luasLahan']/($_POST['jarakTanam_1']*$_POST['jarakTanam_2']));
                $hasil = $jumlah_tanaman * $dosis;
            }
        }else{
            $hasil = 0;
        }
    ?>
<body>
    <div class="content">
        <div class="kalkulator">
            <form action="" method="POST">
                <h2>Kalkulator Pupuk</h2>
                <input type="text" name="luasLahan" placeholder="Luas Lahan/m2" class="input">

                <label>Pola Tanam</label>
                <select name="jenisPola" class="jenis">
                    <option value="persegi">Persegi</option>
                    <option value="segitiga">Segitiga</option>
                    <option value="persegi_P">Persegi Panjang</option>
                </select>
                <input type="text" name="jarakTanam_1" placeholder="Jarak Tanam Sisi 1/m" class="input">
                <input type="text" name="jarakTanam_2" placeholder="jarak Tanam Sisi 2/m" class="input">

                <input type="submit" value="Hitung" name="hitung" class="hitung">
                <h2>Hasil : <?php echo $hasil ?> gram</h2>
            </form>
        </div>
    </div>
</body>
</html> 