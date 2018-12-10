<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {


	public function __construct()
        {
                parent::__construct();
               //All model and libraries should call here
                $this->load->model('PostModel');
        }


	public function index(){
		
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data ['courses'] = $this->PostModel->CourseList();
		//die(print_r($data));
		$this->load->view('course/CourseList',$data);
		$this->load->view('includes/footer');

	}

	
		


	public function NewCourse($id=null){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		if ($id!=null) {
			$data ['categories'] = $this->PostModel->CategoryList();
			$data ['rows'] = $this->PostModel->CourseList($id)[0];
			$this->load->view('course/FormView',$data);
		}
		else{
		$data ['categories'] = $this->PostModel->CategoryList();
		$this->load->view('course/FormView',$data);
		}
		$this->load->view('includes/footer');
	}
			
			
		



	// insert form detail in database
	public function AddCourses(){
		header('Access-Control-Allow-Origin:*');
		//	die(print_r($_REQUEST));
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters();
		$this->form_validation->set_rules('course_name', 'Course Name', 'required');
		$this->form_validation->set_rules('course_desc', 'Description', 'required');
		//$this->form_validation->set_rules('category', 'category', 'required');
		$this->form_validation->set_rules('course_price', 'Price', 'required');
		
		

			$_FILES["course_image"];
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '500';
			$config['max_width']= '870';
			$config['max_height']= '300';
			$config['encrypt_name']= TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('course_image'))
				{
					$error = array('error' => $this->upload->display_errors());
					die($error['error']);
				}

			$image = array('upload_data' => $this->upload->data());
		   

			if($this->form_validation->run())
			{
				
				
					$data = array(
					"course_name"=>$this->input->post("course_name"),
					"course_desc"=>$this->input->post("course_desc"),
					"category_id"=>1,
					"course_price"=>$this->input->post("course_price"),
					"course_image"=>$image['upload_data']['file_name']
					);
					
					
					//die(print_r($data));
					
					
					
					
					if($res=$this->PostModel->NewCourse($data))
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

	

	public function UpdateCourse($id){

		header('Access-Control-Allow-Origin:*');
		//	die(print_r($_REQUEST));
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters();
		$this->form_validation->set_rules('course_name', 'Course Name', 'required');
		$this->form_validation->set_rules('course_desc', 'Description', 'required');
		//$this->form_validation->set_rules('category', 'category', 'required');
		$this->form_validation->set_rules('course_price', 'Price', 'required');
			
			

			if($_FILES['course_image']['tmp_name']!=""){

			$_FILES["course_image"];
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '500';
			$config['max_width']= '870';
			$config['max_height']= '300';
			$config['encrypt_name']= TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('course_image'))
				{
					$error = array('error' => $this->upload->display_errors());
					die($error['error']);
				}

			$image = array('upload_data' => $this->upload->data());
			}
		
			if($this->form_validation->run())
			{
				
				

					if($_FILES['course_image']['tmp_name']!=""){
					$data = array(
					"course_name"=>$this->input->post("course_name"),
					"course_desc"=>$this->input->post("course_desc"),
					"category_id"=>1,
					"course_price"=>$this->input->post("course_price"),
					"course_image"=>$image['upload_data']['file_name']
					);}
					else{
						$data = array(
					"course_name"=>$this->input->post("course_name"),
					"course_desc"=>$this->input->post("course_desc"),
					"category_id"=>1,
					"course_price"=>$this->input->post("course_price")
					
					);
					
					}
				
					
					//die(print_r($data));
					
					if($res=$this->PostModel->UpdateCourse($id,$data))
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



	public function EventDetails($id){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data ['detail'] = $this->PostModel->EventList($id)[0];
		$this->load->view('event/EventDetailView',$data);
		$this->load->view('includes/footer');
	}

	public function DeleteCourse($id){
		if ($this->PostModel->DeleteCourse($id)) {

			die('Delete Successfully');
		}
			
	}






	

	

	



	
}
?>
