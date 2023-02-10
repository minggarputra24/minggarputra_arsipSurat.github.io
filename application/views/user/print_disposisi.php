<!DOCTYPE html>
<html>

<body>

	<br>
	<center>
		<p>
			<font face="Arial" size="3">PEMERINTAH PROVINSI JAWA TIMUR</font>
		</p>
	</center>
	<center><b><u>
				<font face="Arial" size="5">DINAS PERHUBUNGAN</font>
			</u></b></center>
	<br>
	<center><b>
			<font face="Arial" size="4">UPT PELAYANAN JASA KEBANDARUDARAAN</font>
		</b></center>
	<center><b>
			<font face="Arial" size="4">ABDULRACHMAN SALEH</font>
		</b></center>
	<br>
	<center><b>
			<font face="Arial" size="4">LEMBAR DISPOSISI</font>
		</b></center>
	
	<table border="1" width="100%">
		<tr>
			<th style="text-align:left">Surat Dari</th>
			<?php
            $no= 1;
            foreach($printDisposisi as $pd):?>

			<td><?php echo $pd->pengirim?></td>
			<?php endforeach ?>

			<th style="text-align:left">Diterima Tanggal</th>
			<?php
            $no= 1;
            foreach($printDisposisi as $pd):?>

			<td><?php echo $pd->diterima_tgl?></td>
			<?php endforeach ?>
		</tr>
		<!-- </table> -->

		<tr>
			<th style="text-align:left">Tanggal Surat</th>
			<?php
            $no= 1;
            foreach($printDisposisi as $pd):?>

			<td><?= date('d M Y', strtotime($pd->tgl_suratMasuk)); ?></td>
			<?php endforeach ?>

			<th style="text-align:left">Nomor Agenda</th>
			<?php
            $no= 1;
            foreach($printDisposisi as $pd):?>

			<td><?php echo $pd->no_agenda?></td>
			<?php endforeach ?>
		</tr>
		<!-- </table> -->

		<tr>
			<th style="text-align:left">Nomor Surat</th>
			<?php
            $no= 1;
            foreach($printDisposisi as $pd):?>

			<td><?php echo $pd->no_surat?></td>
			<?php endforeach ?>
		</tr>
		<tr>
			<th style="text-align:left">Perihal</th>
			<?php
            $no= 1;
            foreach($printDisposisi as $pd):?>

			<td><?php echo $pd->perihal?></td>
			<?php endforeach ?>
		</tr>
	</table>

	<br>
	<table border="1" width="100%">
		<tr>
			<th style="text-align:left">Diteruskan Kepada :</th>
		</tr>
		<?php
        $no= 1;
        foreach($printDisposisi as $pd):?>
		<tr>
			<td><?php echo $pd->diteruskan_kepada?></td>
		</tr>
		<?php endforeach ?>
	</table>
	<br>
	<table border: 1px solid black;>
		<tr>
			<center><b><u>
						<font face="Arial" size="5">ISI DISPOSISI</font>
					</u></b></center>
		</tr>
		<?php
        $no= 1;
        foreach($printDisposisi as $pd):?>
		<tr>
			<h3 style="text-align:center"><?php echo $pd->isi_disposisi?></h3>
		</tr>
		<?php endforeach ?>
	</table>
	<script type="text/javascript">
		window.print();

	</script>
</body>

</html>
