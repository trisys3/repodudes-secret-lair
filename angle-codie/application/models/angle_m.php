<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Angle_m extends CI_Model {

	public function __construct()
  {
    parent::__construct();
    $this->_table = 'angle';
  }

  public function create_task($task) {
  	$this->db->set('task', $task);
  	$this->db->insert('angle');
  }

  public function update_task($task, $id) {
  	$this->db->set('task', $task);
  	$this->db->where('id', $id);
  	$this->db->update('angle');
  }

  public function delete_task($id) {
  	$this->db->where('id', $id);
  	$this->db->delete('angle');
  }

  public function get_tasks() {
  	$result = $this->db->get('angle')->result_array();
  	return $result;
  }

  public function get_id_of_task($task) {
  	$this->db->where('task', $task);
  	$result = $this->db->get('angle')->result_array();
  	if(!empty($result)) {
	  	foreach($result as $res) {
	  		$id[] = $res['id'];
	  	}
	  }
	  return $id;
  }

}