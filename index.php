<?php
include './config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Florisen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<style>
		.container .tambah {

			justify-content: end;
			align-items: right;
			background-color: chartreuse;
			align-content: flex-end;
		}
	</style>

</head>

<body>
	<div class="container">
		<div class="col-10 m-auto ">
			<p class="h1 text-center p-5">Table Florisen</p>
			<a href="create.php" class="tambah btn  ">Tambah Data</a>

			<table class="table  table-hover table-bordered border-success mt-2">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">WhatsApp</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Alamat</th>
						<th scope="col">Email</th>
						<th scope="col">Action</th>
					</tr>
				</thead>

				<?php

				$query = "SELECT * FROM anggota";
				$result = mysqli_query($koneksi, $query);

				$no = 1;
				while ($data = mysqli_fetch_assoc($result)) {
				?>
					<tbody>
						<tr>
							<td scope="row"><?= $no++ ?></td>
							<td scope="row"><?= $data['nama'] ?></td>
							<td scope="row"><?= $data['telepon'] ?></td>
							<td scope="row"><?= $data['jenis_kelamin'] ?></td>
							<td scope="row"><?= $data['alamat'] ?></td>
							<td scope="row"><?= $data['email'] ?></td>
							<td scope="row">
								<a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-info ms-5">Edit</a>
								<form class="d-inline" action="delete.php" method="post">
									<input type="hidden" name="id" value="<?= $data['id'] ?>">
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>

						</tr>
					</tbody>
				<?php } ?>
			</table>
		</div>
	</div>



</body>

</html>