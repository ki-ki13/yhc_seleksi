<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
    }

	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['foto'] = $this->session->userdata('foto');
		$data['title']="Beranda";
		$this->load->view('head',$data);
		$this->load->view('navbar',$data);
		$this->load->view('beranda');
		$this->load->view('footer');
		$this->load->view('js');

	}
}
