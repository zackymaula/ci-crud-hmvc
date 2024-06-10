<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Guru';

		$this->load->view('../../templates/header', $data);
		$this->load->view('../../templates/sidebar', $data);
		$this->load->view('v_guru');
		$this->load->view('../../templates/footer');
	}
}
