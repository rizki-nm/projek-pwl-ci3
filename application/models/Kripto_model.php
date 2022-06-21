<?php

class Kripto_model extends CI_Model
{
	private $_table = 'kripto';

	public function get()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function insert($kripto)
	{
		return $this->db->insert($this->_table, $kripto);
	}

	public function update($kripto)
	{
		if (!isset($kripto['id'])) {
			return;
		}

		return $this->db->update($this->_table, $kripto, ['id' => $kripto['id']]);	}

	public function delete($id)
	{
		if(!$id){
			return;
		}

		$this->db->delete($this->_table, ['id' => $id]);
	}

}
