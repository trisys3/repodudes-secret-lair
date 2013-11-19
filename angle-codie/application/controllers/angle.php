<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Angle extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('angle_m');

	}

	public function index()
	{
		$this->load->view('angle');
	}

	public function update_list() {
		$items = $this->input->post("tdl_task[]");
		foreach($items as $list_item) {
			if($changed) {
				$this->angle_m->update_task($list_item);
			}
		}
	}

	public function get_tasks() {
		$tasks = $this->angle_m->get_tasks();
		json_encode($tasks);
	}
		
}