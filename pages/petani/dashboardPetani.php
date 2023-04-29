<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petani</title>
</head>
<body>
    <?php
        session_start();
        include "_sidebarPetani.php";

        if($_SESSION['level']==""){
            header("locaation:../index.php?pesan=gagal");
        }
    ?>
    <div class="cardRow">
        <div class="cardCol">
            <div class="card">
                <img src="" alt="">
                <h3>Budidaya Kopi</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae ducimus exercitationem tempora ab reprehenderit impedit distinctio veritatis repellendus eligendi dolorem?</p>
            </div>
        </div>
    </div>
    <div class="cardRow">
        <div class="cardCol">
            <div class="card">
                <img src="" alt="">
                <h3>Budidaya Kopi</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae ducimus exercitationem tempora ab reprehenderit impedit distinctio veritatis repellendus eligendi dolorem?</p>
            </div>
        </div>
    </div>
    <div class="cardRow">
        <div class="cardCol">
            <div class="card">
                <img src="" alt="">
                <h3>Budidaya Kopi</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae ducimus exercitationem tempora ab reprehenderit impedit distinctio veritatis repellendus eligendi dolorem?</p>
            </div>
        </div>
    </div>
</body>
</html>

<style>
*{
    box-sizing: border-box;
}

.card img{
    height: 200px;
    width: 200px;
}

.cardRow{
    width: 100%;
    margin: 0 5px;
}

.cardCol{
    width: 50%;
    float: left;
    padding: 15px;
}

.card{
    background-color: white;
    padding: 20px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 2);
}

.card:hover{
    background-color: cyan;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 2);
}

body{
    margin-left: 290px;
}
</style>