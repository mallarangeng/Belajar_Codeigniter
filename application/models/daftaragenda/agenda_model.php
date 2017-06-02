<?php 
/**
* model untuk agenda
*/
class Agenda_model extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function insert_agenda($data){
		$this->db->insert('agenda',$data);
	}

	function select_all(){
	
	$this->db->select('*');
	$this->db->from('agenda');
	$this->db->order_by('id_agenda','desc');
	return $this->db->get();
	}

	function select_by_id($id_agenda){
		$this->db->select('*');
		$this->db->from('agenda');
		$this->db->where('id_agenda',$id_agenda);
		return $this->db->get();
	}
	function update_agenda($id_agenda,$data)
	{
		$this->db->where('id_agenda',$id_agenda);
		$this->db->update('agenda', $data);
			
	}
	function delete_agenda($id_agenda){
		$this->db->where('id_agenda',$id_agenda);
		$this->db->delete('agenda');
	}

}


?>