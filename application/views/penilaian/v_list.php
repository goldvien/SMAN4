<?php
	if(@$index){
		$title = "Penilaian untuk Kompetensi 1";
		$category = "Mengenal Karakteristik Peserta Didik.";
		$bagian = 1;
		$maks = 12;
	}
	if(@$index1){
		$title = "Penilaian untuk Kompetensi 2";
		$category = "Menguasai teori belajar dan prinsip-prinsip pembelajaran yang mendidik.";
		$bagian = 2;
		$maks = 12;
	}
	if(@$index2){
		$title = "Penilaian untuk Kompetensi 3";
		$category = "Pengembangan Kurikulum.";
		$bagian = 3;
		$maks = 8;
	}
	if(@$index3){
		$title = "Penilaian untuk Kompetensi 4";
		$category = "Kegiatan Pembelajaran yang Mendidik.";
		$bagian = 4;
		$maks = 22;
	}
	if(@$index4){
		$title = "Penilaian untuk Kompetensi 5";
		$category = "Memahami dan mengembangkan potensi.";
		$bagian = 5;
		$maks = 14;
	}
	if(@$index5){
		$title = "Penilaian untuk Kompetensi 6";
		$category = "Komunikasi dengan peserta didik.";
		$bagian = 6;
		$maks = 12;
	}	
	if(@$index6){
		$title = "Penilaian untuk Kompetensi 7";
		$category = "Penilaian dan evaluasi.";
		$bagian = 7;
		$maks = 10;
	}
	if(@$index7){
		$title = "Penilaian untuk Kompetensi 8";
		$category = "Bertindak sesuai dengan norma agama, hukum, sosial dan kebudayaan nasional Indonesia.";
		$bagian = 8;
		$maks = 10;
	}
	if(@$index8){
		$title = "Penilaian untuk Kompetensi 9";
		$category = "Menunjukkan pribadi yang dewasa dan teladan.";
		$bagian = 9;
		$maks = "10";
	}
	if(@$index9){
		$title = "Penilaian untuk Kompetensi 10";
		$category = "Etos  kerja,  tanggung  jawab  yang  tinggi, dan  rasa  bangga menjadi guru.";
		$bagian = 10;
		$maks = 16;
	}
	if(@$index10){
		$title = "Penilaian untuk Kompetensi 11";
		$category = "Bersikap inklusif, bertindak objektif, serta tidak Diskriminatif.";
		$bagian = 11;
		$maks = 6;
	}
	if(@$index11){
		$title = "Penilaian untuk Kompetensi 12";
		$category = "Komunikasi  dengan  sesama  guru,  tenaga  kependidikan,  orang tua peserta didik, dan masyarakat.";
		$bagian = 12;
		$maks = 6;
	}
	if(@$index12){
		$title = "Penilaian untuk Kompetensi 13";
		$category = "Penguasaan materi, struktur, konsep, dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu.";
		$bagian = 13;
		$maks = 6;
	}
	if(@$index13){
		$title = "Penilaian untuk Kompetensi 14";
		$category = "Mengembangkan keprofesionalan melalui tindakan reflektif.";
		$bagian = 14;
		$maks = 12;
	}
?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="col-lg-12 bred hidden-print">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li class="active">Penilaian</li>        
			</ol>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title"><?= $title?></h4>
							<p class="category"><?= $category?></p>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<th>ID</th>
									<th>Indikator</th>
									<th> Tidak ada bukti<br><small>(Tidak terpenuhi)</small> </th>
									<th> Terpenuhi sebagian </th>
									<th> Seluruhnya terpenuhi </th>
								</thead>
								
								<tbody class="<?= $maks?>">
									<?php
									$i = 1;
									foreach($result as $row){?>
										<tr class="<?= $bagian ?>">
											<td><?= $i ?></td>
											<td><?= $row->indikator ?></td>
											<td class="text-center">
												<div class="checkbox icheck">
													<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nilai check" name="<?= $row->id_nilai?>" value="0" <?php echo (@$cek[$i-1]->nilai == 0) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nilai check" name="<?= $row->id_nilai?>" value="0" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
													</label>
												</div>
											</td>
											<td class="text-center">
												<div class="checkbox icheck">
													<label>
														<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nilai check" name="<?= $row->id_nilai?>" value="1" <?php echo (@$cek[$i-1]->nilai == 1) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nilai check" name="<?= $row->id_nilai?>" value="1" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
													</label>
												</div>
											</td>
											<td class="text-center">
												<div class="checkbox icheck">
													<label>
														<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nilai check" name="<?= $row->id_nilai?>" value="2" <?php echo (@$cek[$i-1]->nilai == 2) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nilai check" name="<?= $row->id_nilai?>" value="2" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } 
													$i++; ?>
													</label>
												</div>
											</td>
										</tr>
									<?php }?>
										<tr class="text-center">
											<td colspan="2"> Total skor untuk kompetensi 1 </td>
											<td class="total" colspan="3"><?php if(!empty($nilai[0])){ echo $nilai[0]->jumlah; }else{ echo "0";} ?> </td>
										</tr>
										<tr class="text-center">
											<td colspan="2"> Skor maksimum kompetensi 1 = jumlah indikator × 2 </td>
											<td colspan="3"> <?= $maks;?> </td>
										</tr>
										<tr class="text-center">
											<td colspan="2"> Persentase = (total skor/12) × 100% </td>
											<td class="persen" colspan="3"> <?php if(!empty($nilai[0])){ echo $nilai[0]->persentase; }else{ echo "0";} ?> </td>
										</tr>
										<tr class="text-center">
											<td colspan="2"> Nilai untuk kompetensi 1 : (0% < X ≤ 25% = 1; 25% < X ≤ 50% = 2;  50% < X ≤ 75% = 3; 75% < X ≤ 100% = 4)</td>
											<td class="akredi" colspan="3"> <?php if(!empty($nilai[0])){ echo $nilai[0]->total_nilai; }else{ echo "0";} ?> </td>
										</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="text-center page">
						<ul class="pagination">
							<li class="<?php if(@$index){echo 'active';}?>"><a href="<?= site_url("penilaian/index")."/".$id;?>"> 1 </a></li>
							<li class="<?php if(@$index1){echo 'active';}?>"><a href="<?= site_url("penilaian/index1")."/".$id;?>"> 2 </a></li>
							<li class="<?php if(@$index2){echo 'active';}?>"><a href="<?= site_url("penilaian/index2")."/".$id;?>"> 3 </a></li>
							<li class="<?php if(@$index3){echo 'active';}?>"><a href="<?= site_url("penilaian/index3")."/".$id;?>"> 4 </a></li>
							<li class="<?php if(@$index4){echo 'active';}?>"><a href="<?= site_url("penilaian/index4")."/".$id;?>"> 5 </a></li>
							<li class="<?php if(@$index5){echo 'active';}?>"><a href="<?= site_url("penilaian/index5")."/".$id;?>"> 6 </a></li>
							<li class="<?php if(@$index6){echo 'active';}?>"><a href="<?= site_url("penilaian/index6")."/".$id;?>"> 7 </a></li>
							<li class="<?php if(@$index7){echo 'active';}?>"><a href="<?= site_url("penilaian/index7")."/".$id;?>"> 8 </a></li>
							<li class="<?php if(@$index8){echo 'active';}?>"><a href="<?= site_url("penilaian/index8")."/".$id;?>"> 9 </a></li>
							<li class="<?php if(@$index9){echo 'active';}?>"><a href="<?= site_url("penilaian/index9")."/".$id;?>"> 10 </a></li>
							<li class="<?php if(@$index10){echo 'active';}?>"><a href="<?= site_url("penilaian/index10")."/".$id;?>"> 11 </a></li>
							<li class="<?php if(@$index11){echo 'active';}?>"><a href="<?= site_url("penilaian/index11")."/".$id;?>"> 12 </a></li>
							<li class="<?php if(@$index12){echo 'active';}?>"><a href="<?= site_url("penilaian/index12")."/".$id;?>"> 13 </a></li>
							<li class="<?php if(@$index13){echo 'active';}?>"><a href="<?= site_url("penilaian/index13")."/".$id;?>"> 14 </a></li>
							<li><a href="<?= site_url("penilaian/index14")."/".$id;?>"> Lampiran C1 </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>