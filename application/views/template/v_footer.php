				<footer class="footer hidden-print">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul>
								<li>
									<a href="<?= site_url("Home")?>">
										Home
									</a>
								</li>
								<li>
									<a href="#">
										Company
									</a>
								</li>
								<li>
									<a href="#">
										Portfolio
									</a>
								</li>
								<li>
									<a href="#">
									Blog
									</a>
								</li>
							</ul>
						</nav>
						<p class="copyright pull-right">
							&copy; 2016 <a href="http://smkn4bdg.sch.id/">SMKN 4 BANDUNG</a>, made with love for money.
						</p>
					</div>
				</footer>
			</div>
		</div>
	</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('media')?>/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('media')?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url('media')?>/assets/js/light-bootstrap-dashboard.js"></script>
	<script src="<?php echo base_url('media')?>/assets/js/demo.js"></script>
	
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url('media')?>/assets/js/jquery.checkboxes-1.2.0.min.js"></script>
	<script src="<?php echo base_url('media')?>/assets/js/bootstrap-toggle.min.js"></script>
	<script src="<?php echo base_url('media')?>/plugins/iCheck/icheck.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('media')?>/assets/js/bootstrap-notify.js"></script>
	
	<!-- Fresh Bootstrap Table Core -->
	<script src="<?php echo base_url('media')?>/assets/js/bootstrap-table.js"></script>
	
	<!-- Tabs Table And Pagination -->
	<script src="<?php echo base_url('media')?>/assets/js/cbpFWTabs.js"></script>
	
	<!-- MDL & Tables -->
	<script src="<?php echo base_url('media')?>/assets/js/material.min.js"></script>
	<script src="<?php echo base_url('media')?>/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('media')?>/plugins/datatables/js/dataTables.material.min.js"></script>
	
	<!-- SweetAlert -->
	<script src="<?php echo base_url('media')?>/plugins/SweetAlert/sweetalert.min.js"></script>
	
	<!-- Pace -->
	<script src="<?php echo base_url('media')?>/plugins/pace/pace.min.js"></script>
	
	<!-- FileInput -->
	<script src="<?php echo base_url('media')?>/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
	
	<!-- Bootstrap Datepicker -->
	<script src="<?php echo base_url('media')?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	
	<!-- Summernote -->
	<script src="<?php echo base_url('media')?>/plugins/summernote/summernote.min.js"></script>
	<script src="<?php echo base_url('media')?>/plugins/summernote/lang/summernote-id-ID.min.js"></script>
	
	<!-- jQuery Lazy -->
	<script src="<?php echo base_url('media')?>/assets/js/jquery.lazy.min.js"></script>
	
	<!-- jQuery AutoComplete -->
	<script src="<?php echo base_url('media')?>/assets/js/jquery.autocomplete.js"></script>
	
	<script type="text/javascript">
	var table;
	var save_method;
		$(document).ajaxStart(function() { Pace.restart(); });

		// ajax insert nilai
		$(document).ready(function(){
			var totnilai = 0;
			$('.nilai').on('ifChecked', function(){
				var nilai = parseInt($(this).val());
				var id = $(this).attr("name");
				var parent = $(this).parent().parent().parent().parent().parent().parent();
				var child = $(this).parent().parent().parent().parent().parent();
				var bagian = $(child).attr("class");
				var maks = $(parent).attr("class");
				$.ajax({
					url : "<?= site_url('Penilaian/nilai')."/".$id_guru?>/"+bagian+"/"+id+"/"+maks,
					type : "POST",
					data : {nilai: nilai},
					dataType : "JSON",
					success: function(result){
						$(".total").html(result);
						$(".total").html(result.jumlah);
						$(".persen").html(Math.round(result.persentase));
						$(".akredi").html(result.total_nilai);
					},error: function (jqXHR, textStatus, errorThrown){
						swal("ERROR", errorThrown, "error");
					}
				});
			});
			
			$('.nilskp').on('ifChecked', function(){
				var nilai = parseInt($(this).val());
				var id = $(this).attr("name");
				var parent = $(this).parent().parent().parent().parent().parent().parent();
				var child = $(this).parent().parent().parent().parent().parent();
				var bagian = $(child).attr("class");
				var maks = $(parent).attr("class");
				$.ajax({
					url : "<?= site_url('Penilaianskp/nilaiskp')."/".$id_guru ?>/"+bagian+"/"+id+"/"+maks,
					type : "POST",
					data : {nilai: nilai},
					dataType : "JSON",
					success: function(result){
						swal("Berhasil!", "Bruhh", "success");
						
					},error: function (jqXHR, textStatus, errorThrown){
						swal("ERROR", "Terjadi Kesalahan Pada Ajax", "error");
					}
				});
			});
			
			$('.nillamp').on('ifChecked', function(){
				var nilai = parseInt($(this).val());
				var id = $(this).attr("name");
				$.ajax({
					url : "<?= site_url('Penilaian/nillamp')."/".$id_guru?>/"+id,
					type : "POST",
					data : {nilai: nilai},
					dataType : "JSON",
					success: function(result){
						$(".jml").html(result);
					},error: function (jqXHR, textStatus, errorThrown){
						swal("ERROR", "Terjadi Kesalahan Pada Ajax", "error");
					}
				});
			});
			
			table = $('#data-guru').DataTable({
				"info":false,
				"deferRender":true,
				"processing": true,
				"serverSide": true,
				"bFilter" : true,
				"bSort" : true,
				"ajax": {
					"url": "<?php echo site_url('DataGuru/ajax_data')?>",
					"type": "POST"
				},
				"columnDefs": [
				{ 
					"targets": [ -1, 0, 2, 3, 4, 5, 6 ],
					"orderable": false,
					"className": 'mdl-data-table__cell--non-numeric'
				},
				],
			});
			
			$('.autocomplete').autocomplete({
                serviceUrl: '<?= site_url("Pm/search")?>',
				onSelect: function (result) {}
            });
			$('.lazy').lazy();
		});
		
		//ajax menu
		function tambah_guru(){
			save_method = 'tambah';
			$('#form')[0].reset();
			$('.help-block').empty();
			$('#btnSave').attr("disabled", true);
			$('#tmbhData').appendTo("body").modal('show');
			$('.modal-title').text('Tambah Data Guru');
		}
		
		//ajax load data
		function get_data_guru(id){
			$.ajax({
				url : "<?= site_url('DataGuru/ajax_get')?>/"+id,
				type : "GET",
				dataType : "JSON",
				success : function(data){
					$('#profilData').appendTo("body").modal('show');
					$('.titleNama').text(data.nama);
					$('.nama').text(data.nama);
					$('.nip').text(data.NIP);
					$('.nuptk').text(data.nuptk);
					$('.nrg').text(data.nrg);
					$('.nokarpeg').text(data.nokarpeg);
					$('.ttl').text(data.tempat_lhr+", "+data.tgl_lhr);
					$('.jk').text(data.jk);
					$('.instansi').text(data.nama_sekolah);
					$('.tugas').text(data.nama_matpel);
					$('.jurs').text(data.nama_pendidikan);
					$('.pangkat').text(data.nama_pangkat);
					$('.jabatan').text(data.nama_jabatan);
					$('.sk').text(data.masa_sk);
					$('.tmt').text(data.tmtjabatan);
					$('.awal').text(data.masa_nilai_awal);
					$('.akhir').text(data.masa_nilai_akhir);
					$('.pers').text(data.tgl_persetujuan);
					$('.tentang').text(data.tentang);
					$('.kotadiri').text(data.kota_diri);
					$('.kecadiri').text(data.kecamatan_diri);
					$('.posdiri').text(data.kode_pos);
					$('.alamatdiri').text(data.alamat_diri);
					
					$('.showimage').attr("src","<?php echo base_url('media')?>/assets/img/users/"+data.image);
				},error: function (jqXHR, textStatus, errorThrown){
					swal("ERROR", "Terjadi Kesalahan Pada Ajax", "error");
				}
			});
		}
		
		//ajax tambah data
		function save(){
			$('#btnSave').text('Saving...');
			$('#btnSave').attr('disabled', true);
			var url;
			
			if(save_method == 'tambah'){
				url = "<?= site_url('DataGuru/do_add')?>";
			}
			
			$.ajax({
				url : url,
				type: "POST",
				data: $('#form').serialize(),
				dataType : "JSON",
				success : function(data){
					if(data.status){
						swal("Berhasil!", "Data Telah Ditambahkan!", "success");
						$('#tmbhData').appendTo("body").modal('hide');
						reload_table();
					}
					$('#btnSave').text('save');
					$('#btnSave').attr('disabled',false);
				}, error: function(jqXHR, textStatus, errorThrown){
					sweetAlert("Oops...", "Error Saat Menambah/Edit Data!", "error");
					$('#btnSave').text('save');
					$('#btnSave').attr('disabled',false);
				}
			});
		}
		
		//ajax delete
    	function delete_guru(id){
			swal({
				title: "Anda Yakin?",   
				text: "Anda Akan Segera Menghapus Data Yang Anda Pilih!",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Yakin",   
				cancelButtonText: "Tidak",   
				closeOnConfirm: false,   
				closeOnCancel: false
				},
				function(isConfirm){
					if(isConfirm){
						$.ajax({
							url: "<?= site_url('DataGuru/delete')?>/"+id,
							type: "POST",
							dataType: "JSON",
							success : function(data){
								swal("Berhasil!", "Data Telah Terhapus!", "success");
								reload_table();
							},error: function (jqXHR, textStatus, errorThrown){
								swal("Gagal", "Terjadi Kesalahan Pada Input Ke Database", "error");
							}
						});
					}else{
						swal("Cancelled", "Data Anda Tetap Tersimpan", "error");
					}
				});
		}
		
		function delete_pm(id){
			swal({
				title: "Anda Yakin?",   
				text: "Anda Akan Segera Menghapus Pesan Yang Anda Pilih!",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Yakin",   
				cancelButtonText: "Tidak",   
				closeOnConfirm: false,   
				closeOnCancel: false
				},
				function(isConfirm){
					if(isConfirm){
						$.ajax({
							url: "<?= site_url('Pm/delete_perma')?>/"+id,
							type: "POST",
							dataType: "JSON",
							success : function(data){
								swal({
									title: "Berhasil!",   
									text: "Pesan Yang Anda Pilih Telah Terhapus",   
									type: "success",
									showConfirmButton: false
								});
								setTimeout("location.reload(true);", 1500);
							},error: function (jqXHR, textStatus, errorThrown){
								swal("Gagal", "Terjadi Kesalahan Pada Input Ke Database", "error");
							}
						});
					}else{
						swal("Cancelled", "Pesan Anda Tetap Tersimpan", "error");
					}
				});
		}
		
		function reload_table(){
			table.ajax.reload(null,false);
		}
		
		function refresh_editor(){
			$("#texteditor").summernote('reset');
		}
		
		<?php if(!empty($success)){?>
			swal("Berhasil!", "<?php echo $success ?>", "success");
		<?php }?>
		
		<?php if(!empty($error)){?>
			swal("Gagal!", "<?php echo $error ?>", "error");
		<?php }?>
	</script>
	
</html>