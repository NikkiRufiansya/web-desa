<?php

class AdminModels extends CI_Model
{
	public function cek_login($email)
	{
		$hasil = $this->db->where('email', $email)->limit(1)->get('admin');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

}

