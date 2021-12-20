<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('nilai_model');
		$this->load->library('form_validation');
    }
    public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['foto'] = $this->session->userdata('foto');
		$data['title']="Nilai";
		$data['nilai'] = $this->nilai_model->getNilai();
		$this->load->view('head',$data);
		$this->load->view('navbar',$data);
		$this->load->view('nilai',$data);
		$this->load->view('footer');
		$this->load->view('js');

	}
	public function edit($id)
	{
		$data['nilai'] = $this->nilai_model->getById($id);
		$data['username'] = $this->session->userdata('username');
		$data['foto'] = $this->session->userdata('foto');
		$data['title']="Edit Nilai";
		$this->load->view('head',$data);
		$this->load->view('navbar',$data);
		$this->load->view('formeditnilai',$data);
		$this->load->view('footer');
		$this->load->view('js');

	}
	public function update()
	{
		$this->form_validation->set_rules('nilai','Nilai','required');
		$this->form_validation->set_rules('grade','Grade','required');
		if ($this->form_validation->run()==true)
        {
		 	 $id_nilai = $this->input->post('id_nilai');
             $data['Nilai'] = $this->input->post('nilai');
             $data['Grade'] = $this->input->post('grade');
			$this->nilai_model->update($data,$id_nilai);
			redirect('nilai');
		}
		else
		{
			$id_mhs = $this->input->post('id_nilai');
			$data['title'] = "Edit Nilai";
            $datacontent['mhs'] = $this->nilai_model->getById($id_nilai);
            $this->load->view('head',$data);
			$this->load->view('navbar',$data);
			$this->load->view('formeditmhs',$data);
			$this->load->view('footer');
			$this->load->view('js');
		}
	}
}