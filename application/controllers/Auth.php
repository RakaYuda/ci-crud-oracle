<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
        $this->load->model('auth_model');
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function login()
    {
        $this->load->view('login');
    }
    
    public function register()
    {
        $this->load->view('register');
    }

    public function proses_login()
	{
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		// print_r($this->input->post());
		// exit;
		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('/auth/login'); // LOGIN
		
		} else {

			$username = htmlspecialchars($this->input->post('username'));
			$pass = htmlspecialchars($this->input->post('password'));

			// CEK KE DATABASE BERDASARKAN EMAIL
			$check_login = $this->auth_model->check_login($username); 
				
			if($check_login == FALSE)
			{
				echo '<script>alert("Username yang Anda masukan salah.");window.location.href="'.base_url('/auth/login').'";</script>';
			
			} else {
			
				if(password_verify($pass, $check_login->password)){
					// if the username and password is a match
					$this->session->set_userdata('id', $check_login->id);
					$this->session->set_userdata('username', $check_login->username);
					$this->session->set_userdata('name', $check_login->name);
					
					redirect('dashboard');
						
				} else {
					echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('/auth/login').'";</script>';
				}
			}
		}
	} 

    public function proses_register()
	{	
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('auth/register');
		} else {
			$username = $this->input->post('username');
			$name = $this->input->post('name');
			$password = $this->input->post('password');
			$pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
				'username' => $username,
				'name' => $name,
				'password' => $pass
			];
			$insert = $this->auth_model->register("user", $data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('auth/login').'";</script>';
			}
		}
	} 

    public function logout()
	{
		$this->session->sess_destroy();
		echo '<script>alert("Sukses! Anda berhasil logout."); window.location.href="'.base_url('auth/login').'";</script>';
	}
}
