<?php
if (isset($_POST['submit'])) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$uploadOk = 1;

	// Check if image file is a actual image or fake image
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

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "<script type='text/javascript'>alert('Gambar Sudah Ada');window.location='../identifikasiPenyakit.php';</script>";
        ;
		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["image"]["size"] > 500000) {
		echo "<script type='text/javascript'>alert('Ukuran Gambar Terlalu Besar');window.location='../identifikasiPenyakit.php';</script>";
		$uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "<script type='text/javascript'>alert('Hanya Bisa Mengupload jpg, png dan gif');window.location='../identifikasiPenyakit.php';</script>";
        ;
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
        echo "<script type='text/javascript'>alert('Upload Gagal);window.location='../identifikasiPenyakit.php';</script>";
        ;
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			// echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " Berhasil Di Upload.";
            echo "<script type='text/javascript'>alert('Gambar Berhasil Diupload');window.location='../identifikasiPenyakit.php';</script>";

		} else {
            echo "<script type='text/javascript'>alert('Error');window.location='../identifikasiPenyakit.php';</script>";
            ;
		}
	}
}
?>
