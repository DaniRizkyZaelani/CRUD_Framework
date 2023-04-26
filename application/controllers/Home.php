<?php 
class Home extends CI_Controller{

	public function index ()
	{
		$this->load->model('product_model');
		
		$data = [
			"product_count" => $this->product_model->count(),
		];

		$this->load->view('admin/home.php', $data);
	}
} 

