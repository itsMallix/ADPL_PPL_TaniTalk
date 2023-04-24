<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pupuk</title>
</head>
<body>
    <div class="kalkulator">
        <form action="../../config/hitungKalkulasi.php" method="GET">
            <label>Luas Lahan</label>
            <input type="text" name="luasLahan" autocomplete="off" placeholder="0.0">

            <label>Pola Tanam</label>
            <input type="submit" name="persegi" value="Persegi">
            <input type="submit" name="segitiga" value="Segitiga">
            <input type="submit" name="persegiPanjang" value="Persegi Panjang">
            <br>
            <br>
            <input type="submt" class="loginBtn" value="Hitung">
        </form>
    </div>
</body>
</html>