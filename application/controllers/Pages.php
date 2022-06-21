<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->session->userdata('status') != 'login') {
			$this->login();
		} else {
			$data = [
				'title' => 'Home'
			];
			$this->load->view('home', $data);
		}
	}

	public function about()
	{
		if ($this->session->userdata('status') != 'login') {
			$this->login();
		} else {
			$data = [
				'title' => 'About'
			];
			$this->load->view('about', $data);
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}


	public function login()
	{
		$this->load->view('form_login');
	}

	public function aksi_login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$dataPenunjuk = array(
			'username' => $user,
			'password' => $pass
		);

		$dataUser = count($this->user_model->get_data_khusus("user", $dataPenunjuk));

		if ($dataUser > 0) {
			$dataSession = array(
				'nama' => $user,
				'status' => 'login'
			);

			$this->session->set_userdata($dataSession);
			redirect(site_url('kripto'));
		} else {
			redirect(site_url('login'));
		}
	}

	public function daftar()
	{
		$this->load->view('form_daftar');
	}

	public function aksi_daftar()
	{
		$dataInputan = array(
			'id' => uniqid('', true),
			'username' => $user = $this->input->post('username'),
			'password' => $user = $this->input->post('password')
		);

		$this->user_model->masukkan('user', $dataInputan);
		redirect(base_url(), 'refresh');
	}



}
