<?php

class User_model extends CI_Model
{
	public function get_data_khusus($tabel, $where): array
	{
		$this->db->order_by('id', 'DESC');
		$syai = $this->db->get_where($tabel, $where);

		return $syai->result_array();
	}

	public function masukkan($tabel, $data)
	{
		return $this->db->insert($tabel, $data);
	}
}
