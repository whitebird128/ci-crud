<?php

class Primo_model extends CI_Model
{
	
	// get all list of primo
	public function get_primo_list() {
		$this->db->select('*');
		$this->db->from('primo');
		$query = $this->db->get();
		return $query->result();
	}

	// insert primo data into primo table.
	public function insert_primo($data) {
		$this->db->insert('primo', $data);
	}

	// get primo data from primo table by primo_id
	public function get_primo($primo_id) {
		$this->db->select('*');
		$this->db->from('primo');
		$this->db->where('primo.id', $primo_id);
		$query = $this->db->get();
		return $query->row();
	}

	// update primo data by $data and $primo_id
	public function update_primo($data, $primo_id){
		$this->db->where('id', $primo_id);
		$this->db->update('primo', $data, $where);
	}

	// Delete primo data by id
	public function delete_primo($primo_id) {
		$this->db->where('id', $primo_id);
      	$this->db->delete('primo'); 
	}
}

/* End of file primo_model.php */
/* Location: ./application/models/primo_model.php */