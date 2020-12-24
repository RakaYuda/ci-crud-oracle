<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
	}
	
	public function index()
	{	
		$data['product'] = $this->product_model->get_all_product();
		$this->load->view('report_data', $data);
	}

	public function form($method = "input", $id = "")
	{	
		$data['method'] = $method;
		if($method == "edit"){
			$data['value'] = $this->product_model->get_by_id($id);;
		}
		$this->load->view('report_form', $data);
	}

	public function input()
	{

		$data = $this->input->post();
		$insert = $this->product_model->input_product($data);
		if($insert){
			echo '<script>alert("Sukses! Anda berhasil menginputkan 1 produk.");window.location.href="'.base_url('product/form').'";</script>';
		}
        echo "success";
	}

	public function edit($id)
	{

		$data = $this->input->post();
		$edit = $this->product_model->edit_product($data, $id);
		if($edit){
			echo '<script>alert("Sukses! Anda berhasil mengubah 1 produk.");window.location.href="'.base_url('product').'";</script>';
		}
        echo "success";
	}

	public function delete($id)
	{

		$data = $this->input->post();
		$delete = $this->product_model->delete_product($id);
		if($delete){
			echo '<script>alert("Sukses! Anda berhasil menghapus 1 produk.");window.location.href="'.base_url('product').'";</script>';
		}
        echo "success";
	}
}
