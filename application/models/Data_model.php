<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Data_model extends CI_Model{
	var $column_order = array('id_guru','NIP','nama','ttl','jk','id_pangkat','id_jabatan',null);
	var $column_search = array('NIP','nama');
	var $order = array('id_guru' => 'desc');
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	private function _get_datatables_query(){
		
		$this->db->from('t_dataguru');
		$this->db->join("t_pangkat",'t_pangkat.id_pangkat = t_dataguru.id_pangkat');
		$this->db->join("t_jabatan",'t_jabatan.id_jabatan = t_dataguru.id_jabatan');

		$i = 0;
	
		foreach ($this->column_search as $item)
		{
			if($_POST['search']['value'])
			{
				
				if($i===0) 
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
		$this->db->where("t_dataguru.id_level=3");
	}

	function get_datatables(){
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered(){
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	function create($data, $login){
		$this->db->insert("t_dataguru",$data);
		$this->db->insert("t_login",$login);
	}
	
	function update($where, $data){
		$this->db->where($where);
		$this->db->update("t_dataguru", $data);
		
		if($this->db->affected_rows()>0){
			$this->session->set_flashdata("success", "Data Guru Berhasil Diubah");
		}else{
			$this->session->set_flashdata("error", "Terjadi Kesalahan,".$this->db->error());
		}
	}
	
	function delete($where){
		$this->db->delete("t_login",array('NIP' => $where));
		$this->db->delete("t_dataguru",array('NIP' => $where));
	}
	
	function get_id($id){
		$this->db->where("id_guru",$id);
			
		$this->db->join("t_pendidikan",'t_pendidikan.id_pendidikan = t_dataguru.id_pendidikan');
		$this->db->join("t_pangkat",'t_pangkat.id_pangkat = t_dataguru.id_pangkat');
		$this->db->join("t_jabatan",'t_jabatan.id_jabatan = t_dataguru.id_jabatan');
		$this->db->join("t_matpel",'t_matpel.id_tugas = t_dataguru.id_tugas');
		$this->db->join("t_sekolah",'t_sekolah.id_sekolah = t_dataguru.id_sekolah');
		$this->db->join("t_level",'t_level.id_level = t_dataguru.id_level');
		
		$query = $this->db->get("t_dataguru");
		
		return $query->row();
	}
	
	function bacasek($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$query = $this->db->get("t_sekolah");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
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
		
		$query = $this->db->get("t_dataguru");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function bacaPen($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$query = $this->db->get("t_pendidikan");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function bacaPang($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$query = $this->db->get("t_pangkat");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function bacaJabat($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$query = $this->db->get("t_jabatan");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function bacaMatpel($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$query = $this->db->get("t_matpel");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function bacaSekolah($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$query = $this->db->get("t_sekolah");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
	
	function bacalevel($where=""){
		if(!empty($where))$this->db->where($where);
		$this->db->order_by("id_level", "desc");
		
		$query = $this->db->get("t_level");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
}

?>