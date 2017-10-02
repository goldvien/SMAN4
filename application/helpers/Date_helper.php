<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	function date_differ($date1){
		$CI =& get_instance();
		$CI->lang->load('date');
		
		$zone = new DateTimeZone('Asia/Jakarta');
		$date 	= new DateTime($date1);
		$now 	= new DateTime();
		$now->setTimezone($zone);
		
		//return $date->diff($now)->format("%d days, %h hours and %i minutes ago");
		
		if($date->diff($now)->format("%y")>0)
		{
			return $date->diff($now)->format("%y Tahun Lalu");
		}
		else if($date->diff($now)->format("%m")>0)
		{
			return $date->diff($now)->format("%m Bulan Lalu");
		}
		else if($date->diff($now)->format("%d")>0)
		{
			return $date->diff($now)->format("%d Hari Lalu");
		}
		else if($date->diff($now)->format("%h")>0)
		{
			return $date->diff($now)->format("%h Jam Lalu");
		}
		else if($date->diff($now)->format("%i")>0)
		{
			return $date->diff($now)->format("%i Menit Lalu");
		}
		else
		{
			return $date->diff($now)->format("%s Detik Lalu");
		}
	}
?>