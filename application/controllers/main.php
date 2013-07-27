<?php
class Main extends CI_Controller {

	public function index() {
		$this->db->query("UPDATE data SET value = (SELECT COUNT(*) FROM departments) WHERE name = 'departments_count'");
		$this->db->query("UPDATE data SET value = (SELECT COUNT(*) FROM items) WHERE name = 'items_count'");

		$this->db->query("UPDATE items SET picture = null");
		$dir = "images/items/";
		if(is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					$item_id = substr($file, 0, strpos($file, '.'));
					$this->db->query("UPDATE items SET picture = '".$file."' WHERE item_id = '".$item_id."'");
				}
				closedir($dh);
			}
		}

		$query = $this->db->query("SELECT * FROM data");
		echo json_encode($query->result());
	}
}
?>