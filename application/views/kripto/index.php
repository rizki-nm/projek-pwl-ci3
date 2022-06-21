<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
	<title>Data Kripto</title>
</head>

<body>
<?php $this->load->view('_partials/navbar.php'); ?>

<div class="container">
	<div class="row">
		<div class="col">

			<h2>Daftar Kripto</h2>

			<table class="table">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">Simbol</th>
					<th scope="col">Harga</th>
					<th scope="col">Market</th>
					<th scope="col">Aksi</th>
				</tr>
				</thead>

				<tbody>
				<?php $i = 1; ?>
				<?php foreach ($kripto as $row):?>
					<tr>
						<th scope="row"><?= $i++; ?></th>
						<td><?= $row->nama ?></td>
						<td><?= $row->simbol ?></td>
						<td><?= $row->harga ?></td>
						<td><?= $row->market ?></td>
						<td width="250">
							<div class="action">
								<a href="<?= site_url('kripto/edit/'.$row->id) ?>"
								   class="btn btn-small" role="button"><i class="fas fa-edit"></i> Edit</a>
								<a href="#"
								   data-delete-url="<?= site_url('kripto/delete/'.$row->id) ?>"
								   class="btn btn-danger btn-small"
								   role="button"
								   onclick="deleteConfirm(this)">Delete</a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<a href="<?= site_url('kripto/insert') ?>">Tambah daftar kripto</a>

		</div>
	</div>
</div>

<?php $this->load->view('_partials/footer.php'); ?>
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	function deleteConfirm(event){
		Swal.fire({
			title: 'Delete Confirmation!',
			text: 'Are you sure to delete the item?',
			icon: 'warning',
			showCancelButton: true,
			cancelButtonText: 'No',
			confirmButtonText: 'Yes Delete',
			confirmButtonColor: 'red'
		}).then(dialog => {
			if(dialog.isConfirmed){
				window.location.assign(event.dataset.deleteUrl);
			}
		});
	}
</script>

<?php if($this->session->flashdata('message')): ?>
	<script>
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'success',
			title: '<?= $this->session->flashdata('message') ?>'
		})
	</script>
<?php endif ?>

</html>
