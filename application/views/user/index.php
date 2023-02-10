<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">
		<!-- <i class="fas fa-user-tie"></i> -->
		<?= $title; ?>
	</h1>

	<div class="row">
		<div class="col-lg-8">
			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>

	<div class="card mb-3 col-lg-6">
		<div class="row g-0">
			<div class="col-md-4">
				<img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-fluid rounded-start">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title text-gray-800"><strong>Nama : </strong><?= $user['name']; ?></h5>
					<p class="card-text text-gray-800"><strong>Username : </strong><?= $user['username']; ?></p>
					<p class="card-text text-gray-800"><small class="text-gray-800 ">Terdaftar sejak
							<?= date('d F Y', $user['date_created']); ?></small></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>