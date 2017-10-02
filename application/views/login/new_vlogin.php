<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
		
		<title>SMAN 4 BANDUNG</title>
		
		<link rel="icon" type="image/png" href="<?php echo base_url('media')?>/assets/img/favicon.ico"/>
		<link rel="stylesheet" href="<?php echo base_url('media')?>/assets/css/pe-icon-7-stroke.css"/>
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/materialize/css/materialize.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/SweetAlert/sweetalert.css"/>
		<link rel="stylesheet" href="<?php echo base_url('media')?>/assets/css/demo.css"/>
	</head>

    <body>
		<div class="slider fullscreen">
			<ul class="slides">
				<li>
					<img src="<?php echo base_url('media')?>/assets/img/wall-1.jpg"/>
					<div class="caption center-align">
						<h3>Selamat Datang!</h3>
						<h5 class="light grey-text text-lighten-3">SMAN 4 BANDUNG</h5>
						<a href="#" data-activates="slide-out" class="button-collapse btn-flat bg-aqua waves-effect waves-light">Login</a>
					</div>
				</li>
				<li>
					<img src="<?php echo base_url('media')?>/assets/img/wall-2.jpg"/>
					<div class="caption left-align">
						<h3>Penilaian Kinerja Guru</h3>
						<h5 class="light grey-text text-lighten-3">SMAN 4 BANDUNG</h5>
						<a href="#" data-activates="slide-out" class="button-collapse btn-flat bg-green waves-effect waves-light">Login</a>
					</div>
				</li>
				<li>
					<img src="<?php echo base_url('media')?>/assets/img/wall-3.jpg"/>
					<div class="caption right-align">
						<h3>Sasaran Kerja Pegawai</h3>
						<h5 class="light grey-text text-lighten-3">SMAN 4 BANDUNG</h5>
						<a href="#" data-activates="slide-out" class="button-collapse btn-flat bg-yellow waves-effect waves-light">Login</a>
					</div>
				</li>
			</ul>
		</div>
		
		<div id="slide-out" class="side-nav">
			<div class="row">
				<div class="col s12">
					<blockquote>
						<h4>PKG SMAN 4 BANDUNG</h4>
					</blockquote>
				</div>
			</div>
			
			<div class="row">
				<form action="<?= site_url("Login/do_login")?>" method="POST" class="col s10 offset-s1">
					<div class="row">
						<div class="input-field">
							<i class="pe-7s-user prefix"></i>
							<input id="user" type="text" name="username" class="validate">
							<label for="user">Username</label>
						</div>
					</div>
					
					<div class="row">
						<div class="input-field">
							<i class="pe-7s-door-lock prefix"></i>
							<input id="pass" type="password" name="password" class="validate">
							<label for="pass">Password</label>
						</div>
					</div>
					
					<div class="row center-align">
						<button class="btn waves-effect waves-light bg-red" type="submit" name="action">Masuk
							<i class="pe-7s-paper-plane right"></i>
						</button>
					</div>
				</form>
			</div>
		</div>
    </body>
	
	<script src="<?php echo base_url('media')?>/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('media')?>/plugins/SweetAlert/sweetalert.min.js"></script>
	<script src="<?php echo base_url('media')?>/plugins/materialize/js/materialize.min.js"></script>
	<script>
    $(document).ready(function(){
		$('.slider').slider({full_width: true});
		$('.button-collapse').sideNav({
			menuWidth: 350,
			edge: 'left',
			closeOnClick: true,
			draggable: true
		});
		<?php if(!empty($error)){?>
			swal("Gagal!", "<?php echo $error ?>", "error");
		<?php }?>
    });
    </script>
</html>