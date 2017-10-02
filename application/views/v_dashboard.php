<div class="content">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="pe-7s-users"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Jumlah Guru</span>
						<span class="info-box-number"><?= $jml_guru?></span>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="pe-7s-id"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Jumlah Penilai</span>
						<span class="info-box-number"><?= $jml_penilai?></span>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="pe-7s-check"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Guru Ternilai</span>
						<span class="info-box-number"><?= $ternilai?></span>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="pe-7s-clock"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Belum Ternilai</span>
						<span class="info-box-number"><?= $blm_ternilai?></span>
					</div>
				</div>
			</div>
		</div>
	  
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Email Statistics</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="content">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Bounce
                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Users Behavior</h4>
                        <p class="category">24 Hours performance</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Click
                                <i class="fa fa-circle text-warning"></i> Click Second Time
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">2014 Sales</h4>
                        <p class="category">All products including Taxes</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Tesla Model S
                                <i class="fa fa-circle text-danger"></i> BMW 5 Series
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-check"></i> Data information certified
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Tasks</h4>
                        <p class="category">Anda Diwajibkan menilai guru-guru dibawah</p>
                    </div>
                    <div class="content">
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                    <?php
                                    if (!empty($menilai)) {
                                        $i = 1;
                                        foreach($menilai as $b){
                                    ?>
                                    <tr>
                                        <td>
                                            <label class="bex text-center"><font color="White"><?= $i++ ?></font></label>
                                        </td>
                                        <td><?= $b->nama ?></td>
                                        <td class="td-actions text-right">
                                            <a href="<?= site_url("Penilaian/index")."/".$b->id_guru?>" rel="tooltip" title="Nilai PKG" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-bar-chart fa-2x"></i>
                                            </a>&nbsp;&nbsp;
                                            <a href="<?= site_url("Penilaianskp/index")."/".$b->id_guru?>" rel="tooltip" title="Nilai SKP" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-file-text fa-2x"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } }else{?>
                                        <tr>
                                            <td> 
                                                <h5 class="text-center text-danger title">Anda Tidak Menilai Siapapun</h5>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Data Verified
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>