<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
	<title>Kripto Kosong</title>
</head>

<body>
<?php $this->load->view('_partials/navbar.php'); ?>

<div class="container">
	<div class="row">
		<div class="col">

			<h2>Data Kripto kosong</h2>
			<a href="<?= site_url('kripto/insert') ?>">Tambah daftar kripto</a>

		</div>
	</div>
</div>

<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
