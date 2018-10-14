<?php
	class Auth extends CI_Controller{

			public function login(){
				$this->load->view('login');
					$this->form_validation->set_rules('username','username','required');
					$this->form_validation->set_rules('password','Password','required[min_length=5]');
					if($this->form_validation->run()==TRUE){
						$username = $_SESSION['username'];
						$password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
						$account_locked = FALSE;
						$attempts = 3;
						$this->db->select('username, password, account_locked', 'attempts');
						$this->db->from('user');
						$this->db->where(array('username'=>$username,'password'=>$password,'account_locked'=>$account_locked);
						$this->db->where(array('attempts','=<','3'));
						$query= $this->db->get();
						$user=$query->row();
						if ($user->email){

							$_SESSION['username'] = $user->username;
							$_SESSION['user_logged'] = TRUE; 

							$this->session->set_flashdata("success",'You are logged in');
							redirect('/auth/dashboard','refresh');

						}
						else{
							$this->session->set_flashdata("error",'username or password  does not exist');
							redirect('/auth/login','refresh');

						}


					}

			}
			public function logout(){
				uset($_SESSION);
				session_destroy();
				redirect('/auth/login','refresh');
			}
			public function registration(){
				//if ($this->input->post('register') !== false){
				if (isset($_POST['register'])){
					$this->form_validation->set_rules('firstname','First Name','required');
					$this->form_validation->set_rules('lastname','Last Name','required');
					$this->form_validation->set_rules('username','Username','required');
					$this->form_validation->set_rules('password','Password','required|min_length[8]');
					$this->form_validation->set_rules('confirm','Confirm Password','required|min_length[8]|maatches[password]');
					$this->form_validation->set_rules('email','Email','required');


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
				
						$this->db->insert('user',$data );
						$this->session->set_flashdata("success",'your account has been registered');

						redirect('/auth/login','refresh');
					}


				}
				$this->load->view('register');

			}
	}
?>