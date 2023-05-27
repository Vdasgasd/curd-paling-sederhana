<?php 

	include './config/koneksi.php';

	$nama 	= $_POST['nama'];
	$telepon	= $_POST['telepon'];
	$gender	= $_POST['gender'];
	$alamat	= $_POST['alamat'];
	$email	=$_POST['email'];

	$query = " INSERT INTO anggota (nama,telepon,jenis_kelamin,alamat,email) VALUES ('$nama','$telepon','$gender','$alamat','$email')";

	$result = mysqli_query($koneksi,$query);

	if ($result) {
		// code...
		header('Location: index.php');
	} else {
		echo "data gagal ditambahkan";
	}
	

 ?>