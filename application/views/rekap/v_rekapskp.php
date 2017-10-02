<div class="content-wrapper">
	<section class="content-header hidden-print">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li class="active">Rekap SKP</li>        
			</ol>
		</div>
	</section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="row hidden-print">
				<div class="col-md-12">
					<div class="alert alert-info side">
                        <span><h4><i class="fa fa-info"></i> Note:</h4>
						Silakan Gunakan Fitur Print Untuk mulai mencetak Rekap</span>
						<a href="#" onclick="javascript:window.print()" class="btn btn-block btn-fill btn-info">Print</a>	
                    </div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<?php $this->load->view($load)?>
                    </div>
				</div>
			</div>

			<div class="row hidden-print">
				<div class="col-md-12">
					<div class="text-center page">
						<ul class="pagination">
							<li class="<?php if(@$index){echo 'active';}?>"><a href="<?= site_url("Rekapskp/index")?>"> Cover </a></li>
							<li class="<?php if(@$list1){echo 'active';}?>"><a href="<?= site_url("Rekapskp/index")?>"> Penilaian </a></li>
							<li><a href=""> 1 </a></li>
							<li><a href=""> 2 </a></li>
							<li><a href=""> 3 </a></li>
							<li><a href=""> 4 </a></li>
							<li><a href=""> 5 </a></li>
							<li class="<?php if(@$list3){echo 'active';}?>"><a href="<?= site_url("Rekapskp/index")?>"> Pengukuran </a></li>
							<li class="<?php if(@$list4){echo 'active';}?>"><a href="<?= site_url("Rekapskp/index")?>"> SKP </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>