<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->model('HomeModel');
		$data['courses'] = $this->HomeModel->CourseList();
		$this->load->view('course/CourseView',$data);
		$this->load->view('includes/footer');
		
	}

	public function EventDetails($id)
	{
		$this->load->view('includes/header');
		$this->load->model('HomeModel');
		$data['event'] = $this->HomeModel->EventList($id)[0];
		$this->load->view('event/EventDetails',$data);
		$this->load->view('includes/footer');
		
	}
 
	
}