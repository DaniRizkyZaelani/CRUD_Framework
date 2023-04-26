<?php

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}

	public function index()
	{
	$data['produks'] = $this->product_model->get();
		$this->load->view('admin/product_list.php', $data);
	}


	public function new()
	{
		if ($this->input->method() === 'post') {
			// TODO: Lakukan validasi sebelum menyimpan ke model
			
			$produk = [
				'nama' => $this->input->post('nama'),
				'qty' => $this->input->post('qty'),
				'price' => $this->input->post('price'),
			];

			$saved = $this->product_model->insert($produk);

			if ($saved) {
				$this->session->set_flashdata('message', 'Produk baru berhasil ditambahkan');
				return redirect('product');
			}
		}

		$this->load->view('admin/product_new_form.php');
	}

	public function edit($id = null)
	{
		$data['produk'] = $this->product_model->find($id);

		if (!$data['produk'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			// TODO: lakukan validasi data seblum simpan ke model
			$produk = [
				'id' => $id,
				'nama' => $this->input->post('nama'),
				'qty' => $this->input->post('qty'),
				'price' => $this->input->post('price'),
			];
			$updated = $this->product_model->update($produk);
			if ($updated) {
				$this->session->set_flashdata('message', 'produk was updated');
				redirect('product');
			}
		}

		$this->load->view('admin/product_edit_form.php', $data);
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->product_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Produk was deleted');
			redirect('product');
		}
	}
}
