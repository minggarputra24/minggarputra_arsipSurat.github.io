<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-info-circle"></i>
        <?= $title; ?>
    </h1>
    <hr class="border border-dark border-5 mt-1">

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" roles="alert">
                    <?= validation_errors(); ?></div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- Button tambah Surat Dispo -->
            <table class="table table-hover table-striped table-bordered">
                <?php foreach ($detail as $sm) : ?>
                    <tr>
                        <th>Tanggal
                        </th>
                        <td>: <?= date('d M Y', strtotime($sm->tgl)); ?></td>
                    </tr>

                    <tr>
                        <th>No. Agenda
                        </th>
                        <td>: <?php echo $sm->no_agenda; ?></td>
                    </tr>

                    <tr>
                        <th>No. Surat
                        </th>
                        <td>: <?php echo $sm->no_surat; ?></td>
                    </tr>

                    <tr>
                        <th>Tanggal Surat Masuk
                        </th>
                        <!-- <td>: <?php echo $sm->tgl_suratMasuk; ?></td> -->
                        <td>: <?= date('d M Y', strtotime($sm->tgl_suratMasuk)); ?></td>
                    </tr>

                    <tr>
                        <th>Pengirim
                        </th>
                        <td>: <?php echo $sm->pengirim; ?></td>
                    </tr>

                    <tr>
                        <th>Penerima
                        </th>
                        <td>: <?php echo $sm->penerima; ?></td>
                    </tr>

                    <tr>
                        <th>Perihal
                        </th>
                        <td>: <?php echo $sm->perihal; ?></td>
                    </tr>

                    <tr>
                        <th>Disposisi</th>
                        <td>: <?php
                                if ($sm->diteruskan_kepada == NULL) {
                                    echo "<strong>-</strong>";
                                } else {
                                    echo $sm->diteruskan_kepada;
                                } ?></td>
                    </tr>

                    <tr>
                        <th>Lampiran
                        </th>

                        <td>: <a href="<?= base_url('./assets/uploads/suratMasuk/') . $sm->lampiran; ?>">
                                <?= $sm->lampiran; ?>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </table>

            <a class="btn btn-primary" href="<?= base_url('user/suratMasuk'); ?>"> Kembali</a>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<!-- Modal Tambah Surat Keluar -->

</div>