<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>


    </h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" roles="alert">
                    <?= validation_errors(); ?></div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- Button tambah Data User -->
            <table class="table table-hover table-striped table-bordered">
                <?php foreach ($detail as $dt) : ?>
                    <tr>
                        <th>Name : </th>
                        <td><?php echo $dt->name; ?></td>
                    </tr>

                    <tr>
                        <th>Username : </th>
                        <td><?php echo $dt->username; ?></td>
                    </tr>

                    <tr>
                        <th>Foto Profile: </th>
                        <td><?php echo $dt->image; ?></td>
                    </tr>

                    <tr>
                        <th>Password : </th>
                        <td><?php echo $dt->password; ?></td>
                    </tr>

                    <tr>
                        <th>Level : </th>
                        <td>
                            <?php if ($dt->role_id == 1) {
                                echo "Administrator";
                            } else {
                                echo "User";
                            }; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Status : </th>
                        <td>
                            <?php if ($dt->is_active == 1) {
                                echo "Aktif";
                            } else {
                                "Tidak Aktif";
                            } ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Tanggal Daftar : </th>
                        <td><?php echo date('d F Y', $dt->date_created); ?></td>
                    </tr>

                <?php endforeach; ?>
            </table>

            <a class="btn btn-primary" href="<?= base_url('user/users'); ?>"> Kembali</a>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<!-- Modal Tambah Surat Keluar -->

</div>