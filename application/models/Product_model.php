<?php 
class Product_model extends CI_Model{
   
    public function get_products(){

        $res = $this->db->get('product_table');
       
        return $res->result_array();

    }
    


}

?>