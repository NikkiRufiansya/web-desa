<?php

class TentangDesaModels extends CI_Model
{
	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function getDataById($table, $where)
	{
		$query = $this->db->get_where($table, $where);
		$query = $query->result_array();
		return $query;
	}


	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
