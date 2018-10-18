<?php
class User extends CI_Controller{
	public function __construct(){
		parent::__construct();

		}
	}
	public function profile(){
		$this->load->view('profile');
	}
	public function dashboard(){

		$this->load->view('dashboard');
	}
	
}
?>