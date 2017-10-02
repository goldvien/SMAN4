<div class="content">
	<section class="content-header">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li class="active">Profil</li>        
			</ol>
		</div>
	</section>
	
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="<?= site_url("Profil/do_ganti/").$result->NIP; ?>">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" class="form-control" placeholder="NIP" value="<?= $result->NIP?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lhr" class="form-control" placeholder="Tempat Lahir" value="<?= $result->tempat_lhr?>">
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tgl_lhr" class="form-control date" placeholder="Tanggal Lahir" value="<?= $result->tgl_lhr?>">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
								<div class="col-md-7">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $result->username?>">
                                    </div>
                                </div>
								
								<div class="col-md-5">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= $result->nama?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat_diri" class="form-control" placeholder="Alamat" value="<?= $result->alamat_diri?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input type="text" name="kota_diri" class="form-control" placeholder="Kota" value="<?= $result->kota_diri?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" name="kecamatan_diri" class="form-control" placeholder="Kecamatan" value="<?= $result->kecamatan_diri?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="number" name="kode_pos" class="form-control" placeholder="Kode Pos" value="<?= $result->kode_pos?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tentang Saya</label>
                                        <textarea rows="5" name="tentang" class="form-control" placeholder="Here can be your description"><?= $result->tentang?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 card card-fill">
				<div class="card-user">
					<div class="image"> 
						<img src="<?php echo base_url('media')?>/assets/img/wall-1.jpg" alt="Photo Sekolah">
					</div>
					<div class="content">
						<div class="author">
							<img class="avatar border-gray" src="<?php echo base_url('media')?>/assets/img/users/<?= $result->image?>" alt="..."/>
							<h4 class="title"><?= $result->nama?></h4>
						</div>
						<p class="description text-center"> "<?= $result->tentang?>" </p>
						<hr>
						<div class="col-xs-12">
							<form action="<?= site_url("Profil/upload/").$result->NIP;?>" method="post" enctype="multipart/form-data">
								<label class="control-label">Change Photo</label>
								<input type="file" id="photo" name="image" class="file-loading">
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>