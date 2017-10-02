<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("Rekap_model");
		$this->load->model("Penilaian_model");
		
		$username = $this->session->userdata('username');
		
		if(empty($username)){redirect("login");}
	}
	
	function index(){
		$data['notif_in'] = get_notif_inbox();
		$data['rekap'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['index'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_cover";
		$this->load->view("index",$data);
	}
	
	function list1($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 1 AND 6');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=1');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=1');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 1";
		$data['category'] = "Mengenal Karakteristik Peserta Didik.";
		$data['maks'] = 12;
		
		$data['rekap'] = TRUE;
		$data['list1'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list2($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 7 AND 12');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=2');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=2');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 2";
		$data['category'] = "Menguasai teori belajar dan prinsip-prinsip pembelajaran yang mendidik.";
		$data['maks'] = 12;
		
		$data['rekap'] = TRUE;
		$data['list2'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list3($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 13 AND 16');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=3');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=3');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 3";
		$data['category'] = "Pengembangan Kurikulum.";
		$data['maks'] = 8;
		
		$data['rekap'] = TRUE;
		$data['list3'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list4($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 17 AND 27');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=4');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=4');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 4";
		$data['category'] = "Kegiatan Pembelajaran yang Mendidik.";
		$data['maks'] = 22;
		
		$data['rekap'] = TRUE;
		$data['list4'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list5($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 28 AND 34');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=5');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=5');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 5";
		$data['category'] = "Memahami dan mengembangkan potensi.";
		$data['maks'] = 14;
		
		$data['rekap'] = TRUE;
		$data['list5'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list6($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 35 AND 40');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=6');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=6');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 6";
		$data['category'] = "Komunikasi dengan peserta didik.";
		$data['maks'] = 12;
		
		$data['rekap'] = TRUE;
		$data['list6'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list7($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 41 AND 45');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=7');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=7');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 7";
		$data['category'] = "Penilaian dan evaluasi.";
		$data['maks'] = 10;
		
		$data['rekap'] = TRUE;
		$data['list7'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list8($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 46 AND 50');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=8');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=8');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 8";
		$data['category'] = "Bertindak sesuai dengan norma agama, hukum, sosial dan kebudayaan nasional Indonesia.";
		$data['maks'] = 10;
		
		$data['rekap'] = TRUE;
		$data['list8'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list9($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 51 AND 55');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=9');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=9');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 9";
		$data['category'] = "Menunjukkan pribadi yang dewasa dan teladan.";
		$data['maks'] = 16;
		
		$data['rekap'] = TRUE;
		$data['list9'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list10($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 56 AND 63');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=10');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=10');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 10";
		$data['category'] = "Etos  kerja,  tanggung  jawab  yang  tinggi, dan  rasa  bangga menjadi guru.";
		$data['maks'] = 16;
		
		$data['rekap'] = TRUE;
		$data['list10'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list11($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 64 AND 66');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=11');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=11');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 11";
		$data['category'] = "Bersikap inklusif, bertindak objektif, serta tidak Diskriminatif.";
		$data['maks'] = 6;
		
		$data['rekap'] = TRUE;
		$data['list11'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list12($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 67 AND 69');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=12');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=12');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 12";
		$data['category'] = "Komunikasi  dengan  sesama  guru,  tenaga  kependidikan,  orang tua peserta didik, dan masyarakat.";
		$data['maks'] = 6;
		
		$data['rekap'] = TRUE;
		$data['list12'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list13($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 70 AND 73');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=13');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=13');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 13";
		$data['category'] = "Penguasaan materi, struktur, konsep, dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu.";
		$data['maks'] = 6;
		
		$data['rekap'] = TRUE;
		$data['list13'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function list14($id){
		$data['result'] = $this->Penilaian_model->read('id_nilai Between 74 AND 79');
		$data['cek'] = $this->Penilaian_model->getPenilaian('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=14');
		$data['nilai'] = $this->Penilaian_model->getNilaiHasil('id_guru='.$this->session->userdata("id_guru").' AND '.'id_bagian=14');
		$data['notif_in'] = get_notif_inbox();
		$data['title'] = "Penilaian untuk Kompetensi 14";
		$data['category'] = "Mengembangkan keprofesionalan melalui tindakan reflektif.";
		$data['maks'] = 12;
		
		$data['rekap'] = TRUE;
		$data['list14'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_listskp";
		$this->load->view("index", $data);
	}
	
	function lamb1b($id){
		$data['notif_in'] = get_notif_inbox();
		$data['guru'] = $this->Rekap_model->read("id_guru=$id");
		
		$data['rekap'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['lamb'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_lam1b";
		$this->load->view("index",$data);
	}
	
	function lamb1c($id){
		$data['notif_in'] = get_notif_inbox();
		$data['nilai'] = $this->Penilaian_model->getNilaiHasilC("id_guru=$id");
		$data['cek'] = $this->Penilaian_model->getPenilaianLamp("id_guru=$id");
		$data['guru'] = $this->Rekap_model->read("id_guru=$id");
		$data['res'] = $this->Rekap_model->readLamp("bagian='A'");
		$data['res1'] = $this->Rekap_model->readLamp("bagian='B'");
		$data['res2'] = $this->Rekap_model->readLamp("bagian='C'");
		$data['res3'] = $this->Rekap_model->readLamp("bagian='D'");
		
		$data['rekap'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['lamc'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_lam1c";
		$this->load->view("index",$data);
	}
	
	function lamb1d($id){
		$data['notif_in'] = get_notif_inbox();
		$data['guru'] = $this->Rekap_model->read("id_guru=$id");
		
		$data['rekap'] = TRUE;
		$data['form_pkg'] = TRUE;
		$data['lamd'] = TRUE;
		$data['view'] = "rekap/v_rekap";
		$data['load'] = "rekap/v_lam1d";
		$this->load->view("index",$data);
	}
}