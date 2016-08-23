<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url_helper');
	}

	public function check()
	{
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$data['ischecked'] = $this->User_model->ischecked($email,$password);
		$data['user_name'] = $this->User_model->get_username($email,$password);
 		//$this->output->set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($data);
	}
}