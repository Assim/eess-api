<?php
class Orders extends CI_Controller {

	public function index() {
		$query = $this->db->query("SELECT * FROM orders");
		echo json_encode($query->result());
	}

	public function add() {
		$data['phone'] = $this->input->post('phone');
		$data['datetime'] = time();
		$data['items'] = $this->input->post('items');
		$data['amount'] = $this->input->post('amount');
		$data['paid'] = 0;
		$data['delivered'] = 0;

		$this->db->insert('orders', $data);

		echo $this->db->insert_id();
	}
}
?>