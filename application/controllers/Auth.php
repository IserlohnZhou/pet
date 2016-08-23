<?php
class Auth extends CI_Controller {
	function __construct() 
	{
		if (!isset($_SESSION['username'])) {
			redirect('/login');
		} 
		parent::__construct();
    }
}