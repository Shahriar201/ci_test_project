<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//Load model globally in this Controller
		$this->load->model("Info_model", "info");

		$this->load->library('image_lib');

		// $this->load->model("Info_model");
	}

	public function list()
	{
		$data['data_list'] = $this->info->get_all();
		
		$this->load->view('master', $data);
		$this->load->view('list');
	}

	public function add()
	{
		$this->load->view('master');
		$this->load->view('add');
	}

	public function save()
	{
		// echo "<pre>";
		// print_r($_FILES);
		// exit;

		$response = $this->info->save_info();

		// echo "<pre>";
		// print_r($response);
		// exit;

		$this->session->set_flashdata($response);

		redirect('info/list');
	}

	public function edit($id){
		//get data using model		
		$data = array();
		$data['edit_info'] = $this->info->edit_info($id);

		$this->load->view('master');
		$this->load->view('edit_info', $data);

	}

	public function update(){

		$response = $this->info->update_info();

		$this->session->set_flashdata($response);

		redirect('info/list');
	}

	public function delete($id){
		$response = $this->info->delete_info($id);

		$this->session->set_flashdata($response);
		redirect('info/list');
	}

	public function view($id){
		// $data = array();
		$data = [
			'view_info' => $this->info->view_info($id)
		];

		// echo "<pre>";
		// print_r($data['view_info']);
		// exit;

		$this->load->view('master');
		$this->load->view('single_data_view', $data);

		// echo "<pre>";
		// print_r($data['view_info']);
		// exit;
	}
}
