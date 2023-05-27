
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Florisen | edit Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<?php 
			include './config/koneksi.php';
			$id = $_GET['id'];
			$query = "SELECT * FROM anggota WHERE id = '$id'";
			$result = mysqli_query($koneksi,$query);
			$data = mysqli_fetch_assoc($result);

	 ?>
		<div class="col-10 m-auto" style="padding: 100px 0 0 0; ">
			<h2 class="text-center fw-blod">Edit Data Florisen</h2>
			<div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded"> 
				<form action="editproses.php" method="post">
				<input type="hidden" name="id" value="<?= $data['id']?>">
					<div class="mb-3">
						<input type="hidden" nama="id" value="<?= $data['id']?>">
						<label for="exampleFormControlInput1" class="form-label">nama</label>
						<!-- <input name ="nama" type="text" class="form-control" id="exampleFormControlInput1"> -->
						<input name ="nama" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['nama']?>">
					</div>
					<div class="mb-3">
						<input type="hidden" nama="id" value="<?= $data['id']?>">
						<label for="exampleFormControlInput1" class="form-label">Telepon</label>
						<!-- <input name ="telepon" type="text" class="form-control" id="exampleFormControlInput1"> -->
						<input name ="telepon" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['telepon']?>">
					</div>

					<div class="mb-3">
							<P>Jenis Kelamin</P>
							<input type="hidden" name="id" value="<?= $id ?>">
							<input name="gender" type="radio" id="gender1Input" value="pria" <?= $data['jenis_kelamin'] == 'pria' ?'checked': null ?>>  
							<label for="gender1Input" class="form-label">Pria</label>
							<input type="radio" name="gender" id="gender2Input" value="wanita " <?= $data['jenis_kelamin'] == 'wanita'? 'checked': null ?>>

							<label for="gender2Input" class="form-label">Wanita</label>  
					</div>


					<div class="mb-3">
						<input type="hidden" nama="id" value="<?= $data['id']?>">
						<label for="exampleFormControlInput1" class="form-label">Alamat</label>
						<!-- <input name ="alamat" type="text" class="form-control" id="exampleFormControlInput1"> -->
						<input name ="alamat" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['alamat']?>">
					</div>
					<div class="mb-3">
						<input type="hidden" nama="id" value="<?= $data['id']?>">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<!-- <input name ="email" type="text" class="form-control" id="exampleFormControlInput1"> -->
						<input name ="email" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['email']?>">
					</div>

					<div class="col-3 m-auto">
						<button class="btn btn-primary btn-md px-5 mt-2"> Submit </button>
					</div>


				</form>
			</div>
		</div>
	</div>



</body>
</html>