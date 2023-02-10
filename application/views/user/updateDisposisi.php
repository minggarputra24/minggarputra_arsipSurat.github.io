<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-3 text-gray-800"><i class="fas fa-inbox"></i> <?= $title; ?></h1>

	<div class="row">
		<div class="col-lg-8">
			<?= $this->session->flashdata('message'); ?>
		</div>

	</div>

	<hr class="border border-dark border-5 mt-1">

	<?= form_open_multipart('user/updateDisposisi/' . $disposisi['id_disposisi']); ?>
	<form method="post" action="">

		<input type="hidden" name="id_disposisi" id="id_disposisi" value="<?= $disposisi['id_disposisi']; ?>">

		<div class="form-group row">
			<label for="id_suratMasuk" class="col-sm-2 col-form-label">No. Surat</label>
			<div class="col-sm-10">
				<select name="id_suratMasuk" id="id_suratMasuk" class="form-control">
					<?php foreach ($suratMasuk as $sm) : ?>
					<?php if ($sm['id'] == $disposisi['id_suratMasuk']) : ?>
					<option value="<?= $sm['id'] ?>" selected><?= $sm['no_surat'] ?></option>
					<?php else : ?>
					<option value="<?= $sm['id'] ?>"><?= $sm['no_surat'] ?></option>
					<?php endif; ?>
					<?php endforeach; ?>
				</select>
				<?= form_error('id_suratMasuk', '<small class="text-danger pl-3">', ' </small>'); ?>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="diterima_tgl">Diterima Tanggal</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="diterima_tgl" name="diterima_tgl"
					value="<?php echo $disposisi['diterima_tgl']; ?>">
				<?= form_error('diterima_tgl', '<small class="text-danger pl-3">', ' </small>'); ?>
			</div>
		</div>

		<!-- <div class="form-group row">
			<label class="col-sm-2 col-form-label" for="no_agenda">No. Agenda</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="no_agenda" name="no_agenda"
					value="<?php echo $disposisi['no_agenda']; ?>">
				<?= form_error('no_agenda', '<small class="text-danger pl-3">', ' </small>'); ?>
			</div>
		</div> -->

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="diteruskan_kepada">Diteruskan Kepada</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="diteruskan_kepada" name="diteruskan_kepada"
					value="<?php echo $disposisi['diteruskan_kepada']; ?>">
				<?= form_error('diteruskan_kepada', '<small class="text-danger pl-3">', ' </small>'); ?>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" for="isi_disposisi">Isi Disposisi</label>
			<div class="col-sm-10">
				<select name="isi_disposisi" id="isi_disposisi" class="form-control">
					<?php foreach ($isi_dispo as $dispo) : ?>
					<?php if ($dispo == $disposisi['isi_disposisi']) : ?>
					<option value="<?= $dispo ?>" selected><?= $dispo ?></option>
					<?php else : ?>
					<option value="<?= $dispo ?>"><?= $dispo ?></option>
					<?php endif; ?>
					<?php endforeach; ?>
				</select>
				<?= form_error('isi_disposisi', '<small class="text-danger pl-3">', ' </small>'); ?>
			</div>
		</div>

		<hr>
		<button type="submit" name="update" class="btn btn-primary mb-3">Simpan</button>

		<a href="<?= base_url('user/disposisi'); ?>" class="btn btn-danger mb-3">
			Batal
		</a>
	</form>
</div>
<!-- /.container-fluid -->
</div>
