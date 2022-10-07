<?php 
class Category_model extends CI_Model{
    public function get_data(){

        $res = $this->db->get('category_table');
        // $res = $this->db->get_where('users',['user_id'=> 1]);
        return $res->result();

    }
    public function add_category($data){
        $this->db->insert('category_table',$data);
        
        return $this->db->insert_id();
        

    }
}

?>