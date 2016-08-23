<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url_helper');
	}

	public function info($id)
	{
		$this->load->view('pay');
	}
}