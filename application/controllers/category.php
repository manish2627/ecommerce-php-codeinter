<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Category_model');
       
    }

    public function index()

    {    if (!$this->session->userdata('isloggedin')) {
        redirect('admin/admin_login');
    } else{

        $data = $this->Category_model->get_data();

        $this->load->view('admin/header');
        $this->load->view("admin/category/allcategory", ['category_data' => $data]);
        $this->load->view('admin/footer');
    }}
    public function add()

    {   
        if (!$this->session->userdata('isloggedin')) {
            redirect('admin/admin_login');
		} else{

        if ($this->input->post('add_new_category')) {
            
            $this->load->library('form_validation');

            $this->form_validation->set_rules('cat_name', 'category Name', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header');
                $this->load->view('admin/category/add_new_category');
                $this->load->view('admin/footer');
            } else {

                $category_name = $this->input->post('cat_name');
                if ($this->input->post('cat_slug') != "") {
                    $category_slug = strtolower($this->input->post('cat_slug'));
                  
                   
                }else{
                    $category_slug =  strtolower(str_replace(' ', '-', $category_name));
                   
                }
                echo $category_name, $category_slug;
                $data = [
                    'category_name' =>$category_name,
                    'category_slug' =>$category_slug,
                    'user_id' => $this->session->userdata['userid']
                ];

                $this->Category_model->add_category($data);
                 
               redirect('admin/category');
            }
        } else {

            $this->load->view('admin/header');
            $this->load->view('admin/category/add_new_category');
            $this->load->view('admin/footer');
        }
    }
    }

   public function edit($id){

    if (!$this->session->userdata('isloggedin')) {
        redirect('admin/admin_login');
    } else{
    if ($this->input->post('update')) {
        $this->load->library('form_validation');

            $this->form_validation->set_rules('cat_name', 'category Name', 'required');
            $this->form_validation->set_rules('cat_slug', 'category slug', 'required');
            if ($this->form_validation->run() == false) {

                $data = $this->Category_model->getby_id($id);
                $this->load->view('admin/header');
                $this->load->view('admin/category/update_category', ['data'=>$data]);
                $this->load->view('admin/footer');
            } else {

                $category_name = $this->input->post('cat_name');
                $category_slug = $this->input->post('cat_slug');
                $category_status = $this->input->post('cat_status');
               
                $data = [
                    'category_name' =>$category_name,
                    'category_slug' =>$category_slug,
                    'status' => $category_status,
                    'user_id' => $this->session->userdata['userid']
                ];

                print_r($data);

                $this->Category_model->updateby_id($id, $data);
                 
               redirect('admin/category');
            }
        
    }
    else
    {
    
    $data = $this->Category_model->getby_id($id);
    $this->load->view('admin/header');
    $this->load->view('admin/category/update_category', ['data'=>$data]);
    $this->load->view('admin/footer');
    // print_r($data);
    }

   }
}
}
