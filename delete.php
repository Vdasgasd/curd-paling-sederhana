<?php 

	include './config/koneksi.php';

	$id 		= $_POST['id'];


	$query = " DELETE FROM anggota WHERE id ='$id'";
	$result = mysqli_query($koneksi,$query);

	if ($result) {
		// code...
		header('Location: index.php');
	} else {
		echo "Data gagal dihapus";
	}
	

 ?>

 