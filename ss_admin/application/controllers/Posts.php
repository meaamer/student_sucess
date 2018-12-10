<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {


	public function __construct()
        {
                parent::__construct();
               //All model and libraries should call here
                $this->load->model('PostModel');

}



	public function index(){
		
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data ['posts'] = $this->PostModel->PostList();
		// $data ['categories'] = $this->PostModel->PostCategory();
		$this->load->view('posts/PostListView',$data);
		$this->load->view('includes/footer');

	}

	
		


	public function NewPost($id=null){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		if ($id!=null) {
			$data ['rows'] = $this->PostModel->PostList($id)[0];
			
			$this->load->view('posts/FormView',$data);
		}
		else{
		
		$this->load->view('posts/FormView');
			}
		$this->load->view('includes/footer');
	}



	// insert form detail in database
	public function AddPost(){
		header('Access-Control-Allow-Origin:*');
		//	die(print_r($_REQUEST));
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters();
		$this->form_validation->set_rules('title', 'Title', 'required');

			$_FILES["post_file"];
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '500';
			$config['max_width']= '870';
			$config['max_height']= '300';
			$config['encrypt_name']= TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('post_file'))
				{
					$error = array('error' => $this->upload->display_errors());
					die($error['error']);
				}

			$image = array('upload_data' => $this->upload->data());
		   

			if($this->form_validation->run())
			{
				
				
					$data = array(
					"post_title"=>$this->input->post("title"),
					"post_content"=>$this->input->post("editor_data"),
					"post_date"=>date('y-m-d'),
					"admin_id"=>'administrator',
					"post_media"=>$image['upload_data']['file_name']
					);
					
					//die(print_r($data));
					
					
					
					
					if($res=$this->PostModel->AddPost($data))
					{
						die ('Submit Successfully');		
					}else
					{
						die ('Please ReSubmit');			
					}	
					
				
				
			}
			else 
			{
				echo validation_errors();
			}
	}

	

	public function UpdatePost($id){

		header('Access-Control-Allow-Origin:*');
		//	die(print_r($_REQUEST));
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters();
		$this->form_validation->set_rules('title', 'Title', 'required');
			
			

			if($_FILES['post_file']['tmp_name']!=""){

			$_FILES["post_file"];
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '500';
			$config['max_width']= '870';
			$config['max_height']= '300';
			$config['encrypt_name']= TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('post_file'))
				{
					$error = array('error' => $this->upload->display_errors());
					die($error['error']);
				}
				$image = array('upload_data' => $this->upload->data());
			}
		
			if($this->form_validation->run())
			{
				
				

					if($_FILES['post_file']['tmp_name']!=""){
					$data = array(
					"post_title"=>$this->input->post("title"),
					"post_content"=>$this->input->post("editor_data"),
					"post_date"=>date('y-m-d'),
					"admin_id"=>'administrator',
					"post_media"=>$image['upload_data']['file_name']
					);}
					else{
						$data = array(
					"post_title"=>$this->input->post("title"),
					"post_content"=>$this->input->post("editor_data"),
					"post_date"=>date('y-m-d'),
					"admin_id"=>'administrator'
					
					);
					
					}
				
					
					//die(print_r($data));
					
					if($res=$this->PostModel->UpdatePost($id,$data))
					{
						die ('Update Successfully');		
					}else
					{
						die ('Please ReSubmit');			
					}	
					
				
				
			}
			else 
			{
				echo validation_errors();
			}

	}



	public function PostDetails($id){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data ['detail'] = $this->PostModel->PostList($id)[0];
		$this->load->view('posts/PostDetailView',$data);
		$this->load->view('includes/footer');
	}

	public function DeletePost($id){
		if ($this->PostModel->DeletePost($id)) {

			die('Delete Successfully');
		}
			
	}


	###################### CATEGORIES FUNCTION ###################################


	public function NewCategory($id=null){

		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		if ($id!=null) {
			$data ['rows'] = $this->PostModel->CategoryList($id)[0];
			$this->load->view('category/FormView',$data);
		}
		else
		{
			$this->load->view('category/FormView');
	    }
		$this->load->view('includes/footer');
		
	}

	public function InsertCategory(){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('');
		$this->form_validation->set_rules('category', 'category', 'required');
		if($this->form_validation->run())
		{
			$data=array('category_name' => $this->input->post('category'));
			
			$result =$this->PostModel->NewCategory($data);
			if ($result == true) 
			{
				die (' Submit successfully');
			} 
			else 
			{
				die ('Please Resubmit');
			}
		}
		else 
		{
			echo validation_errors();
		}
	}

	public function UpdateCategory($id){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('');
		$this->form_validation->set_rules('category', 'category', 'required');
		if($this->form_validation->run())
		{
			$data=array('category_name' => $this->input->post('category'));
			$result =$this->PostModel->UpdateCategory($id,$data);
			if ($result == true) 
			{
				die (' Update successfully');
			} 
			else 
			{
				die ('Please Resubmit');
			}
		}
		else 
		{
			echo validation_errors();
		}
	}




	public function CategoryList(){

		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data ['categories'] = $this->PostModel->CategoryList();
		$this->load->view('category/CategoryList',$data);
		$this->load->view('includes/footer');
	}

	public function DeleteCategory($id){
		if ($this->PostModel->DeleteCategory($id)) {

			die('Delete Successfully');
		}
	}




	####################################pages function##########################




	public function NewPage($id=null){

		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		if ($id!=null) {
			$data ['rows'] = $this->PostModel->PageList($id)[0];
			$this->load->view('pages/PageFormView',$data);
		}
		else
		{
			$this->load->view('pages/PageFormView');
	    }
		$this->load->view('includes/footer');
		
	}

	public function InsertPage(){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('');
		$this->form_validation->set_rules('page', 'Page Name', 'required');
		if($this->form_validation->run())
		{
			$data=array('page_name' => $this->input->post('page'));
			$result =$this->PostModel->InsertPage($data);
			if ($result == true) 
			{
				die (' Submit successfully');
			} 
			else 
			{
				die ('Please Resubmit');
			}
		}
		else 
		{
			echo validation_errors();
		}
	}

	public function UpdatePage($id){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('');
		$this->form_validation->set_rules('page', 'page name', 'required');
		if($this->form_validation->run())
		{
			$data=array('page_name' => $this->input->post('page'));
			$result =$this->PostModel->UpdatePage($id,$data);
			if ($result == true) 
			{
				die (' Update successfully');
			} 
			else 
			{
				die ('Please Resubmit');
			}
		}
		else 
		{
			echo validation_errors();
		}
	}




	public function PageList(){

		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data ['pages'] = $this->PostModel->PageList();
		$this->load->view('pages/PageListView',$data);
		$this->load->view('includes/footer');
	}

	public function DeletePage($id){
		if ($this->PostModel->DeletePage($id)) {

			die('Delete Successfully');
		}
	}




	########################### user messages##################

	public function Messages(){
        $this->load->view('includes/header');
        $this->load->view('includes/aside');
        $data ['messages'] = $this->PostModel->Messages();

        $this->load->view('Messages',$data);
        $this->load->view('includes/footer');
    }

    public function DeleteMessage($id){
		if ($this->PostModel->DeleteMessage($id)) {
			die('Delete Successfully');

		}
	}
}
?>
