<?php 
/**
* 
*/
class HomeModel extends CI_Model
{
	
	public function UserContact($data){
		//die(print_r($data));
		$this->db->insert("contact",$data);
		return true;
	}

	public function PostList($id=null){

		$this->db->select('*');
		$this->db->from('posts');
		if ($id!=null) {
			$this->db->where('post_id',$id);
		}
		$this->db->order_by("post_id","desc");

		$result = $this->db->get();
		return $result->result_array();

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
}
 ?>