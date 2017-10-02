<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaianskp extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("Penilaianskp_model");
		$username = $this->session->userdata('username');
		
		if(empty($username)){redirect("login");}
	}
	
	function index(){
		$data['result'] = $this->Penilaianskp_model->read("id_nilskp Between 1 AND 8");
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Orientasi Pelayanan";
		$data['maks'] = 16;
		$data['bagian'] = 1;
		
		$data['nilskp'] = TRUE;
		$data['form_skp'] = TRUE;
		$data['index'] = TRUE;
		$data['view'] = "skp/v_skp";
		
		$this->load->view("index", $data);
	}
	
	function index1(){
		$data['result'] = $this->Penilaianskp_model->read("id_nilskp Between 9 AND 18");
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Integritas";
		$data['maks'] = 20;
		$data['bagian'] = 2;
		
		$data['nilskp'] = TRUE;
		$data['form_skp'] = TRUE;
		$data['index1'] = TRUE;
		$data['view'] = "skp/v_skp";
		
		$this->load->view("index", $data);
	}
	
	function index2(){
		$data['result'] = $this->Penilaianskp_model->read("id_nilskp Between 19 AND 25");
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Komitmen";
		$data['maks'] = 14;
		$data['bagian'] = 3;
		
		$data['nilskp'] = TRUE;
		$data['form_skp'] = TRUE;
		$data['index2'] = TRUE;
		$data['view'] = "skp/v_skp";
		
		$this->load->view("index", $data);
	}
	
	function index3(){
		$data['result'] = $this->Penilaianskp_model->read("id_nilskp Between 26 AND 30");
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Disiplin";
		$data['maks'] = 10;
		$data['bagian'] = 4;
		
		$data['nilskp'] = TRUE;
		$data['form_skp'] = TRUE;
		$data['index3'] = TRUE;
		$data['view'] = "skp/v_skp";
		
		$this->load->view("index", $data);
	}
	
	function index4(){
		$data['result'] = $this->Penilaianskp_model->read("id_nilskp Between 31 AND 36");
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Kerja Sama";
		$data['maks'] = 12;
		$data['bagian'] = 5;
		
		$data['nilskp'] = TRUE;
		$data['form_skp'] = TRUE;
		$data['index4'] = TRUE;
		$data['view'] = "skp/v_skp";
		
		$this->load->view("index", $data);
	}
	
	public function nilaiskp($id_guru, $id_bagian, $maks, $id_nilai){
		$post = $this->input->post(NULL, TRUE);
		$post['id_guru'] = $id_guru;
		$post['id_bagian'] = $id_bagian;
		$post['id_nilai'] = $id_nilai;
		
		//Input Nilai Ke t_penilaianskp
		$result = $this->Penilaianskp_model->getNilai("id_nilai='$id_nilai' AND id_guru='$id_guru'");
		if(count($result) !=0){
			$this->Penilaianskp_model->updateNilai("id_penilaian='".$result[0]->id_penilaian."'", $post);
		}else{
			$this->Penilaianskp_model->createNilai($post);
		}
		
		//Input Nilai Keseluruhan ke t_nilaihasilskp
		$nilaiskp = $this->Penilaianskp_model->getHasil("id_guru='$id_guru'");
		if(count($nilaiskp !=0)){
			$nilai = $this->Penilaianskp_model->getNilai("id_bagian='$id_bagian' AND id_guru='$id_guru'");
			
			$data['id_bagian'] = $id_bagian;
			$data['id_guru'] = $id_guru;
			$data['total'] = 0;
			$data['nilaiaspek'] = 0;
			$data['id_penilaian'] = $nilaiskp[0]->id_penilaian;
			foreach($nilai as $key){
				$data['total'] += $key->nilai;
			}
			$data['nilaiaspek'] = $data['total']/$maks*100;
			
			$this->Penilaianskp_model->updateHasil("id_penilaian='".$nilaiskp[0]->id_penilaian."'", $data);
		}else{
			$nilai = $this->Penilaianskp_model->getNilai("id_bagian='$id_bagian' AND id_guru='$id_guru'");
			
			$data['id_bagian'] = $id_bagian;
			$data['id_guru'] = $id_guru;
			$data['total'] = 0;
			$data['nilaiaspek'] = 0;
			$data['id_penilaian'] = $nilaiskp[0]->id_penilaian;
			foreach($nilai as $key){
				$data['total'] += $key->nilai;
			}
			$data['nilaiaspek'] = $data['total']/$maks*100;
			
			$this->Penilaianskp_model->createHasil($data);
		}
		echo json_encode($data);
	}
}
?>