<?php 
class Product_model extends CI_Model{
   
    public function get_products(){

        $res = $this->db->get('product_table');
       
        return $res->result_array();

    }
    public function add_product($data){
        $this->db->insert('product_table',$data);
        
        return $this->db->insert_id();
        
    }




    //blow function are for product images 

    public function get_product_image()
    {
        $res = $this->db->get('product_images');
        return $res->result_array();
    }
    public function getby_id($id)
    {
        $res = $this->db->get_where('product_images',['product_id'=> $id]);
        return $res->result_array();
    }
     public function add_product_image($data){
        $this->db->insert('product_images',$data);
        
        return $this->db->insert_id();
        
    }


}

?>