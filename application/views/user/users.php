<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">
		<i class="fas fa-list-ol"></i>
		<?= $title; ?>
	</h1>

	<div class="row">
		<div class="col-lg">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" roles="alert">
					<?= validation_errors(); ?></div>
			<?php endif; ?>

			<?= $this->session->flashdata('message'); ?>

			<div class="table-responsive">
				<hr class="border border-dark border-5 mt-0">

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
								<thead class="table-dark">
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Name</th>
										<th class="text-center">Username</th>
										<th class="text-center">Level</th>
										<th class="text-center">Status</th>
										<th class="text-center">Tanggal Daftar</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach ($users as $u) : ?>
										<tr>
											<td scope="row" class="text-center"><?= $i; ?></td>
											<td class="text-center text-gray-800"><?= $u['name']; ?></td>
											<td scope="row" class="text-center"><?= $u['username']; ?></td>
											<td scope="row" class="text-center">
												<?php if ($u['role_id'] == 1) {
													echo "Administrator";
												} else {
													echo "User";
												}; ?>
											</td>
											<td scope="row" class="text-center">
												<?php if ($u['is_active'] == 1) {
													echo "Aktif";
												} else {
													"Tidak Aktif";
												} ?>
											</td>
											<td class="text-center"><?= date('d F Y', $u['date_created']); ?>
											</td>
											<td class="text-center">
												<a class="btn btn-sm btn-success mb-3" href="<?= base_url('user/updateUsers/') . $u['id']; ?>">
													Edit
												</a>
												<a class="btn btn-sm btn-danger mb-3" href="<?= base_url('user/deleteUsers/') . $u['id']; ?>" onclick="return confirm('Yakin Data User ini akan dihapus?');">
													Delete
												</a>
												<a class="btn btn-sm btn-info mb-3" href="<?= base_url('user/detailUsers/') . $u['id']; ?>">
													Detail
												</a>
												<!-- <a class="btn btn-sm btn-success mb-3 float-right"
												href="<?= base_url('User/print/') . $u['id']; ?>">
												Print
											</a> -->

											</td>

										</tr>
										<?php $i++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div>