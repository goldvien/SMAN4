<div class="content">
	<div class="text-center header margin-bot">
		<h4 class="title"> Laporan Dan Evaluasi</h4>
		<p class="category">Penilaian Kinerja Guru Kelas/Guru Mata Pelajaran</p>
	</div>
	
	<div class="row">
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-striped">
			<?php 
				$i=1;
				foreach($guru as $result){
			?>
				<tr>
					<td> Nama Guru </td>
					<td> : </td>
					<td> <?= $result->nama ?></td>
				</tr>
				<tr>
					<td> NIP/Nomor Seri Karpeg </td>
					<td> : </td>
					<td> <?= $result->NIP ?> / <?= $result->nokarpeg ?> </td>
				</tr>
				<tr>
					<td> Pangkat /Golongan Ruang </td>
					<td> : </td>
					<td>  <?= $result->nama_pangkat ?> </td>
				</tr>
				<tr>
					<td> Terhitung Mulai Tanggal </td>
					<td> : </td>
					<td> <?= $result->tgl_persetujuan?> </td>
				</tr>
				<tr>
					<td> NUPTK / NRG </td>
					<td> : </td>
					<td> <?= $result->nuptk?> </td>
				</tr>
				<tr>
					<td> Nama sekolah dan alamat </td>
					<td> : </td>
					<td> <?= $result->nama_sekolah?> <br> <?= $result->alamat?></td>
				</tr>
				<tr>
					<td> Tanggal mulai bekerja  </td>
					<td> : </td>
					<td> <?= $result->tmtjabatan?> </td>
				</tr>
				<tr>
					<td> Periode penilaian  </td>
					<td> : </td>
					<td> <?= $result->masa_nilai_awal?> s.d. <?= $result->masa_nilai_akhir?> </td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	
	<div class="row card marg">
		<div class="text-center header margin-bot">
			<h5 class="title"> Persetujuan </h5>
			<p class="category">(Persetujuan ini harus ditandatangani oleh penilai dan guru yang dinilai)</p>
		</div>
		<div class="content col-md-10 col-md-offset-1">
			<p>Penilai  dan  guru  yang  dinilai  menyatakan  telah  membaca  dan mamahami  semua  aspek  yang ditulis/dilaporkan dalam format ini dan menyatakan setuju.</p>											
		</div>
	</div>
</div>