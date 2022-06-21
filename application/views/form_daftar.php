<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
	<title>Login Form</title>
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col">

			<h2>Form Daftar</h2>

			<form action="<?= base_url()."index.php/pages/aksi_daftar" ?>" method="post">
				<div class="mb-3">
					<label for="nama" class="form-label">Username</label>
					<input type="text" name="username"
						   class="form-control" id="username" required
						   placeholder="Your username">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password"
						   class="form-control" id="password" required
						   placeholder="Your password">
				</div>

				<button name="btn" type="submit" value="Login" class="btn btn-primary">Daftar</button>

			</form>
			<a href="<?= base_url()."index.php/pages/login" ?>">Login</a>

		</div>
	</div>
</div>

<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
