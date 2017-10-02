<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("Profil_model");
		$this->load->model("Login_model");
		
		$username = $this->session->userdata('username');
		if(empty($username)){redirect("login");}
	}
	
	function index(){
		$username = $this->session->userdata('username');
		$result = $this->Profil_model->read("t_dataguru.NIP = '$username'");
		$data['notif_in'] = get_notif_inbox();
		$data['result'] = $result[0];
		
		$data['success'] = $this->session->flashdata("success");
		$data['error'] = $this->session->flashdata("error");
		
		$data['vprofil'] = TRUE;
		$data['view'] = "profil/v_profil";
		$this->load->view("index", $data);
	}
	
	function do_ganti($id){
		$post = $this->input->post(NULL, TRUE);
		$dataguru['tempat_lhr']= $post['tempat_lhr'];
		$dataguru['tgl_lhr']= $post['tgl_lhr'];
		$dataguru['nama']= $post['nama'];
		$dataguru['alamat_diri']= $post['alamat_diri'];
		$dataguru['kota_diri']= $post['kota_diri'];
		$dataguru['kecamatan_diri']= $post['kecamatan_diri'];
		$dataguru['kode_pos']= $post['kode_pos'];
		$dataguru['tentang']= $post['tentang'];
		
		$login['password'] = md5($post['password']);
		$login['username'] = $post['username'];
		$this->Profil_model->update("NIP='$id'", $dataguru);
		$this->Login_model->update("NIP='$id'", $login);
		
		if($this->Profil_model->update("NIP='$id'", $dataguru)==TRUE || $this->Login_model->update("NIP='$id'", $login)==TRUE){
			$this->session->set_flashdata("success", "Data Anda Berhasil Diubah");
			$this->session->set_userdata("nama", $dataguru['nama']);
		} else {
			$this->session->set_flashdata("error", "Data Diri Anda Gagal Dirubah");
		}
		
		redirect('Profil');
	}
	
	function upload($id){
		$this->load->library('upload');
		$result = $this->Profil_model->read("t_dataguru.NIP = '$id'");
		
		$nmfile = "file_".time();
		$config['upload_path'] = "./media/assets/img/users/";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "2048";
		$config['file_name'] = $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['image']['name'])
		{
			if($result[0]->image !="default-avatar.png" && !empty($result[0]->image)){
				$dir = "./media/assets/img/users/".$result[0]->image;
				if(file_exists($dir)){
					unlink($dir);
				}
			}
			
			if($this->upload->do_upload('image'))
			{
				$file = $this->upload->data();
				$data = array(
					'image' => $file['file_name']
				);
				
				$this->Profil_model->update("NIP='$id'", $data);
				$this->session->set_flashdata("success", 'Photo Profil Berhasil Diubah');
				$this->session->set_userdata("image", $file['file_name']);
				
				redirect('profil');
			}else{
				$this->session->set_flashdata("error", 'Gagal Mengganti Photo Profil'.$this->upload->display_errors());
				
				redirect('profil');
			}
		}
;	}
}
?>