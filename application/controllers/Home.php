<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("Data_model");
		
		$username = $this->session->userdata('username');
		if(empty($username)){redirect("login");}
	}
	
	function index(){
		$data['success'] = $this->session->flashdata("success");
		$data['error'] = $this->session->flashdata("error");
		
		$data['jml_guru'] = count($this->Data_model->read("t_dataguru.id_level=3"));
		$data['jml_penilai'] = count($this->Data_model->read("t_dataguru.id_level=2 OR t_dataguru.id_level=1"));
		$data['ternilai'] = count($this->Data_model->read("t_dataguru.status=1 AND t_dataguru.id_level=3"));
		$data['blm_ternilai'] = count($this->Data_model->read("t_dataguru.status=0 AND t_dataguru.id_level=3"));

		$data['menilai'] = $this->Data_model->read("t_dataguru.id_penilai='".$this->session->userdata('id_guru')."'");

		$data['notif_in'] = get_notif_inbox();
		$data['home'] = TRUE;
		$data['view'] = "v_dashboard";
		$this->load->view("index", $data);
	}
}
?>