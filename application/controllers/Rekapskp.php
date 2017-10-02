<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekapskp extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model("Profil_model");
		$username = $this->session->userdata('username');
		
		if(empty($username)){redirect("login");}
	}
	
	function index(){
		$data['notif_in'] = get_notif_inbox();
		$username = $this->session->userdata('username');
		$result = $this->Profil_model->read("t_dataguru.NIP = '$username'");
		$data['result'] = $result[0];
		$data['rekap'] = TRUE;
		$data['form_skp'] = TRUE;
		$data['index'] = TRUE;

		$data['view'] = "rekap/v_rekapskp";
		$data['load'] = "rekap/v_coverskp";
		$this->load->view("index",$data);
	}

	function list1($id){

	}

	function list2($id){
		
	}

	function list3($id){
		
	}

	function list4($id){
		
	}
}