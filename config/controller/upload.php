<?php
if (isset($_POST['submit'])) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$uploadOk = 1;

	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
    
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
    


	if (file_exists($target_file)) {
		echo "<script type='text/javascript'>alert('Gambar Sudah Ada');window.location='../identifikasiPenyakit.php';</script>";
        ;
		$uploadOk = 0;
	}

	if ($_FILES["image"]["size"] > 500000) {
		echo "<script type='text/javascript'>alert('Ukuran Gambar Terlalu Besar');window.location='../identifikasiPenyakit.php';</script>";
		$uploadOk = 0;
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "<script type='text/javascript'>alert('Hanya Bisa Mengupload jpg, png dan gif');window.location='../identifikasiPenyakit.php';</script>";
        ;
		$uploadOk = 0;
	}

	if ($uploadOk == 0) {
        echo "<script type='text/javascript'>alert('Upload Gagal);window.location='../identifikasiPenyakit.php';</script>";
        ;
	} else {
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<script type='text/javascript'>alert('Gambar Berhasil Diupload');window.location='../identifikasiPenyakit.php';</script>";

		} else {
            echo "<script type='text/javascript'>alert('Error');window.location='../identifikasiPenyakit.php';</script>";
            ;
		}
	}
}
?>
