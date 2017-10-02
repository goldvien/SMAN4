<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap_model extends CI_Model{
	public function read($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$this->db->join("t_pangkat",'t_pangkat.id_pangkat = t_dataguru.id_pangkat');
		$this->db->join("t_sekolah",'t_sekolah.id_sekolah = t_dataguru.id_sekolah');
		$this->db->join("t_pendidikan",'t_pendidikan.id_pendidikan = t_dataguru.id_pendidikan');
		$this->db->join("t_matpel",'t_matpel.id_tugas = t_dataguru.id_tugas');
		
		$query = $this->db->get("t_dataguru");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function readLamp($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_nilaikomp_c");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
}
?>