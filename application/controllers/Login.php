<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{  
		parent::__construct();
		$this->load->library('form_validation');	
		
		
	}
	public function index(){

	
	
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('login');
		$this->load->view('footer');
	 
		
	}



	public function user_login()
	{	
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$this->load->library('form_validation');	
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('login');
			$this->load->view('footer');
		

		}else{
			// echo "validation is true ";
			$this->load->model('Login_model');
			$count = $this->Login_model->user_login($email,$password);

				if($count == 1){
					echo "success";
					
					$this->session->set_userdata('email',$email);
					$this->session->set_userdata('login','1');
					redirect('Welcome');
				}
				else{

					$this->session->set_userdata('msg',"please check input details and try again..");
					$this->load->view('header');
					$this->load->view('sidebar');
					$this->load->view('login');
					$this->load->view('footer');
						
				}
	
			}
			
		}
		

	public function logout(){
		$res = $this->session->sess_destroy();
		
			redirect('Welcome');
		

	}

}
	

