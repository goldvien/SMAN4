$(function () {
	$('.check').iCheck({
		checkboxClass: 'icheckbox_square-red',
		radioClass: 'iradio_square-red',
		increaseArea: '20%' // optional
	});

	[].slice.call(document.querySelectorAll('.tabs')).forEach(function( el ){
		new CBPFWTabs( el );
	});
});
	
$(document).ready(function(){
	var $table = $('#fresh-table'),
		$tambahBtn = $('#tambahBtn'), 
		$freshBtn = $('#freshBtn'), 
		full_screen = true;
		window_height = $(window).height();
		table_height = window_height - 20;
	
    $table.bootstrapTable({
		toolbar: ".toolbar",
        search: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        striped: true,
        sortable: true,
        height: table_height,
        pageSize: 25,
        pageList: [25,50,100],
        
        formatShowingRows: function(pageFrom, pageTo, totalRows){
            //do nothing here, we don't want to show the text "showing x of y from..." 
        },
        formatRecordsPerPage: function(pageNumber){
            return pageNumber + " rows visible";
        },
        icons: {
            refresh: 'fa fa-refresh',
            toggle: 'fa fa-th-list',
            columns: 'fa fa-columns',
            detailOpen: 'fa fa-plus-circle',
            detailClose: 'fa fa-minus-circle'
        }
    });
    
    $freshBtn.click(function () {
        location.reload();
    });
    
    $(window).resize(function () {
        $table.bootstrapTable('resetView');
    });
	
	$(".date").datepicker({
		todayBtn: "linked",
		format: "dd-MM-yyyy"
	});

	$(".tgl").datepicker({
		todayBtn: "linked",
		format: "yyyy-mm-dd"
	});
	
	$("#contact-form input, #contact-form textarea").keyup(function() {
		$("#answer").fadeOut();
	});
	
	$("#photo").fileinput({
		initialPreviewConfig:[{showZoom: false}],
		allowedFileTypes: ["image"],
		browseClass: "btn btn-primary btn-block",
		uploadClass: "btn btn-success btn-block btn-fill",
		showCaption: false,
		showRemove: false,
		previewClass: "bg-warning"
	});
	
	$("#texteditor").summernote({
		minHeight: 350,
		lang : 'id-ID',
		focus : true,
		dialogsInBody: true,
		toolbar: [
			['style', ['style']],
			['font', ['bold', 'italic', 'underline', 'clear']],
			['fontname', ['fontname']],
			['fontsize', ['fontsize']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			['insert', ['link', 'picture', 'hr']]
		]
	});

	$('#nip').keyup(function() {
		$('#btnSave').removeAttr('disabled');
		
		if( $('#nip').val().length < 1){
			$('#btnSave').attr('disabled', true);
		}
	});
	
	$(".angka").keypress(function (e) {
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			$(".mdl-textfield__error").css("visibility", "visible").show();
			$(".mdl-textfield--floating-label").css("color", "rgb(213,0,0)");
			return false;
		}else{
			$(".mdl-textfield__error").css("visibility", "visible").fadeOut("slow");
			$(".mdl-textfield--floating-label").css("color", "rgb(63,81,181)");
			return true;
		}
	});
});


