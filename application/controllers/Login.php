<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("login_model");
	}
	
	function index(){
		$data['error'] = $this->session->flashdata("error");
		$this->load->view("login/new_vlogin", $data);
	}
	
	function do_login(){
		$username = $this->login_model->anti($this->input->post("username"));
		$password = $this->login_model->anti($this->input->post("password"));
		
		$result = $this->login_model->read("t_dataguru.NIP='".$username."' AND t_login.password='".md5($password)."' OR t_login.username='".$username."' AND t_login.password='".md5($password)."'");
		
		if(count($result) !=0){
			$this->session->set_userdata("username", $result[0]->NIP);
			$this->session->set_userdata("nama", $result[0]->nama);
			$this->session->set_userdata("image", $result[0]->image);
			$this->session->set_userdata("level",$result[0]->id_level);
			$this->session->set_userdata("id_guru",$result[0]->id_guru);
			
			$this->session->set_flashdata("success", "Berhasil Login!");
			
			redirect("home");
		}else{
			$this->session->set_flashdata("error", "Username Atau Password Salah!");
			
			redirect("login");
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect("login");
	}
}
?>