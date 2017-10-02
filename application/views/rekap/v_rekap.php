<div class="content-wrapper">
	<section class="content-header hidden-print">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li class="active">Rekap PKG</li>        
			</ol>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row hidden-print">
				<div class="col-md-12">
					<div class="alert alert-info side">
                        <span><h4><i class="fa fa-info"></i> Note:</h4>
						Silakan Gunakan Fitur Print Untuk mulai mencetak Rekap</br></br>
							<a href="#" onclick="javascript:window.print()" class="btn btn-block btn-fill btn-info">Print</a>		
						</span>
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
							<li class="<?php if(@$index){echo 'active';}?>"><a href="<?= site_url("Rekap/index")?>"> Cover </a></li>
							<li class="<?php if(@$list1){echo 'active';}?>"><a href="<?= site_url("Rekap/list1")."/".$id_guru;?>"> 1 </a></li>
							<li class="<?php if(@$list2){echo 'active';}?>"><a href="<?= site_url("Rekap/list2")."/".$id_guru;?>"> 2 </a></li>
							<li class="<?php if(@$list3){echo 'active';}?>"><a href="<?= site_url("Rekap/list3")."/".$id_guru;?>"> 3 </a></li>
							<li class="<?php if(@$list4){echo 'active';}?>"><a href="<?= site_url("Rekap/list4")."/".$id_guru;?>"> 4 </a></li>
							<li class="<?php if(@$list5){echo 'active';}?>"><a href="<?= site_url("Rekap/list5")."/".$id_guru;?>"> 5 </a></li>
							<li class="<?php if(@$list6){echo 'active';}?>"><a href="<?= site_url("Rekap/list6")."/".$id_guru;?>"> 6 </a></li>
							<li class="<?php if(@$list7){echo 'active';}?>"><a href="<?= site_url("Rekap/list7")."/".$id_guru;?>"> 7 </a></li>
							<li class="<?php if(@$list8){echo 'active';}?>"><a href="<?= site_url("Rekap/list8")."/".$id_guru;?>"> 8 </a></li>
							<li class="<?php if(@$list9){echo 'active';}?>"><a href="<?= site_url("Rekap/list9")."/".$id_guru;?>"> 9 </a></li>
							<li class="<?php if(@$list10){echo 'active';}?>"><a href="<?= site_url("Rekap/list10")."/".$id_guru;?>"> 10 </a></li>
							<li class="<?php if(@$list11){echo 'active';}?>"><a href="<?= site_url("Rekap/list11")."/".$id_guru;?>"> 11 </a></li>
							<li class="<?php if(@$list12){echo 'active';}?>"><a href="<?= site_url("Rekap/list12")."/".$id_guru;?>"> 12 </a></li>
							<li class="<?php if(@$list13){echo 'active';}?>"><a href="<?= site_url("Rekap/list13")."/".$id_guru;?>"> 13 </a></li>
							<li class="<?php if(@$list14){echo 'active';}?>"><a href="<?= site_url("Rekap/list14")."/".$id_guru;?>"> 14 </a></li>
							<li class="<?php if(@$lamb){echo 'active';}?>"><a href="<?= site_url("Rekap/lamb1b")."/".$id_guru;?>"> LAMP 1B </a></li>
							<li class="<?php if(@$lamc){echo 'active';}?>"><a href="<?= site_url("Rekap/lamb1c")."/".$id_guru;?>"> LAMP 1C </a></li>
							<li class="<?php if(@$lamd){echo 'active';}?>"><a href="<?= site_url("Rekap/lamb1d")."/".$id_guru;?>"> LAMP 1D </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>