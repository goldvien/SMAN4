<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>404 Error Page | SMAN 4 BANDUNG</title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,600|Arimo:400,700' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="<?php echo base_url('media')?>/assets/img/favicon.ico">
		<link rel="stylesheet" href="<?php echo base_url('media')?>/plugins/font-awesome/css/font-awesome.min.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/assets/css/bootstrap.min.css"/>
		<!--custom css-->
		<link rel="stylesheet" href="<?php echo base_url('media')?>/assets/css/style.css"/>
	
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div id="home">
			<div id="overlay">
				<section id="page-content" class="text-center">
					<div class="container">
						<div class="row">
							<p class="alert-icon"><i class="fa fa-exclamation-triangle"></i></p>
							<h1 class="error-title"><small>ERROR</small> 404</h1>
							<h3 class="sub-title white">Page Not Found!</h3>
							<p class="page-par white">Untuk beberapa alasan halaman yang anda tuju tidak ditemukan!</p>
								<a href="javascript:history.back()" class="btn-back">Kembali!<i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
				</section>
				
				<footer id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 footer-line">&copy; Copyright 2016 <a href="http://smkn4bdg.sch.id/" class="white">SMKN 4 BANDUNG</a>. Allright Reserved</div>
							<div class="col-md-6 col-sm-6">
								<ul class="nav-footer magt20">
								<li><a href="<?= site_url("Home")?>">Dashboard</a></li>
								<li><a href="<?= site_url("Profil")?>">Account</a></li>
								<li class="last-child"><a href="<?= site_url("Pm")?>">Mailbox</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('media')?>/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url('media')?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			/*-----------------------------------------------------------------------------------*/
			/*	    						HOME 100% Height									 */
			/*-----------------------------------------------------------------------------------*/
		$(function(){
			var windowH = $(window).height();
			var wrapperH = $('#home').height();
			if(windowH > wrapperH) {                            
				$('#home,#overlay').css({'height':($(window).height())+'px'});
			}                                                                               
			$(window).resize(function(){
				var windowH = $(window).height();
				var wrapperH = $('#wrap,#overlay').height();
				var differenceH = windowH - wrapperH;
				var newH = wrapperH + differenceH;
				var truecontentH = $('#home,#overlay').height();
				if(windowH > truecontentH) {
					$('#home,#overlay').css('height', (newH)+'px');
				}
	
			})          
		});
		</script>
	</body>
</html>