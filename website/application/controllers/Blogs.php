<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	
	public function index()
	{
		$this->load->view('includes/header');
		 $this->load->model('HomeModel');
		$data['posts'] = $this->HomeModel->PostList();
		$this->load->view('blog/Blogs',$data);

		$this->load->view('includes/footer');
	}

	public function BlogDetails($id)
	{
		$this->load->view('includes/header');
		$this->load->model('HomeModel');
		$data['post'] = $this->HomeModel->PostList($id)[0];
		$data['related'] = $this->HomeModel->PostList();
		$this->load->view('blog/BlogDetails',$data);
		$this->load->view('includes/footer');
	}

	
}
