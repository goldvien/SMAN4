<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	function get_notif_inbox(){
		$CI = &get_instance();
		$CI->db->where(TF_PMTO_RECIPIENT, $CI->session->userdata("id_guru"));
		$CI->db->where(TF_PMTO_DELETED, 0);
		
		$query = $CI->db->get("privmsgs_to");
	
		if($query AND $query->num_rows() !=0){
			return $query->result();
		}else{
			return array();
		}
	}
?>