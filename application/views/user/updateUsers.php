<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-3 text-gray-800">
		<i class="fas fa-users">
		</i> <?= $title; ?>
	</h1>

	<div class="row">
		<div class="col-lg-8">
			<?= $this->session->flashdata('message'); ?>
		</div>

	</div>

	<hr class="border border-dark border-5 mt-1">


	<?php foreach($users as $u) :?>
	<form method="post" action="<?php echo base_url('user/update_aksi_users'); ?>">

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="<?php echo $u->id ?>">
				<input type="text" class="form-control" name="name" value="<?php echo $u->name ?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="username" value="<?php echo $u->username; ?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Image</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="image" value="<?php echo $u->image; ?>">
			</div>
		</div>

		<!-- <div class="form-group row">
			<label class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="password" value="<?php echo $u->password; ?>" readonly>
			</div>
		</div> -->

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Level</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="role_id" value="<?php echo $u->role_id; ?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="is_active" value="<?php echo $u->is_active; ?>">
			</div>
		</div>

		<!-- <div class="form-group row">
			<label class="col-sm-2 col-form-label">Tanggal Daftar</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" name="date_created" id="date_created" value="<?php echo $u->date_created; ?>" readonly>
			</div>
		</div> -->

		<hr>
		<button type="submit" class="btn btn-success mb-3">Update</button>

		<a href="<?= base_url('user/users'); ?>" class="btn btn-danger mb-3">
			Batal
		</a>
	</form>
	<?php endforeach; ?>
	<!-- <input type="hidden" name="id" value="<?= $disposisi['id_disposisi'];?>"> -->





	<!-- <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Lampiran</label>
        <div class="col-sm-10">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Silahkan Masukkan File</label>
            </div>
        </div>
    </div> -->



</div>
<!-- /.container-fluid -->
</div>
