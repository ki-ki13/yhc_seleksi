<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('mhs_model');
    }
    public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['foto'] = $this->session->userdata('foto');
		$data['mhs'] = $this->mhs_model->getMhs();
		$data['title']="Mahasiswa";
		$this->load->view('head',$data);
		$this->load->view('navbar',$data);
		$this->load->view('mahasiswa',$data);
		$this->load->view('footer');
		$this->load->view('js');

	}

    public function tambah()
	{
		$data['username'] = $this->session->userdata('username');
		$data['foto'] = $this->session->userdata('foto');
		$data['title']="Tambah Mahasiswa";
		$this->load->view('head',$data);
		$this->load->view('navbar',$data);
		$this->load->view('formtambah');
		$this->load->view('footer');
		$this->load->view('js');

	}

	public function simpan()
	{
		$this->form_validation->set_rules('nim','Nim','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('prodi','Prodi','required');
		$this->form_validation->set_rules('nohp','Nohp','required');
		if ($this->form_validation->run()==true)
        {
			$data['Nim'] = $this->input->post('nim');
			$data['Nama'] = $this->input->post('nama');
			$data['Program_studi'] = $this->input->post('prodi');
			$data['Nohp'] = $this->input->post('nohp');
			$this->mhs_model->save($data);
			redirect('mahasiswa');
		}
		else
		{
			redirect('mahasiswa/tambah');
		}
	}

	public function edit($id)
	{
		$data['mhs'] = $this->mhs_model->getById($id);
		$data['username'] = $this->session->userdata('username');
		$data['foto'] = $this->session->userdata('foto');
		$data['title']="Edit Mahasiswa";
		$this->load->view('head',$data);
		$this->load->view('navbar',$data);
		$this->load->view('formeditmhs',$data);
		$this->load->view('footer');
		$this->load->view('js');

	}

	public function update()
	{
		$this->form_validation->set_rules('nim','Nim','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('prodi','Prodi','required');
		$this->form_validation->set_rules('nohp','Nohp','required');
		if ($this->form_validation->run()==true)
        {
		 	$id_mhs = $this->input->post('id_mhs');
             $data['Nim'] = $this->input->post('nim');
             $data['Nama'] = $this->input->post('nama');
             $data['Program_studi'] = $this->input->post('prodi');
             $data['Nohp'] = $this->input->post('nohp');
			$this->mhs_model->update($data,$id_mhs);
			redirect('mahasiswa');
		}
		else
		{
			$id_mhs = $this->input->post('id_mhs');
			$data['title'] = "Edit Mahasiswa";
            $datacontent['mhs'] = $this->mhs_model->getById($id_mhs);
            $this->load->view('head',$data);
			$this->load->view('navbar',$data);
			$this->load->view('formeditmhs',$data);
			$this->load->view('footer');
			$this->load->view('js');
		}
	}

	function hapus($id)
	{
		$this->mhs_model->delete($id);
		redirect('mahasiswa');
	}
}