<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->library('form_validation');
		$this->load->library('session');
    }

	public function index()
	{
        $data['title']="Login";
        $this->load->view('head',$data);
        $this->load->view('login');
        $this->load->view('js');
    }

    public function proses_login()
    {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('auth'); // LOGIN
		
		} else {
	
			$username = htmlspecialchars($this->input->post('username'));
			$pass = htmlspecialchars($this->input->post('password'));
	
			// CEK KE DATABASE BERDASARKAN USERNAME
			$cek_login = $this->auth_model->cek_login($username); 
				
			if($cek_login == FALSE)
			{
				$this->session->set_flashdata('salah_usrname', "Username yang dimasukkan tidak sesuai");
                redirect('auth');
			
			} else {
			
				if($pass == $cek_login->password){
					$this->session->set_userdata('id_admin', $cek_login->id_admin);
					$this->session->set_userdata('username', $cek_login->username);
                    $this->session->set_userdata('foto', $cek_login->foto);
					redirect('beranda');
						
				} else {
					$this->session->set_flashdata('salah_pass', "Username atau password yang dimasukkan tidak sesuai");
                    redirect('auth');
				}
			}
		}
    }

    public function logout()
    {
        $this->session->sess_destroy();
		redirect('auth');     
    }

}