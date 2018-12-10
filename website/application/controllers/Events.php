<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->model('HomeModel');
		$data['new_event'] = $this->HomeModel->EventList();
		
		$this->load->view('event/Events',$data);
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