<?php
class Departments extends CI_Controller {

	public function index() {
		$query = $this->db->query("SELECT * FROM departments");
		echo json_encode($query->result());
	}

	public function id($id) {
		$query = $this->db->query("SELECT * FROM departments WHERE department_id = '$id'");
		echo json_encode($query->result());
	}
}
?>