<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->check_login();
	}
	
	public function index()
	{
		$this->load->view('dashboard');
    }
    
    public function show_report_data()
	{
		// $this->load->view('report_data');
		redirect('/product');
    }
    
    public function show_report_form()
	{
		redirect('/product/form');
		// $this->load->view('report_form');
	}

	public function check_login()
	{
		$this->load->library('session');
		if(empty($this->session->userdata('id'))){
			echo '<script>alert("Silahkan login dahulu untuk mengakses data.");window.location.href="'.base_url('auth/login').'";</script>';
		}
	} 	
}
