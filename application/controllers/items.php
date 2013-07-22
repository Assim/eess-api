<?php
class Items extends CI_Controller {

	public function index() {
		$query = $this->db->query("SELECT * FROM items");
		echo json_encode($query->result());
	}

	public function id($type, $id) {
		if($type == "item_id") {
			$query = $this->db->query("SELECT * FROM items WHERE item_id = '$id'");
			echo json_encode($query->result());
		}
		else if($type == "department_id") {
			$query = $this->db->query("SELECT * FROM items WHERE department_id = '$id'");
			echo json_encode($query->result());
		}
	}
}
?>