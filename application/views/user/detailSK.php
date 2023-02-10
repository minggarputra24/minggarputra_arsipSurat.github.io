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
                <?php foreach ($detail as $sk) : ?>
                    <tr>
                        <th>Tanggal
                        </th>
                        <td>: <?= date('d M Y', strtotime($sk->tgl)); ?></td>
                    </tr>

                    <tr>
                        <th>No. Agenda
                        </th>
                        <td>: <?php echo $sk->no_agenda; ?></td>
                    </tr>

                    <tr>
                        <th>No. Surat
                        </th>
                        <td>: <?php echo $sk->no_surat; ?></td>
                    </tr>

                    <tr>
                        <th>Tanggal Surat Keluar
                        </th>
                        <!-- <td>: <?php echo $sk->tgl_suratKeluar; ?></td> -->
                        <td>: <?= date('d M Y', strtotime($sk->tgl_suratKeluar)); ?></td>
                    </tr>

                    <tr>
                        <th>Pengirim
                        </th>
                        <td>: <?php echo $sk->pengirim; ?></td>
                    </tr>

                    <tr>
                        <th>Penerima
                        </th>
                        <td>: <?php echo $sk->penerima; ?></td>
                    </tr>

                    <tr>
                        <th>Perihal
                        </th>
                        <td>: <?php echo $sk->perihal; ?></td>
                    </tr>

                    <tr>
                        <th>Lampiran
                        </th>

                        <td>: <a href="<?= base_url('./uploads/') . $sk->lampiran; ?>">
                                <?= $sk->lampiran; ?>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </table>

            <a class="btn btn-primary" href="<?= base_url('user/suratKeluar'); ?>"> Kembali</a>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<!-- Modal Tambah Surat Keluar -->

</div>