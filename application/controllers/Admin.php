<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('admin');
	}

	public function create()
	{
		$this->load->view('create');
	}

	public function store()
	{

	}

	public function edit()
	{
		$this->load->view('edit');
	}

	public function update()
	{

	}

	public function delete()
	{

	}

	public function search()
	{
		$this->load->view('search');
	}

}