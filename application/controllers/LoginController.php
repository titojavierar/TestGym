<?php  
 //defined('BASEPATH') OR exit('No direct script access allowed');  
 class LoginController extends CI_Controller {  
     
     function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}
        
     public function index(){
         $this->load->view('login');
     }
     
     public function process(){
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $var_login = $this->LoginModel->can_login($username, $password);
         if ($var_login){ //$username=='admin' && $password=='123456*') {
             $this->session->set_userdata(array('username'=>$username));
             redirect('Welcome/index');
         } else {
            $data['error']='Account is invalid!!';
            $this->load->view('login',$data);
         }
     }
     public function logout(){
         $this->session->unset_userdata('username');
         redirect("LoginController/index");
     }
     //functions  
//      function login()  
//      {  
//           //http://localhost/tutorial/codeigniter/main/login  
//           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
//           $this->load->view("login", $data);  
//      }  
      
//      function login_validation()  
//      {  
//           $this->load->library('form_validation');  
//           $this->form_validation->set_rules('username', 'Username', 'required');  
//           $this->form_validation->set_rules('password', 'Password', 'required');  
//           if($this->form_validation->run())  
//           {  
//                //true  
//                $username = $this->input->post('username');  
//                $password = $this->input->post('password');  
//                //model function  
//                $this->load->model('MainModel');  
//                if($this->MainModel->can_login($username, $password))  
//                {  
//                     $session_data = array(  
//                          'username' => $username  
//                     );  
//                     $this->session->set_userdata($session_data);  
//                     redirect(base_url().'main/enter'); // 'Welcome/index');//
//                }  
//                else  
//                {  
//                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
//                     redirect(base_url().'main/login');  
//                }  
//           }  
//           else  
//           {  
//                //false  
//                $this->login();  
//           }  
//      }  
//      
//      function enter(){  
//           if($this->session->userdata('username') != '')  
//           {  
//                echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
//                echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';  
//           }  
//           else  
//           {  
//                redirect(base_url().'main/login');  
//           }  
//      }  
//      
//      function logout()  
//      {  
//           $this->session->unset_userdata('username');  
//           redirect(base_url() . 'main/login');  
//      }  
//      
 }  
