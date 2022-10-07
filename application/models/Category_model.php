<?php 
class Category_model extends CI_Model{
    public function get_data(){

        $res = $this->db->get('category_table');
       
        return $res->result();

    }
    public function add_category($data){
        $this->db->insert('category_table',$data);
        
        return $this->db->insert_id();
        

    }

    public function getby_id($id)
    {
        $res = $this->db->get_where('category_table',['category_id'=> $id]);
        return $res->row();
    }
    
    public function updateby_id($id, $data)
    {
        $this->db->where('category_id', $id);
        $this->db->update('category_table',$data);

        
    }


}

?>