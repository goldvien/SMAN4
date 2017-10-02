<?php
	$data['id_guru'] = $this->session->userdata("id_guru");
	
	if(@$form_skp){
		$this->load->view('template/v_skpsidebar',$data);
	}else if(@$form_pkg){
		$this->load->view('template/v_pkgsidebar',$data);
	}else{
		$this->load->view('template/v_sidebar',$data);
	}
	
	$this->load->view('template/v_header', $data);
	
	$this->load->view($view);
	
	$this->load->view('template/v_footer');
?>