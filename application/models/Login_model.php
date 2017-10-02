<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Login_model extends CI_Model{
	function update($where, $data){
		$this->db->where($where);
		$this->db->update("t_login", $data);
		
		return true;
	}
	
	function anti($inp){
        if(is_array($inp))
            return array_map(__METHOD__, $inp);
        if(!empty($inp) && is_string($inp)) {
            return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
        }
        return $inp;
	} 
	
	function read($where="",$order=""){
		if(!empty($where))$this->db->where($where);
		if(!empty($order))$this->db->order_by($order);
		
		$this->db->join("t_dataguru",'t_dataguru.NIP = t_login.NIP');
		
		$query = $this->db->get("t_login");
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
}