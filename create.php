
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Florisen | Tambah Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<?php 
			include './config/koneksi.php';
	 ?>
		<div class="col-10 m-auto" style="padding: 100px 0 0 0; ">
			<h2 class="text-center fw-blod">Tambah Data Florisen</h2>
			<div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded"> 
				<form action="createproses.php" method="post">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">nama</label>
						<input name ="nama" type="text" class="form-control" id="exampleFormControlInput1">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Telepon</label>
						<input name ="telepon" type="text" class="form-control" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
							<P>Jenis Kelamin</P>
							<input name="gender" type="radio" id="gender1Input" value="pria">
							<label for="gender1Input" class="form-label">Pria</label>
							<input name="gender" type="radio" id="gender2Input" value="wanita">
							<label for="gender2Input" class="form-label">Wanita</label>

					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Alamat</label>
						<input name ="alamat" type="text" class="form-control" id="exampleFormControlInput1">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input name ="email" type="text" class="form-control" id="exampleFormControlInput1">
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