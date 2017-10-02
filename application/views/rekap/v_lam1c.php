<div class="content">
	<div class="text-center header margin-bot">
		<h4 class="title"> Rekap Hasil </h4>
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
				<table class="text-center" style="border:1px solid black; width:100%;">
					<tr style="border:1px solid black;">
						<td style="border:1px solid black;"> Periode Penilaian </td>
						<td style="border:1px solid black;"> Formatif </td>
						<td style="border:1px solid black; width:20px;"> V </td>
						<td style="border:1px solid black;"> Tahun </td>
					</tr>
					
					<tr style="border:1px solid black;">
						<td rowspan="2" style="border:1px solid black;"> Januari s.d. Desember 2014 </td>
						<td style="border:1px solid black;"> Sumatif </td>
						<td style="border:1px solid black; width:20px"> - </td>
						<td rowspan="2" style="border:1px solid black;"> 2014 </td>
					</tr>
					
					<tr style="border:1px solid black;">
						<td style="border:1px solid black;"> Kemajuan </td>
						<td style="border:1px solid black; width:20px"> - </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="content">
			<div class="card">
				<div class="content table-responsive table-full-width">
					<table class="table table-hover table-striped">
						<thead>
							<th> No </th>
							<th> Kompetensi</th>
							<th> Kurang </th>
							<th> Cukup </th>
							<th> Baik </th>
							<th> Sempurna </th>
						</thead>
						
						<tbody>
							<tr class="bg-green">
								<td colspan="1"> A </td>
								<td colspan="5"> Pedagogik </td>
							</tr>
							
							<?php					
							$i = 1;
							foreach($res as $row){?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $row->indikator ?></td>
								<td class="text-center">
									<div class="checkbox icheck">
										<?php if(@$cek[$i-1]->nilai == 1){ ?>
											<span class="circle"> 1 </span>
										<?php }else{ ?>
											<span> 1 </span>
										<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 2){ ?>
										<span class="circle"> 2 </span>
									<?php }else{ ?>
										<span> 2 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 3){ ?>
										<span class="circle"> 3 </span>
									<?php }else{ ?>
										<span> 3 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 4){ ?>
										<span class="circle"> 4 </span>
									<?php }else{ ?>
										<span> 4 </span>
									<?php } ?>
									</div>
								</td>
							</tr>
							<?php } ?>
							
							<tr class="bg-green">
								<td colspan="1"> B </td>
								<td colspan="5"> Kepribadian </td>
							</tr>
							
							<?php					
							$i = 1;
							foreach($res1 as $row){?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $row->indikator ?></td>
								<td class="text-center">
									<div class="checkbox icheck">
										<?php if(@$cek[$i-1]->nilai == 1){ ?>
											<span class="circle"> 1 </span>
										<?php }else{ ?>
											<span> 1 </span>
										<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 2){ ?>
										<span class="circle"> 2 </span>
									<?php }else{ ?>
										<span> 2 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 3){ ?>
										<span class="circle"> 3 </span>
									<?php }else{ ?>
										<span> 3 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 4){ ?>
										<span class="circle"> 4 </span>
									<?php }else{ ?>
										<span> 4 </span>
									<?php } ?>
									</div>
								</td>
							</tr>
							<?php } ?>
							
							<tr class="bg-green">
								<td colspan="1"> C </td>
								<td colspan="5"> Sosial </td>
							</tr>
							
							<?php					
							$i = 1;
							foreach($res2 as $row){?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $row->indikator ?></td>
								<td class="text-center">
									<div class="checkbox icheck">
										<?php if(@$cek[$i-1]->nilai == 1){ ?>
											<span class="circle"> 1 </span>
										<?php }else{ ?>
											<span> 1 </span>
										<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 2){ ?>
										<span class="circle"> 2 </span>
									<?php }else{ ?>
										<span> 2 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 3){ ?>
										<span class="circle"> 3 </span>
									<?php }else{ ?>
										<span> 3 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 4){ ?>
										<span class="circle"> 4 </span>
									<?php }else{ ?>
										<span> 4 </span>
									<?php } ?>
									</div>
								</td>
							</tr>
							<?php } ?>
							
							<tr class="bg-green">
								<td colspan="1"> D </td>
								<td colspan="5"> Profesional </td>
							</tr>
							
							<?php					
							$i = 1;
							foreach($res3 as $row){?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $row->indikator ?></td>
								<td class="text-center">
									<div class="checkbox icheck">
										<?php if(@$cek[$i-1]->nilai == 1){ ?>
											<span class="circle"> 1 </span>
										<?php }else{ ?>
											<span> 1 </span>
										<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 2){ ?>
										<span class="circle"> 2 </span>
									<?php }else{ ?>
										<span> 2 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 3){ ?>
										<span class="circle"> 3 </span>
									<?php }else{ ?>
										<span> 3 </span>
									<?php } ?>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox icheck">
									<?php if(@$cek[$i-1]->nilai == 4){ ?>
										<span class="circle"> 4 </span>
									<?php }else{ ?>
										<span> 4 </span>
									<?php } ?>
									</div>
								</td>
							</tr>
							<?php } ?>
							
							<tr class="text-center">
								<td colspan="2"> Jumlah (Hasil Penilaian Kinerja Guru) </td>
								<td class="jml" colspan="4"> 
									<?php if(!empty($nilai[0])){ echo $nilai[0]->jumlah; }else{ echo "0";} ?> 
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<div>
	</div>
</div>