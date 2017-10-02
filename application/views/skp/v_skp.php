<div class="content-wrapper">
	<section class="content-header">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li class="active">SKP Guru</li>        
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
							<p class="category">Indikator setiap Aspek Penilaian Perilaku Guru</p>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<th> ID </th>
									<th> Indikator </th>
									<th> Tidak terpenuhi </th>
									<th> Terpenuhi sebagian </th>
									<th> Seluruhnya terpenuhi </th>
								</thead>
								
								<tbody class="<?= $maks?>">
									<?php
									$i = 1;
									foreach($result as $row){?>
										<tr class="<?= $bagian ?>">
											<td><?= $i++?></td>
											<td><?= $row->indikator_skp?></td>
											<td class="text-center">
												<div class="checkbox icheck">
													<label>
														<input type="radio" class="nilskp check" name="<?= $row->id_nilskp?>" value="0" data-toggle="checkbox">
													</label>
												</div>
											</td>
											<td class="text-center">
												<div class="checkbox icheck">
													<label>
														<input type="radio" class="nilskp check" name="<?= $row->id_nilskp?>" value="1" data-toggle="checkbox">
													</label>
												</div>
											</td>
											<td class="text-center">
												<div class="checkbox icheck">
													<label>
														<input type="radio" class="nilskp check" name="<?= $row->id_nilskp?>" value="2" data-toggle="checkbox">
													</label>
												</div>
											</td>
										</tr>
									<?php }?>
										<tr class="text-center">
											<td colspan="2"> Total Skor</td>
											<td class="total" colspan="3"> Coming Soon </td>
										</tr>
										<tr class="text-center">
											<td colspan="2"> Skor Maksimum </td>
											<td colspan="3"> <?= $maks;?> </td>
										</tr>
										<tr class="text-center">
											<td colspan="2"> Nilai aspek = Total skor &divide; Skor Maksimum &times; 100</td>
											<td class="nilaspek" colspan="3"> Coming Soon</td>
										</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="text-center page">
						<ul class="pagination">
							<li class="<?php if(@$index){echo 'active';}?>"><a href="<?= site_url("Penilaianskp/index")?>"> 1 </a></li>
							<li class="<?php if(@$index1){echo 'active';}?>"><a href="<?= site_url("Penilaianskp/index1")?>"> 2 </a></li>
							<li class="<?php if(@$index2){echo 'active';}?>"><a href="<?= site_url("Penilaianskp/index2")?>"> 3 </a></li>
							<li class="<?php if(@$index3){echo 'active';}?>"><a href="<?= site_url("Penilaianskp/index3")?>"> 4 </a></li>
							<li class="<?php if(@$index4){echo 'active';}?>"><a href="<?= site_url("Penilaianskp/index4")?>"> 5 </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>