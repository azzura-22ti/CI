<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MahasiswaController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->model('Prodi_model');
		$this->load->model('User_model', 'userrole');
	}

	public function index()
	{
		$data['judul'] = "Halaman Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['mahasiswa'] = $this->Mahasiswa_model->get();
		$this->load->view('layouts/header', $data);
		$this->load->view('mahasiswa/mahasiswa', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->Prodi_model->get();
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Nama Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('asal_sekolah', 'Asal_sekolah', 'required', [
			'required' => 'Asal Sekolah Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|integer', [
			'required' => 'No Hp Mahasiswa Wajib diisi bre..',
			'integer' => 'No Hp harus angka bre..'
		]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Mahasiswa Wajib diisi bre..'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layouts/header', $data);
			$this->load->view('mahasiswa/tambah_mahasiswa', $data);
			$this->load->view('layouts/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'email' => $this->input->post('email'),
				'prodi' => $this->input->post('prodi'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
			];
			$this->Mahasiswa_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success" role="alert">Data mahasiswa berhasil ditambah!</div>');
			redirect('MahasiswaController');
		}
	}

	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
		$this->load->view('layouts/header', $data);
		$this->load->view('mahasiswa/detail_mahasiswa');
		$this->load->view('layouts/footer');
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->Prodi_model->get();
		$data['mahasiswa'] = $this->Mahasiswa_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Nama Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('asal_sekolah', 'Asal_sekolah', 'required', [
			'required' => 'Asal Sekolah Mahasiswa Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|integer', [
			'required' => 'No Hp Mahasiswa Wajib diisi bre..',
			'integer' => 'No Hp harus angka bre..'
		]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Mahasiswa Wajib diisi bre..'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layouts/header', $data);
			$this->load->view('mahasiswa/edit_mahasiswa', $data);
			$this->load->view('layouts/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'email' => $this->input->post('email'),
				'prodi' => $this->input->post('prodi'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'no_hp' => $this->input->post('no_hp'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
			];
			$id = $this->input->post('id');
			$this->Mahasiswa_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success" role="alert">Data mahasiswa berhasil diubah!</div>');
			redirect('MahasiswaController');
		}
	}
	public function hapus($id)
	{
		$this->Mahasiswa_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success" role="alert">Data mahasiswa berhasil dihapus!</div>');
		redirect('MahasiswaController');
	}
}
