<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()

	{	
		$this->load->model('User_model');
		$data = $this->User_model->get_data();
		// print_r($data);
		
		$this->load->view('admin/header', $data = ['user_data'=>$data]);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	
	public function form(){
		// $this->load->helper('form');
		$this->load->view('admin/register');

	}
	public function register(){
		echo "submit successfully";

	}
}
