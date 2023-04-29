<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="pengelola">pengelola</label>
            <textarea class="form-control" name="pengelola" id="pengelola" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control-file" name="gambar" id="gambar" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>

<style>
    .form-group {
    margin-bottom: 1.5rem;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(2.5rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control:focus {
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.form-control-file {
    display: block;
    width: 100%;
    height: calc(2.5rem + 2px);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control-file:focus {
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}

</style>

<?php
$server = 'localhost';
$database = 'taniTalk';
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password, $database);

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$pengelola = $_POST['pengelola'];
$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$query = "INSERT INTO katalog_budidaya (judul, deskripsi, pengelola, gambar) VALUES ('$judul', '$deskripsi', '$pengelola', '$nama_file')";
mysqli_query($conn, $query);

$lokasi = "controller/uploads/".$nama_file;
move_uploaded_file($tmp_file,$lokasi);
echo "<script type='text/javascript'>alert('berhasil');window.location='dashboardPetani.php;</script>";


?>