<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CapresController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Capres_model');
		$this->load->model('User_model', 'userrole');
	}

	public function index()
	{
		$data['judul'] = "Halaman Calon Presiden";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['capres'] = $this->Capres_model->get();
		$this->load->view('layouts/header', $data);
		$this->load->view('capres/capres', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function tambah()
	{
		$data['judul'] = "Tambah Calon Presiden";
		$this->load->view('layouts/header', $data);
		$this->load->view('capres/tambah_capres');
		$this->load->view('layouts/footer');
	}

	public function detail($id)
	{
		$data['judul'] = "Detail Mahasiswa";
		$data['capres'] = $this->Capres_model->getById($id);
		$this->load->view('layouts/header', $data);
		$this->load->view('capres/detail_capres');
		$this->load->view('layouts/footer');
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Calon Presiden";
		$data['capres'] = $this->Capres_model->getById($id);
		$this->load->view('layouts/header', $data);
		$this->load->view('capres/edit_capres');
		$this->load->view('layouts/footer');
	}
	public function hapus($id)
	{
		$this->Capres_model->delete($id);
		redirect('CapresController');
	}

	function upload()
	{
		$data = [
			'nik' => $this->input->post('nik'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'asal' => $this->input->post('asal'),
			'partai_pendukung' => $this->input->post('partai_pendukung'),
			'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
			'umur' => $this->input->post('umur'),
		];
		$this->Capres_model->insert($data);
		redirect('CapresController');
	}

	public function update()
	{
		$data = [
			'nik' => $this->input->post('nik'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'asal' => $this->input->post('asal'),
			'partai_pendukung' => $this->input->post('partai_pendukung'),
			'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
			'umur' => $this->input->post('umur'),
		];
		$id = $this->input->post('id');
		$this->Capres_model->update(['id' => $id], $data);
		redirect('CapresController');
	}
}
