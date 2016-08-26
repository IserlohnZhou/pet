<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function checkregister()
	{
		$data = array(
			'user_name' => $_REQUEST['name'],
			'e-mail' => $_REQUEST['email'],
			'password' =>$_REQUEST['password']
		);
		$result = $this->User_model->check_email($data);
		echo json_encode($result);
	}
}