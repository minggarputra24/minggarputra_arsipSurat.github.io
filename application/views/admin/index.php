<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<div class="content">

		<div class="row">
			<div class="col-sm mb-3">
				<div class="card bg-gradient-primary">
					<div class="card-body text-center">
						<h5 class="h3 card-title text-white">Sistem Informasi Persuratan </h5>
						<p class="card-text text-white">Sistem Informasi Pengelolaan Persuratan UPT PJK Bandara
							Abdulrachman Saleh Kab. Malang
						</p>
						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
				</div>
			</div>
		</div>


		<div class="row row-cols-1 row-cols-md-3 g-4">

			<!-- START CARD SURAT MASUK -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">

								<div class="h3 text-xs font-weight-bold text-success text-uppercase mb-1">
									<a href="<?= base_url('surat_masuk'); ?>" target="_blank"
										style="text-decoration: none; color: inherit;">
										Surat Masuk
									</a>
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?= $suratMasuk; ?>
								</div>
							</div>

							<div class="col-auto">
								<i class="fas fa-envelope fa-2x text-gray-300"></i>
							</div>
						</div>
						<div>
							<a href="<?= base_url('user/suratMasuk'); ?>" class="btn btn-success mt-2">
								Selengkapnya
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- START CARD SURAT MASUK -->

			<!-- START CARD SURAT KELUAR -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-danger shadow h-60 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">

								<div class="h3 text-xs font-weight-bold text-danger text-uppercase mb-1">
									<a href="<?= base_url('surat_keluar'); ?>" target="_blank"
										style="text-decoration: none; color: inherit;">
										Surat Keluar
									</a>
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?= $suratKeluar; ?>
								</div>

							</div>
							<div class="col-auto">
								<i class="fas fa-envelope-open-text fa-2x text-gray-300"></i>
							</div>

						</div>
						<div>
							<a href="<?= base_url('user/suratKeluar'); ?>" class="btn btn-danger mt-2">
								Selengkapnya
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END CARD USERS -->

			<!-- START CARD DISPOSISI -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-60 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">

								<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
									<a href="<?= base_url('disposisi'); ?>" target="_blank"
										style="text-decoration: none; color: inherit;">
										Disposisi
									</a>
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?= $disposisi; ?>
								</div>

							</div>
							<div class="col-auto">
								<i class="fas fa-inbox fa-2x text-gray-300"></i>
							</div>

						</div>
						<div>
							<a href="<?= base_url('user/disposisi'); ?>" class="btn btn-warning mt-2">
								Selengkapnya
							</a>
							<!-- <button class="btn btn-primary"> Selengkapnya </button> -->
						</div>
					</div>
				</div>
			</div>
			<!-- END CARD USERS -->

			<!-- START CARD USERS -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-info shadow h-60 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">

								<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
									<a href="<?= base_url('surat_masuk'); ?>" target="_blank"
										style="text-decoration: none; color: inherit;">
										Jumlah User
									</a>
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?= $users;?>
								</div>

							</div>
							<div class="col-auto">
								<i class="fas fa-users fa-2x text-gray-300"></i>
							</div>

						</div>
						<div>
							<a href="<?= base_url('user/users'); ?>" class="btn btn-info mt-2">
								Selengkapnya
							</a>
							<!-- <button class="btn btn-primary"> Selengkapnya </button> -->
						</div>
					</div>
				</div>
			</div>
			<!-- END CARD USERS -->
		</div>
	</div>
</div>

<!-- /.container-fluid -->

</div>
