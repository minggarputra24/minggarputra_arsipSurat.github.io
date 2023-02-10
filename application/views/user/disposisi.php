<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<div class="col-lg">
			<?php if (validation_errors()) : ?>
			<div class="alert alert-danger" roles="alert">
				<?= validation_errors(); ?></div>
			<?php endif; ?>

			<?= $this->session->flashdata('message'); ?>

			<!-- Button tambah Surat Dispo -->
			<div class="table-responsive">
				<hr style="margin:0px">
				<br>

				<a href="<?= base_url('user/tambahDisposisi') ?>" class="btn btn-primary mb-3">
					<i class="fas fa-envelope-open-text"></i>
					Tambah Surat Disposisi
				</a>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped" id="dataTable" width="100%"
								cellspacing="0">
								<thead class="table-dark">
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Surat Dari</th>
										<th class="text-center">No. Surat</th>
										<th class="text-center">Diteruskan Kepada</th>
										<th class="text-center">Isi Disposisi</th>
										<th class="text-center col-sm-4 col-md-3">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach ($disposisi as $d) : ?>
									<tr>
										<td scope="row" class="text-center"><?= $i; ?></td>
										<td class="text-center text-gray-800"><?= $d['pengirim']; ?></td>
										<td class="text-center text-gray-800"><?= $d['no_surat']; ?></td>
										<td class="text-center text-gray-800"><?= $d['diteruskan_kepada']; ?></td>
										<td class="text-center text-gray-800"><?= $d['isi_disposisi']; ?></td>
										<td class="text-center">
											<a class="btn btn-sm btn-success mb-3"
												href="<?= base_url('user/updateDisposisi/') . $d['id_disposisi']; ?>">
												Edit
											</a>
											<a class="btn btn-sm btn-danger mb-3"
												href="<?= base_url('user/deleteDisposisi/') . $d['id_disposisi']; ?>"
												onclick="return confirm('Yakin Data ini akan dihapus?');">
												Delete
											</a>
											<a class="btn btn-sm btn-info mb-3"
												href="<?= base_url('user/detail/') . $d['id_disposisi']; ?>">
												Detail
											</a>
											<a class="btn btn-sm btn-warning mb-3" 
												href="<?= base_url('user/print/') . $d['id_disposisi']; ?>">
												Print
											</a>
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


<!-- Button trigger modal -->
