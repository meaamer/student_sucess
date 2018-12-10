<?php 
/**
* 
*/
class Users extends CI_Controller
{
	
	public function index(){

	$this->load->view('LoginView');
	}

	public function CheckUserDetail(){  // checking username and password

		header('Access-Control-Allow-Origin:*');
        $this->load->library("form_validation");
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" >','</div>');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $this->load->model('UsersModel');
            if($data=$this->UsersModel->CheckUserDetail($this->input->post('username'),$this->input->post('password')))
            {
                echo"<script>
                    window.location='".base_url()."Posts'
                </script>";  
            }
            else
            {
                die('<div class="alert alert-danger" >'.'Check username and password'.'</div>');            
            }
        }
        else 
        {
            echo validation_errors();
        }
	}



	public function Logout(){

       $this->session->sess_destroy();
         redirect(base_url('Users')); 

	}


    
}
 ?>