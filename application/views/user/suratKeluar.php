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
                <a href="<?= base_url('user/tambahSuratKeluar') ?>" class="btn btn-primary mb-3">
                    <i class="fas fa-envelope-open-text"></i>
                    Tambah Surat Keluar
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
                                        <th class="text-center">Tgl Surat Keluar</th>
                                        <th class="text-center">Pengirim</th>
                                        <th class="text-center">Penerima</th>
                                        <th class="text-center">Perihal</th>
                                        <!-- <th class="text-center">Lampiran</th> -->
                                        <th class="text-center col-sm-4 col-md-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($surat_keluar as $sk) : ?>
                                        <tr>
                                            <td scope="row" class="text-center"><?= $i; ?></td>
                                            <td class="text-center"><?= $sk['no_surat']; ?></td>
                                            <td class="text-center"><?= date('d M Y', strtotime($sk['tgl_suratKeluar'])); ?></td>
                                            <td class="text-center"><?= $sk['pengirim']; ?></td>
                                            <td class="text-center"><?= $sk['penerima']; ?></td>
                                            <td class="text-center"><?= $sk['perihal']; ?></td>
                                            <!-- <td class="text-center">
                                                <a href="<?= base_url('./uploads/') . $sk['lampiran']; ?>">
                                                    <?= $sk['lampiran']; ?>
                                                </a>
                                            </td> -->
                                            <td class="text-center">
                                                <a href="<?= base_url() ?>user/updateSuratKeluar/<?= $sk['id_suratKeluar']; ?>" class="btn btn-sm btn-success mb-3">Update</a>
                                                <a class="btn btn-sm btn-info mb-3" href="<?= base_url('user/DetailsuratKeluar/') . $sk['id_suratKeluar']; ?>">Detail</a>
                                                <a class="btn btn-sm btn-danger mb-3" href="<?= base_url('user/deleteSK/') . $sk['id_suratKeluar']; ?>" onclick="return confirm('Yakin Data ini akan dihapus?');">Delete</a>
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