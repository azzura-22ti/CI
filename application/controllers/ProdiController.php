<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdiController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Prodi_model');
		$this->load->model('User_model', 'userrole');
	}

	public function index()
	{
		$data['judul'] = "Halaman Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->Prodi_model->get();
		$this->load->view('layouts/header', $data);
		$this->load->view('prodi/prodi', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Program Studi', 'required', [
			'required' => 'Nama Prodi Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
			'required' => 'Ruangan Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
			'required' => 'Nama Kaprodi Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required', [
			'required' => 'Tahun Berdiri Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
			'required' => 'Output Wajib diisi bre..'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layouts/header', $data);
			$this->load->view('prodi/tambah_prodi');
			$this->load->view('layouts/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'nama_kaprodi' => $this->input->post('nama_kaprodi'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'output_lulusan' => $this->input->post('output_lulusan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/images/prodi';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Prodi_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success" role="alert">Data program studi berhasil ditambah!</div>');
			redirect('ProdiController');
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->Prodi_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama Program Studi', 'required', [
			'required' => 'Nama Prodi Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
			'required' => 'Ruangan Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
			'required' => 'Nama Kaprodi Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required', [
			'required' => 'Tahun Berdiri Wajib diisi bre..'
		]);
		$this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
			'required' => 'Output Wajib diisi bre..'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layouts/header', $data);
			$this->load->view('prodi/edit_prodi', $data);
			$this->load->view('layouts/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'nama_kaprodi' => $this->input->post('nama_kaprodi'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'output_lulusan' => $this->input->post('output_lulusan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/prodi/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['prodi']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/prodi/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Prodi_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success" role="alert">Data program studi berhasil diubah!</div>');
			redirect('ProdiController');
		}
	}

	public function hapus($id)
	{
		$this->Prodi_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-danger" role="alert">Data program studi tidak dapat dihapus(sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-danger" role="alert">Data program studi berhasil dihapus!</div>');
		}
		redirect('ProdiController');
	}
}
