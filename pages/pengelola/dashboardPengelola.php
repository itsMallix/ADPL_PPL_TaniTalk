<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Pengelola</title>
</head>
<body>
    <?php
        session_start();
        include "_sidebarPengelola.php";
        include "../../config/conn.php";
        include "floatingBtn.php";

        if($_SESSION['level']==""){
            header("locaation:../index.php?pesan=gagal");
        }

        $query = "SELECT * FROM katalog_budidaya";
        $hasil = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($hasil)){
            echo "<div class='cardRow'>";
            echo "<div class='cardCol'>";
            echo "<div class='card'>";
            echo "<img class='thumbnail' src='../../config/controller/uploads/" .$row['gambar'] ."'alt='gambar'>";
            echo "<h3 class='judul'>" . $row['judul'] . "</h3>";
            echo "<p class='deskripsi'>" . $row['deskripsi'] . "</p>";
            echo "</div></div>";
        }
    ?>
</body>
</html>
