<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostModel extends CI_Model {

	
	public function AddPost($data){
		
		$this->db->insert("posts",$data);
		return true;
	}

	public function PostList($id=null){

		$this->db->select('*');
		$this->db->from('posts');
		if ($id!=null) {
			$this->db->where('category_id',$id);
		}
		$this->db->order_by("category_id","desc");

		$result = $this->db->get();
		return $result->result_array();

	}

	
	public function UpdatePost($id,$data){
		$this->db->where('post_id',$id);
		$this->db->update('posts',$data);
		return true;
	}

	public function DeletePost($id){

		$this->db->where('post_id',$id);
		$this->db->delete('posts');
		return true;

	}

	#########################Event ###############################

	public function AddEvent($data){
		
		$this->db->insert("events",$data);
		return true;
	}


	public function EventList($id=null){

		$this->db->select('*');
		$this->db->from('events');
		if ($id!=null) {
			$this->db->where('event_id',$id);
		}
		$this->db->order_by("event_id","desc");

		$result = $this->db->get();
		return $result->result_array();

	}

	public function UpdateEvent($id,$data){
		$this->db->where('event_id',$id);
		$this->db->update('events',$data);
		return true;
	}


	public function DeleteEvent($id){

		$this->db->where('event_id',$id);
		$this->db->delete('events');
		return true;

	}


	#########################Category ###############################


	
public function NewCategory($data){
		
		$this->db->insert("category",$data);
		return true;
	}


	public function CategoryList($id=null){

		$this->db->select('*');
		$this->db->from('category');
		if ($id!=null) {
			$this->db->where('category_id',$id);
		}
		$this->db->order_by("category_id","desc");

		$result = $this->db->get();
		return $result->result_array();

	}


	public function UpdateCategory($id,$data){
		$this->db->where('category_id',$id);
		$this->db->update('category',$data);
		return true;
	}



	public function DeleteCategory($id){

		$this->db->where('category_id',$id);
		$this->db->delete('category');
		return true;

	}





#########################Courses ###############################


	
public function NewCourse($data){
		
		$this->db->insert("courses",$data);
		return true;
	}


	public function CourseList($id=null){

		$this->db->select('*');
		$this->db->from('courses');
		$this->db->join('category', 'category.category_id = courses.category_id','left');


		
		if ($id!=null) {
			$this->db->where('course_id',$id);
		}
		$this->db->order_by("course_id","desc");

		$result = $this->db->get();
		return $result->result_array();

	}


	public function UpdateCourse($id,$data){
		$this->db->where('course_id',$id);
		$this->db->update('courses',$data);
		return true;
	}



	public function DeleteCourse($id){

		$this->db->where('course_id',$id);
		$this->db->delete('courses');
		return true;

	}

	###################user massges#############




	

	

	public function Messages($id=null){

		$this->db->select('*');
		$this->db->from('contact');
		$this->db->order_by("id","desc");
		$result = $this->db->get();
		return $result->result_array();
		


	}

	public function DeleteMessage($id){

		$this->db->where('id',$id);
		$this->db->delete('contact');
		return true;

	}



	




	

	

}


?>
