<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
	}


	public function index()
	{
		$data['title'] = 'Siswa';
		$data['siswa'] = $this->siswa_model->get_data('tbl_siswa')->result();

		$this->load->view('../../templates/header', $data);
		$this->load->view('../../templates/sidebar', $data);
		$this->load->view('v_siswa', $data);
		$this->load->view('../../templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Siswa';

		$this->load->view('../../templates/header', $data);
		$this->load->view('../../templates/sidebar', $data);
		$this->load->view('v_siswa_tambah');
		$this->load->view('../../templates/footer');
	}

	public function tambah_aksi()
	{
		//$this->_rules();

		// if ($this->form_validation->run() == FALSE) {
		// 	$this->tambah();
		// } else {
		$data = array(
			'nama_siswa' => $this->input->post('nama_siswa'),
			'kelas_siswa' => $this->input->post('kelas_siswa'),
			'alamat_siswa' => $this->input->post('alamat_siswa'),
			'nomor_telepon' => $this->input->post('nomor_telepon'),
		);

		$this->siswa_model->insert_data($data, 'tbl_siswa');
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
														Data berhasil ditambahkan
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>');
		redirect('siswa');
		//}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required', array(
			'required' => '%s harus diisi !!'
		)); //trim|required|min_length[5]|max_length[12]
		$this->form_validation->set_rules('kelas_siswa', 'Kelas Siswa', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('alamat_siswa', 'Alamat Siswa', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('nomor_telepon', 'Nomor Telepon', 'required', array(
			'required' => '%s harus diisi !!'
		));
	}
}
