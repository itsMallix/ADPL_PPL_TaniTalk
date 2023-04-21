<?php
session_start();
include 'conn.php';

$uname = $_POST['username'];
$paswd = $_POST['password'];

$login = mysqli_query($conn, "select * from user where username = '$uname' and password = '$paswd'");
$check = mysqli_num_rows($login);

if($check > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=='petani'){
        $_SESSION['username'] = $uname;
        $_SESSION['level'] = 'petani';
        header("location:../pages/petani/dashboardPetani.php");
    }
    else if($data['level']=='pengelola'){
        $_SESSION['username'] = $uname;
        $_SESSION['level'] = 'pengelola';
        header("location:../pages/pengelola/dashboardPengelola.php");
    }
    else{
        header("location:../index.php?pesan=gagal;");
    }
}
else{
    header("location:../index.php?pesan=gagal;");
}
?>
