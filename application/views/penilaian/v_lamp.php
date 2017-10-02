<div class="content-wrapper">
	<section class="content-header">
		<div class="col-lg-12 bred">
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
							<h4 class="title"> Lampiran 1C </h4>
							<p class="category"> Rekap Hasil Penilaian Kinerja Guru Kelas/Mata Pelajaran</p>
						</div>
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
									foreach($result as $row){?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $row->indikator ?></td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" <?php echo (@$cek[$i-1]->nilai == 1) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" <?php echo (@$cek[$i-1]->nilai == 2) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" <?php echo (@$cek[$i-1]->nilai == 3) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" <?php echo (@$cek[$i-1]->nilai == 4) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } 
													$i++;
													?>
												</label>
											</div>
										</td>
									</tr>
									<?php $i++; } ?>
									
									<tr class="bg-green">
										<td colspan="1"> B </td>
										<td colspan="5"> Kepribadian </td>
									</tr>
									
									<?php					
									$i = 1;
									foreach($result1 as $row){?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $row->indikator ?></td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" <?php echo (@$cek[$i-1]->nilai == 1) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" <?php echo (@$cek[$i-1]->nilai == 2) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" <?php echo (@$cek[$i-1]->nilai == 3) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" <?php echo (@$cek[$i-1]->nilai == 4) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } 
													$i++;
													?>
												</label>
											</div>
										</td>
									</tr>
									<?php $i++; } ?>
									
									<tr class="bg-green">
										<td colspan="1"> C </td>
										<td colspan="5"> Sosial </td>
									</tr>
									
									<?php					
									$i = 1;
									foreach($result2 as $row){?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $row->indikator ?></td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" <?php echo (@$cek[$i-1]->nilai == 1) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" <?php echo (@$cek[$i-1]->nilai == 2) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" <?php echo (@$cek[$i-1]->nilai == 3) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" <?php echo (@$cek[$i-1]->nilai == 4) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } 
													$i++;
													?>
												</label>
											</div>
										</td>
									</tr>
									<?php $i++; } ?>
									
									<tr class="bg-green">
										<td colspan="1"> D </td>
										<td colspan="5"> Profesional </td>
									</tr>
									
									<?php					
									$i = 1;
									foreach($result3 as $row){?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $row->indikator ?></td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" <?php echo (@$cek[$i-1]->nilai == 1) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="1" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" <?php echo (@$cek[$i-1]->nilai == 2) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="2" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" <?php echo (@$cek[$i-1]->nilai == 3) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="3" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } ?>
												</label>
											</div>
										</td>
										<td class="text-center">
											<div class="checkbox icheck">
												<label>
													<?php if(!empty($cek[$i-1])){ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" <?php echo (@$cek[$i-1]->nilai == 4) ? 'checked' : '';?> <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?> data-toggle="checkbox">
													<?php }else{ ?>
														<input type="radio" class="nillamp check" name="<?= $row->id_komp?>" value="4" data-toggle="checkbox" <?php echo ($this->session->userdata('level') == 3) ? 'disabled' : '';?>>
													<?php } 
													$i++;
													?>
												</label>
											</div>
										</td>
									</tr>
									<?php $i++; } ?>
									
									<tr class="text-center">
										<td colspan="2"> Jumlah (Hasil Penilaian Kinerja Guru) </td>
										<td class="jml" colspan="4"> <?php if(!empty($nilai[0])){ echo $nilai[0]->jumlah; }else{ echo "0";} ?> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="text-center page">
						<ul class="pagination">
							<li><a href="<?= site_url("penilaian/index")."/".$id_guru;?>"> 1 </a></li>
							<li><a href="<?= site_url("penilaian/index1")."/".$id_guru;?>"> 2 </a></li>
							<li><a href="<?= site_url("penilaian/index2")."/".$id_guru;?>"> 3 </a></li>
							<li><a href="<?= site_url("penilaian/index3")."/".$id_guru;?>"> 4 </a></li>
							<li><a href="<?= site_url("penilaian/index4")."/".$id_guru;?>"> 5 </a></li>
							<li><a href="<?= site_url("penilaian/index5")."/".$id_guru;?>"> 6 </a></li>
							<li><a href="<?= site_url("penilaian/index6")."/".$id_guru;?>"> 7 </a></li>
							<li><a href="<?= site_url("penilaian/index7")."/".$id_guru;?>"> 8 </a></li>
							<li><a href="<?= site_url("penilaian/index8")."/".$id_guru;?>"> 9 </a></li>
							<li><a href="<?= site_url("penilaian/index9")."/".$id_guru;?>"> 10 </a></li>
							<li><a href="<?= site_url("penilaian/index10")."/".$id_guru;?>"> 11 </a></li>
							<li><a href="<?= site_url("penilaian/index11")."/".$id_guru;?>"> 12 </a></li>
							<li><a href="<?= site_url("penilaian/index12")."/".$id_guru;?>"> 13 </a></li>
							<li><a href="<?= site_url("penilaian/index13")."/".$id_guru;?>"> 14 </a></li>
							<li class="active"><a href="<?= site_url("penilaian/index14")."/".$id_guru;?>"> Lampiran C1 </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>