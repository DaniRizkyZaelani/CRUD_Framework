<?php

class Product_model extends CI_Model
{

	private $_table = 'produk';

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

	public function insert($produk)
	{
		return $this->db->insert($this->_table, $produk);
	}

	public function update($produk)
	{
		if (!isset($produk['id'])) {
			return;
		}

		return $this->db->update($this->_table, $produk, ['id' => $produk['id']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}

	public function count(){
		return $this->db->count_all($this->_table);
	}
}
