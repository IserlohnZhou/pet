<?php

class User_model extends CI_Model {
	public function __construct() 
	{
		$this->load->database();
	}

	public function ischecked($email,$password)
	{
		$query=$this->db->select('user_id')
						->from('User')
						->group_start()
							->where('e-mail',$email)
							->where('password',$password)
						->group_end()
						->get();
		$row = $query->row_array();
		if ($row['user_id']!=NULL) {
			$ischecked = 'success';
		} else {
			$ischecked = 'failed';
		}
		return $ischecked; 
	}

	public function get_username($email,$password)
	{
		$query = $this->db->select('user_name')
						->from('User')
						->group_start()
							->where('e-mail',$email)
							->where('password',$password)
						->group_end()
						->limit(1)
						->get();
		$row = $query->row_array();
		return $row['user_name']; 
	}

	public function check_email($data)
	{
		$query = $this->db->select('user_id')
						->from('User')
						->where('e-mail',$data['e-mail'])
						->get();
		$row = $query->row_array();
		if ($row['user_id']!=NULL) {
			$check_email = 'failed';

		} else {
			$check_email = 'success';
			$this->db->insert('User',$data);
		}
		return $check_email; 
	}
}