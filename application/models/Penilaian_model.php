<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian_model extends CI_Model{
	function create($data){
		$this->db->set($data);
		$this->db->insert("t_penilaian",$data);
	}
	
	function createNilaiHasil($data){
		$this->db->set($data);
		$this->db->insert("t_nilaihasil",$data);
	}
	function createNilaiLamp($data){
		$this->db->set($data);
		$this->db->insert("t_nilaihasil_c",$data);
	}
	
	function createLamp($data){
		$this->db->set($data);
		$this->db->insert("t_penilaian_c",$data);
	}
	
	function update($where, $data){
		$this->db->where($where);
		$this->db->update("t_penilaian", $data);
	}
	
	function updateNilaiHasil($where, $data){
		$this->db->where($where);
		$this->db->update("t_nilaihasil", $data);
	}

	function updateNilaiLamp($where, $data){
		$this->db->where($where);
		$this->db->update("t_nilaihasil_c", $data);
	}
	
	function updateLamp($where, $data){
		$this->db->where($where);
		$this->db->update("t_penilaian_c", $data);
	}
	
	function read($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_nilaikomp");
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
	
	function getNilaiHasil($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_nilaihasil");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}

	function getNilaiHasilC($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_nilaihasil_c");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function getPenilaian($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_penilaian");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function getPenilaianLamp($where="", $order=""){
		if(!empty($where) ) $this->db->where($where);
		if(!empty($order) ) $this->db->order_by($order);
		
		$query = $this->db->get("t_penilaian_c");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
}
?>