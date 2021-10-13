<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('master');
		$this->load->view('welcome_message');
	}
	
	public function page1()
	{
		$this->load->view('master');
		$this->load->view('page1');
	}
	
	public function page2()
	{
		$this->load->view('master');
		$this->load->view('page2');
	}
}
