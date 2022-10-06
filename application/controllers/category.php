<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('Category_model');
        
        
        
    }

	public function index()
	{  
        
        $data = $this->Category_model->get_data();

        $this->load->view('admin/header');
        $this->load->view("admin/category/allcategory", ['category_data'=>$data]);		
		$this->load->view('admin/footer');
      
        
    }


}
