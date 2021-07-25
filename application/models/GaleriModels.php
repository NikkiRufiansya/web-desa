<?php

class GaleriModels extends CI_Model
{
	public function insert($table, $data)
	{
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function delete($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		return TRUE;
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
