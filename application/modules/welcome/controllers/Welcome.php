<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('info/master');
		$this->load->view('welcome_message');
	}
	
	public function page1()
	{
		$this->load->view('master');
		$this->load->view('page1');
	}
	
	public function page2()
	{
		//Load another modules model
		$this->load->model('info/info_model');

		$this->load->view('master');

		//Load another modules view page
		$this->load->view('info/page2');
	}
}
