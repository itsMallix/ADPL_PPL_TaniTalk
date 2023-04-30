<?php
if(isset($_POST['hapus_gambar'])){
    $file = $_POST['image'];
    $path = "uploads/";

    if(file_exists($path)){
        unlink(($path));
        echo "<script type='text/javascript'>alert('Refresh berhasil');window.location='../identifikasiPenyakit.php';</script>";
        ;
    }else{
        
    }
}

?>