<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('../../templates/header', $data);
		$this->load->view('../../templates/sidebar', $data);
		$this->load->view('v_beranda');
		$this->load->view('../../templates/footer');
	}
}
