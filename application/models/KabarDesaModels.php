<?php

class KabarDesaModels extends CI_Model
{
	public function insert($table, $data)
	{
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function getAllData($table)
	{
		return $this->db->get($table,3,'DESC');
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

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('kabar_desa');
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
	}


	function get_infromasi_list($limit, $start){
		$query = $this->db->get('kabar_desa', $limit, $start);
		return $query;
	}


}
