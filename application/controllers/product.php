<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index()
    {

        $data = $this->Category_model->get_data();

        $this->load->view('admin/header');
        $this->load->view("admin/category/allcategory", ['category_data' => $data]);
        $this->load->view('admin/footer');
    }
    public function add()
    {

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

    public function add_form()
    {
    }
}
