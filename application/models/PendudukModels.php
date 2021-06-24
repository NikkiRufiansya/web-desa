<?php

class PendudukModels extends CI_Model
{

	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function getTotalPenduduk()
	{
		return $this->db->query('SELECT COUNT(id) AS jumlahPenduduk FROM `penduduk`');
	}

	public function getTotalBalita()
	{
		return $this->db->query('SELECT COUNT(usia) AS totalBalita FROM `penduduk` WHERE usia <= 6');
	}

	public function getTotalDewasa()
	{
		return $this->db->query('SELECT COUNT(usia) AS totalDewasa FROM `penduduk` WHERE usia >= 18 && usia <= 64');
	}

	public function getTotalLansia()
	{
		return $this->db->query('SELECT COUNT(usia) AS totalLansia FROM `penduduk` WHERE usia >= 65');
	}

	public function getTotalGender()
	{
		return $this->db->query("SELECT SUM(gender = 'Pria') as Pria, SUM(gender = 'Wanita') as wanita FROM penduduk ORDER By gender");
	}

	public function getTotalPendidikan()
	{
		return $this->db->query("SELECT 
       SUM(pendidikan = 'Belum Sekolah') as belum_sekolah, 
       SUM(pendidikan = 'Tidak Tamat SD') as tidak_tamat_sd, 
       SUM(pendidikan = 'SD') as sd, 
       SUM(pendidikan = 'SMP') as smp, 
       SUM(pendidikan = 'SMA') as sma, 
       SUM(pendidikan = 'S1') as s1, 
       SUM(pendidikan = 'S2') as s2, 
       SUM(pendidikan = 'S3') as s3 FROM penduduk ORDER By pendidikan");
	}
}
