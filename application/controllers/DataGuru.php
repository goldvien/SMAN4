<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataGuru extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("Data_model");
		
		$username = $this->session->userdata('username');
		if(empty($username)){redirect("login");}
	}
	
	function index(){
		$data['res'] = $this->Data_model->bacasek("id_sekolah=1",'');
		$data['result'] = $this->Data_model->read("t_dataguru.id_level=2 OR t_dataguru.id_level=1");
		$data['notif_in'] = get_notif_inbox();
		
		$data['success'] = $this->session->flashdata("success");
		$data['error'] = $this->session->flashdata("error");
		
		$data['pendidikan'] = $this->Data_model->bacaPen();
		$data['pangkat'] = $this->Data_model->bacaPang();
		$data['jabatan'] = $this->Data_model->bacaJabat();
		$data['matpel'] = $this->Data_model->bacaMatpel();
		$data['sekolah'] = $this->Data_model->bacaSekolah();
		$data['level'] = $this->Data_model->bacalevel();
		$data['penilai'] = $this->Data_model->read("id_guru=2");
		$data['id_guru'] = "";
		$data['bagian'] = "";
		
		$data['vadmin'] = TRUE;
		$data['view'] = "dataguru/v_data";
		$this->load->view("index", $data);
	}
	
	function ajax_data(){
		$list = $this->Data_model->get_datatables();
		$level = $this->session->userdata('level');
		$data = array();
		$no = 1;
		
		foreach($list as $guru){
			$row = array();
			$admin ='<a rel="tooltip" title="Like" class="table-action like" href="'.site_url("Penilaian/index")."/".$guru->id_guru.'" title="Like">
					<i class="pe-7s-graph2"></i>
					</a>
					<a rel="tooltip" class="table-action edit" href="DataGuru/edit/'.$guru->id_guru.'"/>
						<i class="fa fa-edit"></i>
					</a>
					<a class="table-action remove" href="javascript:void(0)" rel="tooltip" title="Remove" onclick="delete_guru('."'".$guru->NIP."'".')">
						<i class="fa fa-remove"></i>
					</a>';
			$user = '<a rel="tooltip" title="Like" class="table-action like" href="'.site_url("Penilaian/index")."/".$guru->id_guru.'" title="Like">
						<i class="pe-7s-graph2"></i>
					</a>';
			$row[] = $no++;
			$row[] = '<a href="javascript:void(0)" onclick="get_data_guru('."'".$guru->id_guru."'".')">'.$guru->NIP.'</a>';
			$row[] = $guru->nama;
			$row[] = $guru->tempat_lhr.', '.$guru->tgl_lhr;
			$row[] = $guru->jk;
			$row[] = $guru->nama_pangkat;
			$row[] = $guru->nama_jabatan;
			$row[] = ($level==1) ? $admin : $user;
			$data[] = $row;
		}
		
		$output = array(
			"draw" => $_POST['draw'],
			"recordsFiltered" => $this->Data_model->count_filtered(),
			"data" => $data,
		); 
		echo json_encode($output);
	}
	
	function ajax_get($id){
		$data = $this->Data_model->get_id($id);
		echo json_encode($data);
	}
	
	function edit($id){
		$result = $this->Data_model->read("id_guru= '$id'");
		$data['notif_in'] = get_notif_inbox();
		
		$data['pendidikan'] = $this->Data_model->bacaPen();
		$data['pangkat'] = $this->Data_model->bacaPang();
		$data['jabatan'] = $this->Data_model->bacaJabat();
		$data['matpel'] = $this->Data_model->bacaMatpel();
		$data['sekolah'] = $this->Data_model->bacaSekolah();
		$data['level'] = $this->Data_model->bacalevel();
		$data['penilai'] = $this->Data_model->read("id_guru=2");
		
		$data['result'] = $result[0];
		$data['vadmin'] = TRUE;
		$data['view'] = "dataguru/v_form";
		$this->load->view("index",$data);
	}
	
	function do_add(){
		$post = $this->input->post(NULL, TRUE);
		
		$useradd['NIP'] = $post["nip"];
		$useradd['username'] = $post["nip"];
		$useradd['password'] = md5($post["nip"]);
		$useradd['id_level'] = $post["id_level"];
		
		$this->Data_model->create($post, $useradd);
		
		echo json_encode(array("status" => TRUE));
	}
	
	function do_edit($id){
		$post = $this->input->post(NULL, TRUE);
		$this->Data_model->update("id_guru='$id'", $post);
		
		redirect('DataGuru');
	}
	
	function delete($id){
		$result = $this->Data_model->read("t_dataguru.NIP = '$id'");
		$dir = "./media/assets/img/users/".$result[0]->image;
		
		if(file_exists($dir)){
			unlink($dir);
		}
		
		$this->Data_model->delete($id);
		echo json_encode(array("status" => TRUE));
	}
}

?>