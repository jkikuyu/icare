<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
        $this->load->helper('form');

        $this->db = $this->load->database('default', true);

        $this->load->model('home_model');


	}
	public function dash(){
 /*		$breadcrumb          = array();

        $page_title          = "Dashboard";
        
        $data['breadcrumb']  = $breadcrumb;
        $data['page_title']  = $page_title;
       $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/body_header', $data);
*/       $breadcrumb          = array();

        $page_title          = "Dashboard";
        
        $data['breadcrumb']  = $breadcrumb;
        $data['page_title']  = $page_title;
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/body_header', $data);
        $this->load->view('home_view', $data);
        $this->load->view('templates/footer');
        //$this->load->view('dashboard');

        //$this->load->view('home_view', $data);
     //  $this->load->view('templates/footer');

	}
    public function profile() {
    	echo 'here';

	    if($_POST) {
/*	        $profile_update  = $_POST;
	        var_dump( $profile_data);
*/	        //$this->console_log_array($profile_update);

	        /**
	        *Get the profile details from the details stored in  the session array.
	        **/
	        //$existing_profile       = $this->session->user_data;

	      //  if (is_object($existing_profile)) {

	            /**
	            *Gets the properties of the given object
	            *with get_object_vars function
	            **/
	       //     $res = get_object_vars($existing_profile);
	     //   }
/*	        $result = array_diff($profile_update, $res);

	        //$this->console_log($result);

	        $compare_array = array("submit_details"=> "Save");
	        //print_r($compare_array);

            if($result === $compare_array){
                $data['success_message'] = "There were not changes made on the profile.";    
            }
            else{
                //log to the console.
                $mydata = $this->post_json($url, $post_data);

                if(array_key_exists('success', $mydata)) {
                

                    $data['success_message']     = "The profile was changed successfully"; 
                }
            }  
*/

		}
	    $data['profile_data']   = $_SESSION['profile_data'];
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/body_header', $data);
        $this->load->view('profile', $data);
        $this->load->view('templates/footer');
}

}


?>
