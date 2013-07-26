<?php
class Main extends CI_Controller {

	public function index() {
		$this->db->query("UPDATE data SET value = (SELECT COUNT(*) FROM departments) WHERE name = 'departments_count'");
		$this->db->query("UPDATE data SET value = (SELECT COUNT(*) FROM items) WHERE name = 'items_count'");

		$query = $this->db->query("SELECT * FROM data");
		echo json_encode($query->result());
	}
}
?>