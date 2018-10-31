<?php
	/**
	 * customize logs 
	 *https://stackoverflow.com/*questions/15858372/codeigniter-try-catch-is-not-working-in-model-class
	**/
	class Auth extends CI_Controller{

			public function __construct(){
				parent::__construct();


			}
			public function index(){
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				if($_POST) {
				  	$this->login();
				}
				else{
					$this->load->view('login');
				}

			}


			public function login(){
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('password','Password','required[min_length=8]');
				if($this->form_validation->run()==TRUE){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$account_locked = FALSE;
					$attempts = 3;
					$this->db->select('userid, username, password, account_locked', 'attempts');
					$this->db->from('user');
					$this->db->where(array('username'=>$username,
											'account_locked'=>$account_locked
											 ),array('attempts','=<','3'));
					$query= $this->db->get();
					if ($query->num_rows()>=1){
						//$row = $query->result();
						$row = $query->row();
						$hash= $row->password;
						//echo $row->attempts;

						if(password_verify($password,$hash)){
							$_SESSION['username'] = $username;
							$_SESSION['profile_data']=$row;
							$_SESSION['user_logged'] = TRUE; 
							$this->session->set_flashdata("success",'You are logged in');
							redirect('/home/dash','refresh');
						}
						else if($row[0]->attempts < 4){
							$this->session->set_flashdata("error",'username or password  does not exist');
							$attempts = $row->attempts + 1;
							$this->db->set('attempts', $attempts, FALSE);
							$this->db->where('id', 2);
							$this->db->update('mytable'); 
							redirect('/auth/login','refresh');
							header("Refresh: 5; Location:/auth/login");

						}
					}

				

				}
				$this->load->view('login');


			}
			public function logout(){
				unset($_SESSION);
				session_destroy();
				redirect('/auth/login');
			}
			public function registration(){
				//if ($this->input->post('register') !== false){
				if (isset($_POST['register'])){
					$this->form_validation->set_rules('firstname','First Name','required');
					$this->form_validation->set_rules('lastname','Last Name','required');
					$this->form_validation->set_rules('username','Username','required');
					$this->form_validation->set_rules('password','Password','required|min_length[8]');
					$this->form_validation->set_rules('confirm','Confirm Password','required|min_length[8]|matches[password]');
					$this->form_validation->set_rules('email','Email','required');

					$success = FALSE;
					if($this->form_validation->run()==TRUE){
						$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
						$data = array(
							'fname'=>$_POST['firstname'],
							'lname'=>$_POST['lastname'],
							'username' =>$_POST['username'],
							'email' =>$_POST['email'],
							'password'=>$password,
							'account_locked'=>0, 
							'attempts'=>0, 
							'lastlogin'=>date("Y-m-d H:i:s"), 
							'createdby'=>0,
							'regdate' =>date("Y-m-d H:i:s")
						);
						try{
							if($this->db->insert('user',$data )){
							//$this->session->set_flashdata("success","your account has been registered");
								$success = TRUE;
							}
						}
						catch(Exception $e){
							log_message('error', $e->getMessage());

						}
						//$this->session->set_flashdata('flash_data ', 'Username or password is wrong!');
						if ($success){
							$this->session->set_userdata("success","your account has been registered");
							$this->session->mark_as_flash('success');
							header('Refresh:3; url= '. base_url().'auth/login');

						}
						else{

							$this->session->set_userdata("failed","User cannot be created at the moment! Contact the Administrator");
							$this->session->mark_as_flash('failed');
							//redirect('/auth/registration','refresh');

						}




					}


				}
				$this->load->view('register');

			}
	}
?>