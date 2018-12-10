<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {


	public function __construct()
        {
                parent::__construct();
               //All model and libraries should call here
                $this->load->model('PostModel');
        }


	public function index(){
		
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		$data ['events'] = $this->PostModel->EventList();
		
		$this->load->view('event/EventListView',$data);
		$this->load->view('includes/footer');

	}

	
		


	public function NewEvent($id=null){
		$this->load->view('includes/header');
		$this->load->view('includes/aside');
		if ($id!=null) {
			$data ['rows'] = $this->PostModel->EventList($id)[0];
			$this->load->view('event/EventView',$data);
		}
		else{
		$this->load->view('event/EventView');
		}
		$this->load->view('includes/footer');
	}
			
			
		



	// insert form detail in database
	public function AddEvent(){
		header('Access-Control-Allow-Origin:*');
		//	die(print_r($_REQUEST));
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters();
		$this->form_validation->set_rules('event_title', 'Title', 'required');
		$this->form_validation->set_rules('event_date', 'Date', 'required');
		$this->form_validation->set_rules('event_time', 'Time', 'required');
		$this->form_validation->set_rules('call_to_hlep', 'Contact', 'required');
		$this->form_validation->set_rules('event_location', 'Location', 'required');
		

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
					"event_title"=>$this->input->post("event_title"),
					"event_content"=>$this->input->post("editor_data"),
					"event_date"=>$this->input->post("event_date"),
					"event_time"=>$this->input->post("event_time"),
					"event_location"=>$this->input->post("event_location"),
					"call_to_hlep"=>$this->input->post("call_to_hlep"),
					"event_image"=>$image['upload_data']['file_name']
					);
					
					//die(print_r($data));
					
					
					
					
					if($res=$this->PostModel->AddEvent($data))
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

	

	public function UpdateEvent($id){

		header('Access-Control-Allow-Origin:*');
		//	die(print_r($_REQUEST));
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters();
		$this->form_validation->set_rules('event_title', 'Title', 'required');
		$this->form_validation->set_rules('event_date', 'Date', 'required');
		$this->form_validation->set_rules('event_time', 'Time', 'required');
		$this->form_validation->set_rules('call_to_hlep', 'Contact', 'required');
		$this->form_validation->set_rules('event_location', 'Location', 'required');
			
			

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
					"event_title"=>$this->input->post("event_title"),
					"event_content"=>$this->input->post("editor_data"),
					"event_date"=>$this->input->post("event_date"),
					"event_time"=>$this->input->post("event_time"),
					"event_location"=>$this->input->post("event_location"),
					"call_to_hlep"=>$this->input->post("call_to_hlep"),
					"event_image"=>$image['upload_data']['file_name']
					);}
					else{
						$data = array(
					"event_title"=>$this->input->post("event_title"),
					"event_content"=>$this->input->post("editor_data"),
					"event_date"=>$this->input->post("event_date"),
					"event_time"=>$this->input->post("event_time"),
					"event_location"=>$this->input->post("event_location"),
					"call_to_hlep"=>$this->input->post("call_to_hlep")
					
					);
					
					}
				
					
					//die(print_r($data));
					
					if($res=$this->PostModel->UpdateEvent($id,$data))
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

	public function DeleteEvent($id){
		if ($this->PostModel->DeleteEvent($id)) {

			die('Delete Successfully');
		}
			
	}






	

	

	



	
}
?>
