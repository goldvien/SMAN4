<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class Penilaian extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("Penilaian_model");
		
		$username = $this->session->userdata('username');
		
		if(empty($username)){redirect("login");}
	}
	
	function index($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 1 AND 6');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$id_guru.' AND '.'id_bagian=1');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$id_guru.' AND '.'id_bagian=1');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index1($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 7 AND 12');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$id_guru.' AND '.'id_bagian=2');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$id_guru.' AND '.'id_bagian=2');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index1'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index2($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 13 AND 16');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=3');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=3');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index2'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index3($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 17 AND 27');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=4');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=4');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index3'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index4($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 28 AND 34');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=5');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=5');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index4'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index5($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 35 AND 40');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=6');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=6');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index5'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index6($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 41 AND 45');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=7');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=7');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index6'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index7($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 46 AND 50');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=8');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=8');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index7'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index8($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 51 AND 55');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=9');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=9');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index8'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index9($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 56 AND 63');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=10');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=10');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index9'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index10($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 64 AND 66');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=11');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=11');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index10'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index11($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 67 AND 69');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=12');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=12');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index11'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index12($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 70 AND 73');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=13');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=13');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index12'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index13($id_guru){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 74 AND 79');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=14');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=14');
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['index13'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_list";
		$this->load->view("index", $data);
	}
	
	function index14($id_guru){
		$data['result'] = $this->Penilaian_model->readLamp("bagian='A'");
		$data['result1'] = $this->Penilaian_model->readLamp("bagian='B'");
		$data['result2'] = $this->Penilaian_model->readLamp("bagian='C'");
		$data['result3'] = $this->Penilaian_model->readLamp("bagian='D'");
		$data['nilai'] = $this->Penilaian_model->getNilaiHasilC('id_guru='.$this->session->userdata("id_guru"));
		$data['cek'] = $this->Penilaian_model->getPenilaianLamp('id_guru='.$this->session->userdata("id_guru"));
		$data['notif_in'] = get_notif_inbox();
		$data['id'] = $id_guru;
		
		$data['nilpkg'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "penilaian/v_lamp";
		$this->load->view("index", $data);
	}
	
	public function nilai($id_guru,$id_bagian,$id, $maks){
		$post = $this->input->post(NULL, TRUE);
		$this->load->model('Data_model');
		$post['id_guru'] = $id_guru;
		$post['id_bagian'] = $id_bagian;
		$post['id_nilai'] = $id;
		$guru = array('status' => 1);
		
		$result = $this->Penilaian_model->getPenilaian("id_nilai='".$id."' AND id_guru='".$id_guru."'");
		if(count($result) !=0){
			$this->Penilaian_model->update("id_penilaian='".$result[0]->id_penilaian."'",$post);
		}else{
			$this->Penilaian_model->create($post);
		}
		
		$result2 = $this->Penilaian_model->getNilaiHasil("id_guru='".$id_guru."' AND id_bagian='".$id_bagian."'");
		if(count($result2) !=0){
			$nilai = $this->Penilaian_model->getPenilaian("id_bagian='".$id_bagian."' AND id_guru='".$id_guru."'");
			$data['jumlah'] = 0;
			$data['id_bagian'] = $id_bagian;
			$data['persentase'] = 0;
			$data['total_nilai'] = 0;
			$data['id_guru'] = $id_guru;
			$data['id_penilaian'] = $result2[0]->id_penilaian;
			foreach($nilai as $key){
				$data['jumlah'] += $key->nilai;
			}
			$data['persentase'] = $data['jumlah']/$maks * 100;
			if($data['persentase']==0){
				$data['total_nilai'] = 0;
			}else if($data['persentase']<=25){
				$data['total_nilai'] = 1;
			}else if($data['persentase']<=50){
				$data['total_nilai'] = 2;
			}else if($data['persentase']<=75){
				$data['total_nilai'] = 3;
			}else{
				$data['total_nilai'] = 4;
			}
			$this->Penilaian_model->updateNilaiHasil("id_guru='".$id_guru."' AND id_bagian='".$id_bagian."'",$data);
			$this->Data_model->update("id_guru='".$id_guru."'",$guru);
		}else{
			$nilai = $this->Penilaian_model->getPenilaian("id_bagian='".$id_bagian."' AND id_guru='".$id_guru."'");
			$data['jumlah'] = 0;
			$data['id_bagian'] = $id_bagian;
			$data['persentase'] = 0;
			$data['total_nilai'] = 0;
			$data['id_guru'] = $id_guru;
			
			foreach($nilai as $key){
				$data['jumlah'] += $key->nilai;
			}
			$data['persentase'] = $data['jumlah']/$maks * 100;
			if($data['persentase']==0){
				$data['total_nilai'] = 0;
			}else if($data['persentase']<=25){
				$data['total_nilai'] = 1;
			}else if($data['persentase']<=50){
				$data['total_nilai'] = 2;
			}else if($data['persentase']<=75){
				$data['total_nilai'] = 3;
			}else{
				$data['total_nilai'] = 4;
			}
			$this->Penilaian_model->createNilaiHasil($data);
			$this->Data_model->update("id_guru='".$id_guru."'",$guru);
		}
		echo json_encode($data);
	}
	
	public function nillamp($id_guru, $id_lamp){
		$post = $this->input->post(NULL, TRUE);
		$post['id_guru'] = $id_guru;
		$post['id_komp'] = $id_lamp;
		
		$result = $this->Penilaian_model->getPenilaianLamp("id_komp='".$id_lamp."' AND id_guru='".$id_guru."'");
		if(count($result) !=0){
			$this->Penilaian_model->updateLamp("id_penilaian='".$result[0]->id_penilaian."'",$post);
		}else{
			$this->Penilaian_model->createLamp($post);
		}
		$result2 = $this->Penilaian_model->getNilaiHasilC("id_guru='".$id_guru."'");
		if(count($result2) !=0){
			$nilai = $this->Penilaian_model->getPenilaianLamp("id_guru='".$id_guru."'");
			$data['jumlah'] = 0;
			foreach($nilai as $key){
				$data['jumlah'] += $key->nilai;
			}
			$this->Penilaian_model->updateNilaiLamp("id_nilai='".$result2[0]->id_nilai."'",$data);
		}else{
			$nilai = $this->Penilaian_model->getPenilaianLamp("id_guru='".$id_guru."'");
			$data['id_guru'] = $id_guru;			
			$data['jumlah'] = 0;
			foreach($nilai as $key){
				$data['jumlah'] += $key->nilai;
			}
			$this->Penilaian_model->createNilaiLamp($data);
		}
		echo json_encode($data['jumlah']);
	}
}
?>