<?php 
class User_model extends CI_Model{
    public function get_data(){

        $res = $this->db->get('users');
        // $res = $this->db->get_where('users',['user_id'=> 1]);
        return $res->result();

    }
}

?>