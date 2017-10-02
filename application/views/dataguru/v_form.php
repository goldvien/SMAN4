<div class="content-wrapper">
	<section class="content-header">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li><a href="<?= site_url("DataGuru");?>"> Data Instansi </a></li>
				<li class="active">Edit Data Guru</li>        
			</ol>
		</div>
	</section>
	
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="header">
						<h4 class="title"> Edit Data Guru</h4>
					</div>
					
					<div class="content">
						<form action="<?= site_url("DataGuru/do_edit/".$result->id_guru);?>" method="post">
							<div class="alert alert-warning">
								<button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
								<strong>Warning!</strong> Pastikan Format Tanggal : YYYY-MM-DD
							</div>
							
							<div class="form-group">
								<label for="nip"> NIP </label>
								<input type="text" name="nip" class="form-control" id="nip" placeholder="NIP" value="<?php echo @$result->NIP?>" disabled>
							</div>
							
							<div class="form-group">
								<label for="nama"> NAMA </label>
								<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php echo @$result->nama?>">
							</div>
							
							<div class="form-group">
								<label for="NUPTK"> NUPTK </label>
								<input type="text" name="nuptk" class="form-control" id="nuptk" placeholder="NUPTK" value="<?php echo @$result->nuptk?>">
							</div>
							
							<div class="form-group">
								<label for="NRG"> NRG </label>
								<input type="text" name="nrg" class="form-control" id="NRG" placeholder="NRG" value="<?php echo @$result->nrg?>">
							</div>
							
							<div class="form-group">
								<label for="NOKARPEG"> NOKARPEG </label>
								<input type="text" name="nokarpeg" class="form-control" id="NOKARPEG" placeholder="NOKARPEG" value="<?php echo @$result->nokarpeg?>">
							</div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lhr" class="form-control" placeholder="Tempat Lahir" value="<?= $result->tempat_lhr?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tgl_lhr" class="form-control date" placeholder="Tgl Lahir" value="<?= $result->tgl_lhr?>">
                                    </div>
                                </div>
                            </div>
							
							<div class="form-group">
								<label for="jenkel"> Jenis Kelamin</label>
								<label class="radio-inline"><input type="radio" name="jk" id="jenkel" value="L">Laki-Laki</label>
								<label class="radio-inline"><input type="radio" name="jk" id="jenkel" value="P">Perempuan</label>
							</div>
							
							<div class="form-group">
								<label for="id_pendidikan"><h6> Pendidikan/Jurs </h6></label>
								<?php
									foreach($pendidikan as $b){
										$drop[$b->id_pendidikan] = $b->nama_pendidikan; 
									}
									echo form_dropdown("id_pendidikan",$drop, @$result->id_pendidikan, 'class="form-control" id="id_pendidikan"');
								?>
							</div>
							
							<div class="form-group">
								<label for="id_pangkat"><h6> Pangkat Gol.Ruang </h6></label>
								<?php
									foreach($pangkat as $b){
										$dropdown[$b->id_pangkat] = $b->nama_pangkat; 
									}
									echo form_dropdown("id_pangkat",$dropdown, @$result->id_pangkat, 'class="form-control" id="id_pangkat"');
								?>
							</div>
							
							<div class="form-group">
								<label for="id_jabatan"><h6> Jabatan </h6></label>
								<?php
									foreach($jabatan as $b){
										$dropdow[$b->id_jabatan] = $b->nama_jabatan; 
									}
									echo form_dropdown("id_jabatan",$dropdow, @$result->id_jabatan, 'class="form-control" id="id_jabatan"');
								?>
							</div>
							
							<div class="form-group">
								<label for="tmtjabatan"> TMT Jabatan </label>
								<input type="text" name="tmtjabatan" class="form-control tgl" id="tmtjabatan" placeholder="TMT Jabatan" value="<?php echo @$result->tmtjabatan?>">
							</div>
							
							<div class="form-group">
								<label for="masa_sk"> Masa SK </label>
								<input type="number" name="masa_sk" class="form-control" id="masa_sk" placeholder="Masa SK" value="<?php echo @$result->masa_sk?>">
							</div>
							
							<div class="form-group">
								<label for="id_tugas"><h6> Tugas Mengajar </h6></label>
								<?php
									foreach($matpel as $b){
										$dropdo[$b->id_tugas] = $b->nama_matpel; 
									}
									echo form_dropdown("id_tugas",$dropdo, @$result->id_tugas, 'class="form-control" id="id_tugas"');
								?>
							</div>
							
							<div class="form-group">
								<label for="id_sekolah"><h6>Unit Kerja</h6></label>
								<?php
									foreach($sekolah as $b){
										$dropd[$b->id_sekolah] = $b->nama_sekolah; 
									}
									echo form_dropdown("id_sekolah",$dropd, @$result->id_sekolah, 'class="form-control" id="id_sekolah"');
								?>
							</div>
							
							<div class="form-group">
								<label for="masa_nilai_awal"> Masa Awal Penilaian</label>
								<input type="text" name="masa_nilai_awal" class="form-control tgl" id="masa_nilai_awal" placeholder="Masa Awal Penilaian" value="<?php echo @$result->masa_nilai_awal?>">
							</div>
							
							<div class="form-group">
								<label for="masa_nilai_akhir"> Masa Awal Akhir </label>
								<input type="text" name="masa_nilai_akhir" class="form-control tgl" id="masa_nilai_akhir" placeholder="Masa Akhir Penilaian" value="<?php echo @$result->masa_nilai_akhir?>">
							</div>
							
							<div class="form-group">
								<label for="tgl_persetujuan"> Tgl Persetujuan </label>
								<input type="text" name="tgl_persetujuan" class="form-control tgl" id="tgl_persetujuan" placeholder="Tgl Persetujuan" value="<?php echo @$result->tgl_persetujuan?>">
							</div>
							
							<div class="form-group">
								<label for="id_level"><h6> Status </h6></label>
								<?php
									foreach($level as $b){
										$drow[$b->id_level] = $b->nama_level; 
									}
									echo form_dropdown("id_level",$drow, @$result->id_level, 'class="form-control" id="id_level"');
								?>
							</div>

							<div class="form-group">
								<label for="penilai"><h6> Penilai </h6></label>
								<?php
									foreach($penilai as $b){
										$dron[$b->id_guru] = $b->nama; 
									}
									echo form_dropdown("id_penilai",$dron, @$result->id_penilai, 'class="form-control" id="penilai"');
								?>
							</div>
							
							<div class="pull-right">
								<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">Submit</button>
							</div>
                            <div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card">
					<div class="image">
						<img src="<?php echo base_url('media')?>/assets/img/wall-1.jpg" alt="Photo Sekolah">
					</div>
					
					<div class="content card-user">
						<div class="author">
							<a href="#">
								<img class="avatar border-gray" src="<?php echo base_url('media')?>/assets/img/users/<?= $result->image?>" alt="..."/>
								<h4 class="title"><?= $result->nama?></h4>
							</a>
						</div>
						<p class="description text-center"> <i>"<?= $result->tentang?>"</i></p>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>