<div class="content-wrapper">
	<section class="content-header hidden-print">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li><a href="<?= site_url("Pm");?>"> Mailbox </a></li>
				<?php if($message[TF_PM_AUTHOR]==$user){?>
					<li class="active">Pesan Terkirim : <?= $message[TF_PM_SUBJECT];?></li>
				<?php }else{ ?>
					<li class="active">Pesan Masuk : <?= $message[TF_PM_SUBJECT];?></li> 
				<?php }?>
			</ol>
		</div>
	</section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="col-md-3 hidden-print">
				<div class="margin-bot">
					 <a href="<?= site_url("Pm");?>" class="btn btn-block btn-info btn-fill">Kembali Ke Inbox</a>
				</div>

				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Folders</h3>
					</div>
					<div class="box-body no-padding">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="<?= site_url("Pm")?>"><i class="pe-7s-box1"></i> Inbox <?php if($notif_in != NULL){?><span class="label label-primary pull-right"><?= count($notif_in)?></span></a></li><?php } ?>
							<li><a href="<?= site_url("Pm/messages/").MSG_UNREAD?>"><i class="pe-7s-mail-open"></i> Unread<?php if($notif_unread != NULL){?><span class="label label-success pull-right"><?= count($notif_unread)?></span></a></li><?php } ?>
							<li><a href="<?= site_url("Pm/messages/").MSG_SENT?>"><i class="pe-7s-mail-open-file"></i> Sent<?php if($notif_sent != NULL){?><span class="label label-info pull-right"><?= count($notif_sent)?></span></a></li><?php } ?>
							<li><a href="<?= site_url("Pm/messages/").MSG_DELETED?>"><i class="pe-7s-trash"></i> Junk <?php if($notif_deleted != NULL){?><span class="label label-warning pull-right"><?= count($notif_deleted)?></span></a></li><?php } ?>
							<li><a href="<?= site_url("Pm/send")?>"><i class="pe-7s-note"></i> Compose</a></li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			
			<div class="col-md-9">
				<div class="box box-danger">
					<div class="box-header with-border">
						<?php if($message[TF_PM_AUTHOR]==$user){?>
							<h3 class="box-title">Pesan Terkirim</h3>
						<?php }else{ ?>
							<h3 class="box-title">Pesan Masuk</h3>
						<?php }?>
					</div>
					<div class="box-body no-padding">
						<div class="mailbox-read-info">
							<h3>Kepada : <?php foreach($message[PM_RECIPIENTS] as $recipient) echo (next($message[PM_RECIPIENTS])) ? $recipient.', ' : $recipient;?></h3>
							<h3>Judul : <?= $message[TF_PM_SUBJECT];?> </h3>
							<h5>Dari: <?= $message[TF_PM_AUTHOR];?>
							<span class="mailbox-read-time pull-right"><?= $message[TF_PM_DATE];?></span></h5>
						</div>
						
						<div class="mailbox-controls with-border text-center hidden-print">
							<a href="<?= site_url('Pm/delete/').$message[TF_PM_ID].'/'.MSG_DELETED?>" type="button" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
							<a type="button" class="btn btn-info btn-sm" onclick="javascript:window.print()" title="Print"><i class="fa fa-print"></i></a>
							<?php if($message[TF_PM_AUTHOR]!=$user AND $deleted==0){?>
								<a href="<?= site_url('Pm/send/').$message[TF_PM_AUTHOR].'/RE&#58;'.$message[TF_PM_SUBJECT]?>" type="button" class="btn btn-success btn-sm" title="Reply"><i class="fa fa-reply"></i></a>
							<?php } ?>
						</div>
						
						<div class="mailbox-read-message">
							<?= $message[TF_PM_BODY]; ?>
						</div>
					</div>
					
					<div class="box-footer">
						<?php if($message[TF_PM_AUTHOR]!=$user AND $deleted==0){?>
							<div class="pull-right hidden-print">
								<a href="<?= site_url('Pm/send/').$message[TF_PM_AUTHOR].'/RE&#58;'.$message[TF_PM_SUBJECT]?>" type="button" class="btn btn-success btn-fill"><i class="pe-7s-next-2"></i> Balas</a>
							</div>
						<?php } ?>
						<a href="<?= site_url('Pm/delete/').$message[TF_PM_ID].'/'.MSG_DELETED?>" type="button" class="btn btn-danger btn-fill hidden-print"><i class="fa fa-trash-o"></i> Delete</a>
						<a type="button" onclick="javascript:window.print()" class="btn btn-info btn-fill hidden-print"><i class="fa fa-print"></i> Print</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>