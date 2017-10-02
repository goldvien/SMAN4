<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model{
	function update($where , $data){
		$this->db->where($where);
		$this->db->update("t_dataguru", $data);
		
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
	function read($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$this->db->join("t_pendidikan",'t_pendidikan.id_pendidikan = t_dataguru.id_pendidikan');
		$this->db->join("t_pangkat",'t_pangkat.id_pangkat = t_dataguru.id_pangkat');
		$this->db->join("t_jabatan",'t_jabatan.id_jabatan = t_dataguru.id_jabatan');
		$this->db->join("t_matpel",'t_matpel.id_tugas = t_dataguru.id_tugas');
		$this->db->join("t_sekolah",'t_sekolah.id_sekolah = t_dataguru.id_sekolah');
		$this->db->join("t_level",'t_level.id_level = t_dataguru.id_level');
		$this->db->join("t_login",'t_login.NIP = t_dataguru.NIP');
		
		$query = $this->db->get("t_dataguru");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
}
?>