<div class="content-wrapper">
	<section class="content-header">
		<div class="col-lg-12 bred">
			 <ol class="breadcrumb">
				<li><a href="<?= site_url("home");?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				<li><a href="<?= site_url("Pm");?>"> Mailbox </a></li>
				<li class="active"> Buat Pesan </li>        
			</ol>
		</div>
	</section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="col-md-3">
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
							<li class="active"><a href="<?= site_url("Pm/send")?>"><i class="pe-7s-note"></i> Compose</a></li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			
			<div class="col-md-9">
				<div class="box box-danger">
				<?php echo form_open($this->uri->uri_string()); ?>
					<div class="box-header with-border">
						<h3 class="box-title">Buat Pesan</h3>
					</div>
					
					<div class="box-body">
						<?php
							if(isset($status)) $status.' ';
							if($this->session->flashdata('status')) $this->session->flashdata('status').' ';
							if(!$found_recipients)
							{
								foreach($suggestions as $original => $suggestion) 
								{?>
									<div class="alert alert-warning">
										<a type="button" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<i class="pe-7s-attention"></i> Maksud Anda <b class="text-success"><?= $suggestion?></b> Untuk Penerima <i class="text-danger"><b><?= $original?></b></i> ?
									</div>
						<?php	}
							} 
						?>
						<div class="form-group">
							<input type="search" class="form-control no-pills autocomplete nama" id="autocomplete1" name="<?= PM_RECIPIENTS?>" placeholder="To:" value="<?= urldecode($message[PM_RECIPIENTS]);?>">
						</div>
						<div class="form-group">
							<input class="form-control no-pills" name="<?= TF_PM_SUBJECT?>" placeholder="Subject:" value="<?= urldecode($message[TF_PM_SUBJECT]);?>">
						</div>
						<div class="form-group">
							<textarea id="texteditor" name="<?= TF_PM_BODY?>" class="form-control no-pills isi">
								<?= $message[TF_PM_BODY]?>
							</textarea>
						</div>
					</div>
					
					<div class="box-footer">
						<div class="pull-right">
							<button type="button" class="btn btn-danger btn-fill" onclick="refresh_editor()"><i class="fa fa-times"></i> Discard</button>
							<button type="submit" class="btn btn-success btn-fill" name="btnSend" id="btnSend" value="Send"><i class="fa fa-envelope-o"></i> Send</button>
						</div>
					</div>
				<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</section>
</div>