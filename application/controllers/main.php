<?php
class Main extends CI_Controller {

	public function index() {
		$query = $this->db->query("SELECT * FROM data");
		echo json_encode($query->result());
	}
}
?>