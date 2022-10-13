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
        if (!$this->session->userdata('isloggedin')) {
            // $this->load->view('admin/login');
            redirect('admin/admin_login');
        } else {

            $products = [];
            $category = $this->load->model('Category_model');


            //get all products here 

            foreach ($this->Product_model->get_products() as $product) {

                // print_r($product);
                $category_name = $this->Category_model->getby_id($product['category_id'])->category_name;
                $product['category_name'] = $category_name;
                $product['images'] = $this->Product_model->getby_id($product['product_id']);
                array_push($products, $product);
            };
            // echo "<pre>";
            // print_r($products);


            $this->load->view('admin/header');
            $this->load->view('admin/product/all_product', ['products' => $products]);
            $this->load->view('admin/footer');
        }
    }

    public function add()

    {   
        if (!$this->session->userdata('isloggedin')) {
            redirect('admin/admin_login');
		} else{
            $this->load->model('Category_model');
            $category = $this->Category_model->get_data();

        if ($this->input->post('add_product')) {
            
            $this->load->library('form_validation');
           
          

            $this->form_validation->set_rules('product_name', 'Product Name', 'required');
            // $this->form_validation->set_rules('product_slug', 'Product Slug', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('price_discount', 'Discount Price', 'required');
            $this->form_validation->set_rules('quantity', 'Quantity', 'required');
            $this->form_validation->set_rules('product_weight', 'Product Weight', 'required');
            $this->form_validation->set_rules('product_height', 'Product Height', 'required');

            if ($this->form_validation->run() == false) {
                
                $this->load->view('admin/header');
                $this->load->view('admin/product/add_product', ['all_category'=>$category]);
                $this->load->view('admin/footer');
            } else {

                $product_name = $this->input->post('product_name');
                if ($this->input->post('product_slug') != "") {
                    $product_slug = strtolower($this->input->post('product_slug'));
                  
                   
                }else{
                    $product_slug =  strtolower(str_replace(' ', '-', $product_name));
                   
                }


                $product_details =[
                    'product_name' => $product_name,
                    'product_slug' =>$product_slug,
                    'quantity'=>$this->input->post('quantity'),
                    'weight'=>$this->input->post('product_weight'),
                    'height'=>$this->input->post('product_height'),
                    'discount'=>$this->input->post('price_discount'),
                    'price'=>$this->input->post('price'),
                    'category_id '=>$this->input->post('product_category'),  
                    'description'=>$this->input->post('product_description')
                ];
                // echo "<pre>";
                // print_r($data);

                $add_product_id = $this->Product_model->add_product($product_details);
                
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                
    
                $this->load->library('upload', $config);
                $this->upload->do_upload('image');
                
    
                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        echo "<pre>";
                        print_r($error);
    
                        // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        echo "<pre>";
                        print_r($data);

                        $image_details = [
                            'product_id'=>$add_product_id,
                            'image_path'=> $data['upload_data']['file_path'],
                            'image_name'=> $data['upload_data']['file_name'],
                        ];

                        $this->Product_model->add_product_image($image_details);
    
                     
                           redirect('admin/product');
                }

            }
        } else {

            $this->load->view('admin/header');
            $this->load->view('admin/product/add_product',['all_category'=>$category]);
            $this->load->view('admin/footer');
        }
    }
    }

    public function uploadImage() {   
     
        $data = [];  
       
        $count = count($_FILES['image']['name']);  
        
        for($i=0;$i<$count;$i++){  
        
          if(!empty($_FILES['image']['name'][$i])){  
        
            $_FILES['file']['name'] = $_FILES['image']['name'][$i];  
            $_FILES['file']['type'] = $_FILES['image']['type'][$i];  
            $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];  
            $_FILES['file']['error'] = $_FILES['image']['error'][$i];  
            $_FILES['file']['size'] = $_FILES['image']['size'][$i];  
      
            $config['upload_path'] = 'uploads/';   
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            // $config['max_size'] = '5000';  
            $config['file_name'] = $_FILES['image']['name'][$i];  
       
            $this->load->library('upload',$config);   
        
            if($this->upload->do_upload('file')){  
              $uploadData = $this->upload->data();  
              $filename = $uploadData['file_name'];  
       
              $data['totalFiles'][] = $filename;  
            }  
          }  
       
        }  
       echo"<pre>";
       print_r($data);
     }  
      
  

   
}
