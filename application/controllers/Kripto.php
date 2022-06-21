<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kripto extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kripto_model');
		if ($this->session->userdata('status') != 'login') {
			redirect(site_url('index'));
		}
	}

	public function index()
	{
		$data['kripto'] = $this->kripto_model->get();
		if(count($data['kripto']) <= 0){
			$this->load->view('kripto/kripto_empty');
		} else {
			$this->load->view('kripto/index', $data);
		}
	}

	public function tambah_data()
	{
		if ($this->input->method() === 'post') {

			$kripto = [
				'id' => uniqid('', true),
				'nama' => $this->input->post('nama'),
				'simbol' => $this->input->post('simbol'),
				'harga' => $this->input->post('harga'),
				'market' => $this->input->post('market')
			];

			$saved = $this->kripto_model->insert($kripto);

			if ($saved) {
				$this->session->set_flashdata('message', 'Kripto was created');
				return redirect('kripto/index');
			}
		}

		$this->load->view('kripto/insert');
	}

	public function edit($id = null)
	{
		$data['kripto'] = $this->kripto_model->find($id);
		if (!$data['kripto'] || !$id) {
			show_404();
		}
		if ($this->input->method() === 'post') {
			$kripto = [
				'id' => $id,
				'nama' => $this->input->post('nama'),
				'simbol' => $this->input->post('simbol'),
				'harga' => $this->input->post('harga'),
				'market' => $this->input->post('market')
			];
			$updated = $this->kripto_model->update($kripto);
			if ($updated) {
				$this->session->set_flashdata('message', 'Kripto was updated');
				redirect(site_url('kripto/index'));
			}
		}
		$this->load->view('kripto/edit', $data);
	}

	public function delete($id = null) {
		if(!$id){
			show_404();
		}

		$this->kripto_model->delete($id);

		$this->session->set_flashdata('message', 'Kripto was deleted');
		redirect(site_url('kripto/index'));

	}

}
