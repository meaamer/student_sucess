<?php 
/**
* 
*/
class UsersModel extends CI_Model
{
	public function CheckUserDetail($username,$password) {

			$this->load->library('session');
			$this->db->select("*");
			$this->db->from("admin_table");
			$this->db->where("admin_username",$username);
			$this->db->where("admin_password",$password);
			$query=$this->db->get();
			if($query->num_rows())
			{
				$row = $query->result_array()[0];
				$this->session->set_userdata('userid',$row["admin_id"]);
				$this->session->set_userdata('admin_name',$row["admin_name"]);
				$this->session->set_userdata('username',$row["admin_username"]);
				$this->session->set_userdata('password',$row["admin_password"]);
				return true;
			}
			else
			{
				return false;
			}
	}
	
}
 ?>