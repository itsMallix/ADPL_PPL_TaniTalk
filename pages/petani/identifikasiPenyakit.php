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
    ?>
<body>
    <div class="container">
        <form action="controller/upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image">
            <button type="submit" name="submit">Upload</button>
        </form> 
    </div>
</body>
</html>
