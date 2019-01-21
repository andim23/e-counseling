<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	function get_all_data_login()
	{
		$query = $this->db->get('admin');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}
	function get_all_data_guru()
	{
		$query = $this->db->get('tbl_guru');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}

}