<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');

	}

	public function index()

	{   $category = $this->Category_model->get_data();
		$this->load->library('session');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('sidebar',['all_category'=>$category]);
		$this->load->view('home');
		$this->load->view('footer');

	}
	public function about()
	{
		$this->load->view('about');
		
	}

	public function register(){
		// $this->load->helper('form');
		$category = $this->Category_model->get_data();
		$this->load->view('header');
		$this->load->view('sidebar',['all_category'=>$category]);
		$this->load->view('register');
		$this->load->view('footer');
		
	}
	
	public function signup(){
		// $this->load->helper('form');
		
		
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$dob = $this->input->post('dob');

		$this->load->library('form_validation');	

		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('cpassword','Password','required|matches[password]');
		$this->form_validation->set_rules('dob','Date of birth','required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
		

		}
		else
		{
				// $this->load->view('formsuccess');
				// echo "yes ";
				$this->load->model('User_model');
				$data = [
					'first_name'=>$fname,
					'last_name'=>$lname,
					'email'=>$email,
					'phone'=>$phone,
					'dob'=>$dob,
					'password'=>md5($password)

				];
				$this->User_model->add_user($data);
		}

		

	}
}
