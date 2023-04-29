<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/penyakit.css">
    <title>Identifikasi Penyakit</title>
</head>
    <?php
        include "_sidebarPetani.php";
        $target = "controller/upload_penyakit/";
        $files = glob($target . "*{jpg,jpeg,png,gif}", GLOB_BRACE);
    ?>
<body>
    <div class="container">
        <form action="controller/upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image">
            <button type="submit" name="submit">Upload</button>
            <!-- <button type="delete" name="delete">Refresh</button> -->
        </form>
        <form action="controller/deleteImg.php" method="post">
            <input type="hidden" name="image">
            <button type="submit" name="hapus_gambar">Hapus Gambar</button>
        </form>
    </div>
    <div class="hasil">
        <?php foreach ($files as $file); ?>
        <div class="card">
            <img src="<?php echo $file; ?>" alt="gambar">
            <div class="cardBody">
                <h6 class="deskripsi">P</h6>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    .hasil{
        margin-left: 320px;
    }
</style>