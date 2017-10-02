<div class="content-wrapper">
	<section class="content-header">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li class="active">Data Instansi</li>        
			</ol>
		</div>
	</section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<section class="col-md-12">
					<div class="tabs tabs-style-fillup">
						<nav class="row col-md-8">
							<ul>
								<li><a href="#section-underline-1" class="icon icon-port fa-2x"><span>Data Guru</span></a></li>
								<li><a href="#section-underline-2" class="icon icon-display fa-2x"><span>Data Penilai</span></a></li>
								<li><a href="#section-underline-3" class="icon icon-university fa-2x"><span>Data Sekolah</span></a></li>
							</ul>
						</nav>
						
						<div class="row col-md-12 content-wrap">
							<section id="section-underline-1">
								<div class="card">
									<div class="header bar sisi-k">
										<h4 class="title">Data Guru</h4>
										<p class="category">Data Guru PKG SMAN 4 Bandung</p>
									</div>
									<div class="content">
										<?php if($this->session->userdata('level')<=1){?>
											<div class="row sisi-k">
												<button id="tambahBtn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="tambah_guru()">Tambah</button>
											</div>
										<?php } ?>
										
										<div class="row table-responsive padd">
											<table id="data-guru" class="mdl-data-table" cellspacing="0" cellpadding="0" width="100%">
												<thead>
													<th>ID</th>
													<th>NIP</th>
													<th>Nama</th>
													<th>Tempat, Tgl Lahir</th>
													<th>Jenis Kelamin</th>
													<th>Pangkat Gol.Ruang</th>
													<th>Jabatan</th>
													<th><i class="fa fa-exclamation-triangle"></i> Actions</th>
												</thead>
												<tbody>
													
												</tbody>
											</table>
										</div>	
									</div>
								</div>
							</section>
							
							<section id="section-underline-2">
								<div class="card">
									<div class="fresh-table toolbar-color-red full-screen-table">
										<div class="toolbar">
											<button id="freshBtn" class="btn btn-default"><i class="fa fa-refresh"></i></button>
										</div>
										
										<table id="fresh-table" class="table" cellspacing="0" width="100%">
											<thead>
												<th data-field="id">ID</th>
												<th data-field="nip" data-sortable="true">NIP</th>
												<th data-field="nama" data-sortable="true">Nama Penilai PKG</th>
												<th data-field="pangkat" data-sortable="true">Pangkat/Gol/Ruang</th>
												<th data-field="jabatan" >Jabatan</th>
												<th data-field="Unit" >Unit Kerja</th>
												<?php if($this->session->userdata('level')==1){?>
													<th data-field="actions" data-events="operateEvents">Actions</th>
												<?php }?>
											</thead>
											<tbody>
												<?php
												$i = 1;
												foreach($result as $b){
												?>
												<tr>
													<td><?= $i++;?></td>
													<td><a href="javascript:void(0)" onclick="get_data_guru('<?= $b->id_guru?>')"><?= $b->NIP;?></a></td>
													<td><?= $b->nama;?></td>
													<td><?= $b->nama_pangkat;?></td>
													<td><?= $b->nama_jabatan;?></td>
													<td><?= $b->nama_sekolah;?></td>
													<?php if($this->session->userdata('level')==1){?>
													<td>
														<a rel="tooltip" title="Edit" class="table-action edit" href="<?= site_url("DataGuru/edit/".$b->id_guru)?>">
															<i class="fa fa-edit"></i>
														</a>
														
														<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" onclick="delete_guru('<?= $b->NIP?>')">
															<i class="fa fa-remove"></i>
														</a>
													</td>
													<?php } ?>
												</tr>
												<?php }?>
											</tbody>
										</table>
									</div>
								</div>
							</section>
							
							<section id="section-underline-3">
								<div class="col-md-12">
									<?php
										$i = 1;
										foreach($res as $a){
									?>
									<div class="col-md-8 padd card">
										<div class="row">
											<div class="header sisi-k">
												<h4 class="title">Profil Sekolah</h4>
												<p class="category">Menampilkan Data Dari Instansi Terkait</p>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-2 col-xs-2 log-margin">
														<span class="pe-7s-culture fa-2x"></span>
													</div>
													<div class="col-md-9 col-xs-9 border"><?= $a->nama_sekolah;?></div>
												</div>
												
												<div class="row">
													<div class="col-md-2 col-xs-2 log-margin">
														<span class="pe-7s-map fa-2x"></span>
													</div>
													<div class="col-md-9 col-xs-9 border">
														<?= $a->alamat;?><br/>
														<?= $a->kelurahan;?><br/>
														<?= $a->kecamatan;?>
													</div>
												</div>
						
												<div class="row">
													<div class="col-md-2 col-xs-2 log-margin">
														<span class="pe-7s-map-marker fa-2x"></span>
													</div>
													<div class="col-md-9 col-xs-9 border"><?= $a->kota;?></div>
												</div>
												
												<div class="row">
													<div class="col-md-2 col-xs-2 log-margin">
														<span class="pe-7s-global fa-2x"></span>
													</div>
													<div class="col-md-9 col-xs-9 border"><?= $a->provinsi;?></div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-4 padd">
										<div class="card card-user">
											<div class="image">
												<img class="lazy" data-src="<?php echo base_url('media')?>/assets/img/wall-1.jpg" alt="Photo Sekolah">
											</div>
											<div class="content">
												<div class="author">
													<img class="avatar border-gray lazy" data-src="<?php echo base_url('media')?>/assets/img/faces/face-8.jpg" alt="..."/>
													<h4 class="title"><?= $a->nama_sekolah;?></h4>
												</div>
												<p class="description text-center"> "B E R S A H A J A"</p>
											</div>
										</div>
									</div>
									<?php }?>
								</div>
							</section>
						</div><!-- /content -->
					</div>
				</section>
			</div>
		</div>
	</section>
	
	<div id="tmbhData" class="modal fade" role="dialog">
		<div class="modal-dialog">
		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> </h4>
				</div>
				
				<div class="modal-body form">
					<form action="#" method="POST" id="form">
						<div class="alert alert-warning">
							<a type="button" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Warning!</strong> Pastikan Format Tanggal : YYYY-MM-DD
						</div>
						<input type="hidden" name="image" value="default-avatar.png">
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input angka" name="nip" pattern="-?[0-9]*(\.[0-9]+)?" id="nip">
								<label class="mdl-textfield__label" for="nip"> NIP </label>
								<span class="mdl-textfield__error"> Harap Masukan Angka! </span>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="nama" id="nama"/>
								<label class="mdl-textfield__label" for="nama"> NAMA </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="nuptk" id="nuptk"/>
								<label class="mdl-textfield__label" for="nuptk"> NUPTK </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="nrg" id="nrg"/>
								<label class="mdl-textfield__label" for="nrg"> NRG </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="nokarpeg" id="nokarpeg"/>
								<label class="mdl-textfield__label" for="nokarpeg"> NOKARPEG </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--5-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="tempat_lhr" id="tlh"/>
								<label class="mdl-textfield__label" for="tlh"> Tempat Lahir </label>
							</div>
							
							<div class="mdl-cell mdl-cell--5-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input date" name="tgl_lhr" id="tglh"/>
								<label class="mdl-textfield__label" for="tglh"> Tanggal Lahir </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="jenkel"> <h6>Jenis Kelamin</h6></label>
									<label class="radio"><input type="radio" name="jk" id="jenkel" value="L">Laki-Laki</label>
									<label class="radio"><input type="radio" name="jk" id="jenkel" value="P">Perempuan</label>
								</div>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="id_pendidikan"><h6> Pendidikan/Jurs </h6></label>
									<?php
										foreach($pendidikan as $b){
											$drop[$b->id_pendidikan] = $b->nama_pendidikan; 
										}
										echo form_dropdown("id_pendidikan",$drop, @$result->id_pendidikan, 'class="form-control" id="id_pendidikan"');
									?>
								</div>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="id_pangkat"><h6> Pangkat Gol.Ruang </h6></label>
									<?php
										foreach($pangkat as $b){
											$dropdown[$b->id_pangkat] = $b->nama_pangkat; 
										}
										echo form_dropdown("id_pangkat",$dropdown, @$result->id_pangkat, 'class="form-control" id="id_pangkat"');
									?>
								</div>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="id_jabatan"><h6> Jabatan </h6></label>
									<?php
										foreach($jabatan as $b){
											$dropdow[$b->id_jabatan] = $b->nama_jabatan; 
										}
										echo form_dropdown("id_jabatan",$dropdow, @$result->id_jabatan, 'class="form-control" id="id_jabatan"');
									?>
								</div>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="tmtjabatan" id="tmtjabatan"/>
								<label class="mdl-textfield__label" for="tmtjabatan"> TMT Jabatan </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input angka" name="masa_sk" pattern="-?[0-9]*(\.[0-9]+)?" id="masa_sk">
								<label class="mdl-textfield__label" for="masa_sk"> Masa SK </label>
								<span class="mdl-textfield__error"> Harap Masukan Angka! </span>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="id_tugas"><h6> Tugas Mengajar </h6></label>
									<?php
										foreach($matpel as $b){
											$dropdo[$b->id_tugas] = $b->nama_matpel; 
										}
										echo form_dropdown("id_tugas",$dropdo, @$result->id_tugas, 'class="form-control" id="id_tugas"');
									?>
								</div>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="id_sekolah"><h6>Unit Kerja</h6></label>
									<?php
										foreach($sekolah as $b){
											$dropd[$b->id_sekolah] = $b->nama_sekolah; 
										}
										echo form_dropdown("id_sekolah",$dropd, @$result->id_sekolah, 'class="form-control" id="id_sekolah"');
									?>
								</div>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="masa_nilai_awal" id="masa_nilai_awal"/>
								<label class="mdl-textfield__label" for="masa_nilai_awal"> Masa Awal Penilaian </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="masa_nilai_akhir" id="masa_nilai_akhir"/>
								<label class="mdl-textfield__label" for="masa_nilai_akhir"> Masa Akhir Penilaian </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" class="mdl-textfield__input" name="tgl_persetujuan" id="tgl_persetujuan"/>
								<label class="mdl-textfield__label" for="tgl_persetujuan"> Tgl Persetujuan </label>
							</div>
						</div>
						
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="id_level"><h6> Status </h6></label>
									<?php
										foreach($level as $b){
											$drow[$b->id_level] = $b->nama_level; 
										}
										echo form_dropdown("id_level",$drow, @$result->id_level, 'class="form-control" id="id_level"');
									?>
								</div>
							</div>
						</div>

						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop">
								<div class="form-group">
									<label for="penilai"><h6> Penilai </h6></label>
									<?php
										foreach($penilai as $b){
											$dron[$b->id_guru] = $b->nama; 
										}
										echo form_dropdown("id_penilai",$dron, @$result->id_penilai, 'class="form-control" id="penilai"');
									?>
								</div>
							</div>
						</div>
					</form>
				</div>
				
				<div class="modal-footer">
					<div class="pull-left">
						<button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-dismiss="modal">Close</button>
					</div>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id="btnSave" onclick="save()">Submit</button>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="modal fade" id="profilData" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"> Profil Guru </h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="card">
						<div class="image">
							<img class="lazy" data-src="<?php echo base_url('media')?>/assets/img/wall-1.jpg" alt="Photo Sekolah">
						</div>
						
						<div class="content card-user">
							<div class="author">
								<a href="#">
									<img class="avatar border-gray showimage" src="" alt="..."/>
									<h4 class="title titleNama"> </h4>
								</a>
							</div>
							<p class="description text-center"> <span class="tentang"></span></p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#awal"> Data Diri </a></li>
							<li><a data-toggle="tab" href="#kedua"> Data Alamat </a></li>
							<li><a data-toggle="tab" href="#ketiga"> Data Pekerjaan </a></li>
							<li><a data-toggle="tab" href="#keempat"> Penilaian </a></li>
						</ul>
						
						<div class="tab-content">
							<div id="awal" class="tab-pane fade in active">
								<div class="header">
									<h4 class="title"> Data Diri </h4>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Nama : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="nama"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> NIP : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="nip"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> NUPTK : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="nuptk"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> NRG : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="nrg"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> NOKARPEG : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="nokarpeg"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Tempat, Tgl Lahir : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="ttl"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Jenis Kelamin : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="jk"></span></h6> </div>
								</div>
							</div>
							
							<div id="kedua" class="tab-pane fade">
								<div class="header">
									<h4 class="title"> Data Alamat </h4>
								</div>
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Kota : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="kotadiri"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Kecamatan : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="kecadiri"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Kode Pos : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="posdiri"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Alamat : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="alamatdiri"></span></h6> </div>
								</div>
							</div>
							
							<div id="ketiga" class="tab-pane fade">
								<div class="header">
									<h4 class="title"> Data Pekerjaan </h4>
								</div>
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Nama Instansi : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="instansi"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Tugas Mengajar : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="tugas"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Pendidikan : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="jurs"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Pangkat Gol.Ruang : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="pangkat"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Jabatan : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="jabatan"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Masa SK : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="sk"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> TMTJabatan : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="tmt"></span></h6> </div>
								</div>
							</div>
							
							<div id="keempat" class="tab-pane fade">
								<div class="header">
									<h4 class="title"> Penilaian </h4>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Awal Penilaian : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="awal"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> Akhir Penilaian : </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="akhir"></span></h6> </div>
								</div>
								
								<div class="row">
									<div class="col-md-3 col-xs-4"> <h6> TGL Persetujuan: </h6> </div>
									<div class="col-md-8 col-xs-7 borderv1"> <h6><span class="pers"></span></h6> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		
		</div>
	</div>
</div>