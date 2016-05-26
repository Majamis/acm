<?php
class Actions_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

   	public function get_all_actions()
   	{
   		$this->db->select('*, c.name, a.name');
		$this->db->from(CONTROLLERS . " as c");
		$this->db->join(ACTIONS." as a","a.controller_id = "."c.id");

		$query = $this->db->get();
		pre($this->db->last_query());
		return $query->result_array();
   	}
}
?>	
