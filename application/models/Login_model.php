<?php 
class Login_model extends CI_Model{
    public function user_login($email, $password){

        
        // $res = $this->db->get_where('users',['user_id'=> 1]);
        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $res = $this->db->get('users');

        return $res->num_rows();

    }
    public function admin_login($email, $password){

        
        // $res = $this->db->get_where('users',['user_id'=> 1]);
        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $res = $this->db->get('users');

        

        return $res->row();

    }
  
   
}

?>