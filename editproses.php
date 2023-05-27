<?php 

	include './config/koneksi.php';

	$id 		= $_POST['id'];
	$nama 		= $_POST['nama'];
	$telepon	= $_POST['telepon'];
	$gender		= $_POST['gender'];
	$alamat		= $_POST['alamat'];
	$email		=$_POST['email'];

	$query = " UPDATE anggota SET
			nama 		= '$nama',
			telepon		= '$telepon',
			jenis_kelamin		= '$gender',
			alamat		= '$alamat',
			email		= '$email'
			WHERE id = $id";

	$result = mysqli_query($koneksi,$query);

	if ($result) {
		// code...
		header('Location: index.php');
	} else {
		echo "data gagal di edit";
	}
	

 ?>

 