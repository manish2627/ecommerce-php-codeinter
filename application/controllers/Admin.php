<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

	public function index()
	{

		$this->isLoggedIn();
	}
	function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('admin/login');
        }
        else
        {
            redirect('/dashboard');
        }
    }

	public function dashboard()

	{
		if (!$this->session->userdata('isloggedin')) {
			$this->load->view('admin/login');
		} else {
			$this->load->model('User_model');
			$data = $this->User_model->get_data();

			$this->load->view('admin/header', $data = ['user_data' => $data]);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}
	}

	public function admin_login()
	{
		if ($this->session->userdata('isloggedin')) {
			redirect('admin/dashboard');
		} else {

			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('admin/login');
			} else {
				// echo "validation is true ";
				$this->load->model('Login_model');
				$count = $this->Login_model->user_login($email, $password);

				if ($count == 1) {
					
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('isloggedin', '1');
					redirect('admin/dashboard');
				} else {

					$this->session->set_userdata('msg', "please check input details and try again..");

					$this->load->view('admin/login');
				}
			}
		}
	}

	

	// public function category(){

	// 	$this->load->model('category_model');
		

	// }



}


