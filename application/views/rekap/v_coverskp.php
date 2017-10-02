<div class="content" style="border:3px solid black;">
	<div class="top-cov text-center" style="margin-top:100px;">
		<img src="<?php echo base_url('media')?>/assets/img/pancasila.png" alt="pancasila" width="300px">
		<h5> PENILAIAN PRESTASI KERJA </h5>
		<h5> PEGAWAI NEGERI SIPIL </h5>
	</div>
	
	<div class="body-cov text-center" style="margin-top:100px;">
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-striped">
				<tr>
					<td> Nama Guru </td>
					<td> : </td>
					<td> <?= $result->nama ?></td>
				</tr>

				<tr>
					<td> NIP </td>
					<td> : </td>
					<td> <?= $result->NIP ?></td>
				</tr>

				<tr>
					<td> Pangkat </td>
					<td> : </td>
					<td> <?= $result->nama_pangkat ?></td>
				</tr>

				<tr>
					<td> Jabatan </td>
					<td> : </td>
					<td> <?= $result->nama_jabatan ?></td>
				</tr>

				<tr>
					<td> Unit Kerja </td>
					<td> : </td>
					<td> <?= $result->nama_sekolah ?></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="footer-cov text-center" style="margin-top:50px;">
		<h5> Dinas Pendidikan </h5>
		<h5> <?= $result->kota ?> </h5>
		<h5> Tahun <?= date('Y'); ?> </h5>
	</div>
</div>