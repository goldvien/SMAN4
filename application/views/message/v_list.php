<div class="content-wrapper">
	<section class="content-header">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li class="active">Mailbox</li>
			</ol>
		</div>
	</section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="col-md-3">
				<div class="margin-bot">
					 <a href="<?= site_url("Pm/send");?>" class="btn btn-block btn-info btn-fill">Buat Pesan</a>
				</div>

				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Folders</h3>
					</div>
					<div class="box-body no-padding">
						<ul class="nav nav-pills nav-stacked">
							<li class="<?php if($type==NULL){echo'active';}?>"><a href="<?= site_url("Pm")?>"><i class="pe-7s-box1"></i> Inbox <?php if($notif_in != NULL){?><span class="label label-primary pull-right"><?= count($notif_in)?></span></a></li><?php } ?>
							<li class="<?php if($type==MSG_UNREAD){echo'active';}?>"><a href="<?= site_url("Pm/messages/").MSG_UNREAD?>"><i class="pe-7s-mail-open"></i> Unread<?php if($notif_unread != NULL){?><span class="label label-success pull-right"><?= count($notif_unread)?></span></a></li><?php } ?>
							<li class="<?php if($type==MSG_SENT){echo'active';}?>"><a href="<?= site_url("Pm/messages/").MSG_SENT?>"><i class="pe-7s-mail-open-file"></i> Sent<?php if($notif_sent != NULL){?><span class="label label-info pull-right"><?= count($notif_sent)?></span></a></li><?php } ?>
							<li class="<?php if($type==MSG_DELETED){echo'active';}?>"><a href="<?= site_url("Pm/messages/").MSG_DELETED?>"><i class="pe-7s-trash"></i> Junk <?php if($notif_deleted != NULL){?><span class="label label-warning pull-right"><?= count($notif_deleted)?></span></a></li><?php } ?>
							<li><a href="<?= site_url("Pm/send")?>"><i class="pe-7s-note"></i> Compose</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-md-9">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Mailbox</h3>
					</div>
					
					<div class="box-body no-padding">
						<div class="table-responsive mailbox-messages active-scroll">
							<table class="table table-hover table-striped">
								<thead>
									<th> <?php if($type != MSG_DELETED) echo 'Hapus'; else echo 'Actions'; ?> </th>
									<th> <?php if($type != MSG_SENT) echo 'Dari'; else echo 'Penerima'; ?> </th>
									<th> Perihal </th>
									<th> Tanggal </th>
								</thead>
								
								<tbody>
								<?php 
									if(count($messages)>0){
										for ($i=0; $i<count($messages); $i++){
								?>
									<tr>
										<td>
											<?php if($type != MSG_DELETED){?>
												<a href="<?= site_url('Pm/delete/').$messages[$i][TF_PM_ID].'/'.$type?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
											<?php }else{ ?>
												<a href="<?= site_url('Pm/restore/').$messages[$i][TF_PM_ID]?>" class="btn btn-sm btn-success"><i class="fa fa-history"></i></a>
												<a href="#" onclick="delete_pm(<?= $messages[$i][TF_PM_ID]?>)" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
											<?php } ?>
										</td>
										<td class="mailbox-name">
											<?php
												if($type != MSG_SENT) echo $messages[$i][TF_PM_AUTHOR];
												else
												{
													$recipients = $messages[$i][PM_RECIPIENTS];
													foreach ($recipients as $recipient)
														echo (next($recipients)) ? $recipient.', ' : $recipient;
												}
											?>
										</td>
										<td class="mailbox-subject"><a href='<?= site_url('pm/message/').$messages[$i][TF_PM_ID];?>'><?= $messages[$i][TF_PM_SUBJECT]?></a></td>
										<td class="mailbox-date"><?= date_differ($messages[$i][TF_PM_DATE]) ?></td>
									</tr>
								<?php }}else{ ?>
									<tr>
										<td class="text-center" colspan="5"> Tidak Ada Pesan </td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="box-footer no-padding">
						<div class="mailbox-controls">
							<div class="pull-right">
							1-<?= count($messages)?>/<?= count($messages)?>
							</div>
						</div>
					</div>
				</div>
          <!-- /. box -->
			</div>
		</div>
	</section>
</div>