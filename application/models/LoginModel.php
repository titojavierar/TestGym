<?php  
 class LoginModel extends CI_Model  
 {  
     function __construct(){
            parent::__construct();
            $this->load->database();
    }
     
     public function can_login($username, $password)  
      {  
//           $this->db->where('username', $username);  
//           $this->db->where('password', $password);  
           $query = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");//$this->db->get('user');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
 }  