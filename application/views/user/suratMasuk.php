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

            <div class="table-responsive">
                <hr style="margin:0px">
                <br>
                <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSmModal"> -->
                <a href="<?= base_url('user/tambahSuratMasuk') ?>" class="btn btn-primary mb-3">
                    <i class="fas fa-envelope-open-text"></i>
                    Tambah Surat Masuk
                </a>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">No. Surat</th>
                                        <th class="text-center">Tgl Surat Masuk</th>
                                        <th class="text-center">Pengirim</th>
                                        <th class="text-center">Penerima</th>
                                        <th class="text-center">Perihal</th>
                                        <th class="text-center">Disposisi</th>
                                        <!-- <th class="text-center">Lampiran</th> -->
                                        <th class="text-center col-sm-4 col-md-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($surat_masuk as $sm) : ?>
                                        <tr>
                                            <td scope="row" class="text-center"><?= $i; ?></td>
                                            <td class="text-center"><?= $sm['no_surat']; ?></td>
                                            <td class="text-center"><?= date('d M Y', strtotime($sm['tgl_suratMasuk'])); ?></td>
                                            <td class="text-center"><?= $sm['pengirim']; ?></td>
                                            <td class="text-center"><?= $sm['penerima']; ?></td>
                                            <td class="text-center"><?= $sm['perihal']; ?></td>
                                            <td class="text-center"><?php
                                                                    if ($sm['diteruskan_kepada'] == NULL) {
                                                                        echo "<strong>-</strong>";
                                                                    } else {
                                                                        echo $sm['diteruskan_kepada'];
                                                                    } ?></td>
                                            <!-- <td class="text-center">
                                                <a href="<?= base_url('./assets/uploads/suratMasuk/') . $sm['lampiran']; ?>">
                                                    <?= $sm['lampiran']; ?>
                                                </a>
                                            </td> -->
                                            <td class="text-center">
                                                <a href="<?= base_url() ?>user/updateSM/<?= $sm['id']; ?>" class="btn btn-sm btn-success mb-3">Update</a>
                                                <a class="btn btn-sm btn-info mb-3" href="<?= base_url('user/DetailsuratMasuk/') . $sm['id']; ?>">Detail</a>
                                                <a class="btn btn-sm btn-danger mb-3" href="<?= base_url('user/deleteSM/') . $sm['id']; ?>" onclick="return confirm('Yakin Data ini akan dihapus?');">Delete</a>
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
<!-- </div> -->
<div>