<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaianskp_model extends CI_Model{
	function createNilai($data){
		$this->db->set($data);
		$this->db->insert("t_penilaianskp", $data);
	}
	
	function createHasil($data){
		$this->db->set($data);
		$this->db->insert("t_nilaihasilskp", $data);
	}
	
	function updateNilai($where, $data){
		$this->db->where($where);
		$this->db->update("t_penilaianskp", $data);
	}
	
	function updateHasil($where, $data){
		$this->db->where($where);
		$this->db->update("t_nilaihasilskp", $data);
	}
	
	public function read($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_nilaikompskp");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	public function getHasil($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_nilaihasilskp");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	public function getNilai($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_penilaianskp");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
}
?>