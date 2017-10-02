<div class="content">
	<div class="text-center header margin-bot">
		<h4 class="title"> Lampiran 1D</h4>
		<p class="category">Format Penghitungan Angka Kredit PK Guru Kelas/Mata Pelajaran</p>
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
					<td> NIP </td>
					<td> : </td>
					<td> <?= $result->NIP ?></td>
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
					<td> Masa Kerja </td>
					<td> : </td>
					<td> 17 Tahun 8 Bulan </td>
				</tr>
				<tr>
					<td> Jenis Kelamin </td>
					<td> : </td>
					<td> <?= ($result->jk=="L")?"Laki-laki":"Perempuan";?></td>
				</tr>
				<tr>
					<td> Pendidikan  </td>
					<td> : </td>
					<td> <?= $result->nama_pendidikan?> </td>
				</tr>
				<tr>
					<td> Program Keahlian yang diampu  </td>
					<td> : </td>
					<td> <?= $result->nama_matpel?> </td>
				</tr>
				<tr>
					<td colspan="3"> <hr> </td>
				</tr>
				<tr>
					<td> Nama Instansi/Sekolah </td>
					<td> : </td>
					<td> <?= $result->nama_sekolah ?></td>
				</tr>
				<tr>
					<td> Alamat </td>
					<td> : </td>
					<td> <?= $result->alamat ?></td>
				</tr>
				<tr>
					<td> Kelurahan </td>
					<td> : </td>
					<td> <?= $result->kelurahan ?></td>
				</tr>
				<tr>
					<td> Kecamatan </td>
					<td> : </td>
					<td> <?= $result->kecamatan ?></td>
				</tr>
				<tr>
					<td> Kabupaten/Kota </td>
					<td> : </td>
					<td> <?= $result->kota ?></td>
				</tr>
				<tr>
					<td> Provinsi </td>
					<td> : </td>
					<td> <?= $result->provinsi ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	
	<div class="row">
		<div class="content">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-hover table-striped">
					<tr>
						<td> Nilai PK Guru Kelas / Mata Pelajaran </td>
						<td> 56 </td>
					</tr>
					
					<tr>
						<td> 
							Konversi nilai PK Guru ke dalam skala 0 - 100 sesuai permenneg PAN dan RM <br>
							No. 16 Tahun 2009
						</td>
						<td> 100 </td>
					</tr>
					
					<tr>
						<td> 
							Berdasarkan hasil konversi ke dalam skala nilai sesuai dengan peraturan tersebbut, selanjutnya ditetapkan sebutan dan persentase angka kreditnya
						</td>
						<td> Amat Baik <br> 125% </td>
					</tr>
					
					<tr>
						<td rowspan="2"> 
							Perolehan angka kredit (untuk pembelajaran) yang terhitung
						</td>
						<td rowspan="2"> 38.74 </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>