<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->model('HomeModel');
		$data['new_posts'] = $this->HomeModel->PostList();
		$data['new_event'] = $this->HomeModel->EventList();
		$data['new_courses'] = $this->HomeModel->CourseList();
		$this->load->view('home/HomeView',$data);
		$this->load->view('includes/footer');
		
	}

	public function About()
	{
		$this->load->view('includes/header');
		$this->load->view('home/AboutUs');
		$this->load->view('includes/footer');
	}

	public function Contact()
	{
		$this->load->view('includes/header');
		$this->load->view('home/Contact');
		$this->load->view('includes/footer');
	}

	public function Tuition()
	{
		$this->load->view('includes/header');
		$this->load->view('home/Tuition');
		$this->load->view('includes/footer');
	}


	
	public function UserContact(){
		header('Access-Control-Allow-Origin:*');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters();
		$this->form_validation->set_rules('full_name', 'Name', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile', 'required');
		$this->form_validation->set_rules('course_name', 'Course', 'required');
		$this->form_validation->set_rules('email_id', 'Email', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if($this->form_validation->run())
			{		
				$data = array(
				"full_name"=>$this->input->post("full_name"),
				"mobile_no"=>$this->input->post("mobile_no"),
				"course_name"=>$this->input->post("course_name"),
				"email_id"=>$this->input->post("email_id"),
				"message"=>$this->input->post("message")
			);
		$this->load->model('HomeModel');
		if($res=$this->HomeModel->UserContact($data))
		{
			die ('We will contact you soon');		
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
}
