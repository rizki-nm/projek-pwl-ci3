<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
	<title>Edit Kripto</title>
</head>

<body>
<?php $this->load->view('_partials/navbar.php'); ?>

<div class="container">
	<div class="row">
		<div class="col">

			<h2>Form edit daftar kripto</h2>

			<form action="" method="post">
				<div class="mb-3">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" name="nama" class="form-control" id="nama" required
						   value="<?= $kripto->nama ?>">
				</div>
				<div class="mb-3">
					<label for="simbol" class="form-label">Simbol</label>
					<input type="text" name="simbol" class="form-control" id="simbol" required
						   value="<?= $kripto->simbol ?>">
				</div>
				<div class="mb-3">
					<label for="harga" class="form-label">Harga</label>
					<input type="text" name="harga" class="form-control" id="harga" required
						   value="<?= $kripto->harga ?>">
				</div>
				<div class="mb-3">
					<label for="market" class="form-label">Market</label>
					<input type="text" name="market" class="form-control" id="market" required
						   value="<?= $kripto->market ?>">
				</div>
				<button name="btn" type="submit" value="Save" class="btn btn-primary">Submit</button>
			</form>


		</div>
	</div>
</div>

<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
