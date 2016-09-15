<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
	protected $view_data = array();
	protected $user_session = NULL;



	public function __construct()
	{
		parent::__construct();
        $this->session->userdata("user_session");
	}	




	public function index() {	
		$this->load->view('logreg');
	}



	public function process()
	{
		$result = $this->user->validate_login($this->input->post());
       if($result == "valid"){
            $get_user = $this->user->get_user($this->input->post());
            if($get_user){
                $this->session->set_userdata("user_session", $get_user);
                redirect("profile/{$get_user['id']}");
			}
		}else{	
			$errors = array(validation_errors());
			$this->session->set_flashdata('message', validation_errors());
			redirect(base_url('users'));
		}
	}

	public function add(){
		$result = $this->user->validate_register($this->input->post());
    	if($result == "valid"){
      		$user_data = $this->input->post();
			$add_user = $this->user->add_user($user_data);
			
			if($add_user){
				$this->session->set_userdata("user_session", $add_user);
				redirect("profile/{$add_user['id']}");
			}
		}else{
			$errors = array(validation_errors());
			$this->session->set_flashdata('message', validation_errors());
			redirect(base_url('users'));
		}
	}

	public function create_a_box(){
       if($this->session->userdata("user_session") == null){
           redirect(base_url('users'));
       }else{
       $box_data = $this->input->post();
       $box = $this->box->create_a_box($box_data);
       $this->load->view("product", array('box' => $box));
       }
    }
   
   public function view_create(){
       $this->load->view('createOrder');
   }

   

	public function logout()
	{
		
		$this->session->sess_destroy();
		redirect(base_url());
	}

}