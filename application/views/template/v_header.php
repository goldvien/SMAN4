<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<link rel="icon" type="image/png" href="<?php echo base_url('media')?>/assets/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>SMAN 4 BANDUNG</title>

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		
		<!-- Bootstrap core CSS     -->
		<link href="<?php echo base_url('media')?>/assets/css/bootstrap.min.css" rel="stylesheet" />

		<!--  Light Bootstrap Table core CSS    -->
		<link href="<?php echo base_url('media')?>/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
		
		<!-- Animation library for notifications   -->
		<link href="<?php echo base_url('media')?>/assets/css/animate.min.css" rel="stylesheet"/>
		
		<!--  Fresh Bootstrap Table   -->
		<link href="<?php echo base_url('media')?>/assets/css/fresh-bootstrap-table.css" rel="stylesheet"/>
		
		<!--  Costum CSS   -->
		<link href="<?php echo base_url('media')?>/assets/css/demo.css" rel="stylesheet" />
		<link href="<?php echo base_url('media')?>/assets/css/tabstyles.css" rel="stylesheet" />
		<link href="<?php echo base_url('media')?>/assets/css/tabs.css" rel="stylesheet" />
		
		<!--  Bootstrap Toogle   -->
		<link href="<?php echo base_url('media')?>/assets/css/bootstrap-toggle.min.css" rel="stylesheet" />
		
		<!--  Fonts and icons    -->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url('media')?>/assets/css/pe-icon-7-stroke.css"/>
		<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' type='text/css'>
		
		<!-- MDL & Tables -->
		<link href="<?php echo base_url('media')?>/assets/css/material.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/datatables/css/dataTables.material.min.css">
		
		<!-- icheck-->
		<link href="<?php echo base_url('media')?>/plugins/iCheck/square/red.css" rel="stylesheet">
		
		<!-- Pace -->
		<link href="<?php echo base_url('media')?>/plugins/pace/pace.css" rel="stylesheet">
		
		<!--     SweetAlert     -->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/SweetAlert/sweetalert.css">
		
		<!--     File Input     -->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/bootstrap-fileinput/css/fileinput.min.css">
		
		<!--     Bootstrap DatePicker     -->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
		
		<!--     Summernote     -->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/summernote/summernote.css">
		
		<!--     AutoComplete     -->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/assest/css/jquery.autocomplete.css">
	</head>	
	
	<body>
		<div class="wrapper">
			<div class="main-panel">
				<nav class="navbar navbar-default navbar-fixed">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">PKG SMAN 4 BANDUNG</a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-left">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-envelope-o"></i>
										<b class="caret"></b>
										<?php if($notif_in != NULL){?><span class="notification"><?= count($notif_in)?></span><?php } ?>
									</a>
									<ul class="dropdown-menu">
										<li><a href="<?= site_url("Pm")?>">Inbox</a></li>
										<li><a href="<?= site_url("Pm/messages/").MSG_UNREAD?>">Unread</a></li>
										<li><a href="<?= site_url("Pm/messages/").MSG_SENT?>">Sent</a></li>
										<li><a href="<?= site_url("Pm/messages/").MSG_DELETED?>">Recycle Bin</a></li>
										<li><a href="<?= site_url("Pm/send")?>">Compose</a></li>
									</ul>
								</li>
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
								<li>
								<a href="<?= site_url("Profil")?>">
									Account
									</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Panel
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<?php if($this->session->userdata('level')<=2){?>
											<li><a href="<?= site_url("DataGuru")?>">Data Instansi</a></li>
										<?php }?>
										<li><a href="<?= site_url("Rekapskp")?>">Rekap SKP</a></li>
										<li><a href="<?= site_url("Rekap")?>">Rekap PKG</a></li>
										<li class="divider"></li>
										<li><a href="<?= site_url("Penilaian/index/").$this->session->userdata('id_guru')?>">Form PKG</a></li>
										<li><a href="<?= site_url("Penilaianskp")?>">Form SKP</a></li>
									</ul>
								</li>
								<li>
									<a href="<?= site_url("Login/logout");?>">
										Log out
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>