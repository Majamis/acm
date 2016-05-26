<?php
class Keys_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_key_by_id($id)
    {
		$this->db->select('*');
		$this->db->from(KEYS);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }    

    /**
    * Fetch keys data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_keys($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->from(KEYS);

		if($search_string){
			$this->db->like('description', $search_string);
		}
		$this->db->group_by('id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id', $order_type);
		}

        if($limit_start && $limit_end){
          $this->db->limit($limit_start, $limit_end);	
        }

        if($limit_start != null){
          $this->db->limit($limit_start, $limit_end);    
        }
        
		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_keys($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from(KEYS);
		if($search_string){
			$this->db->like('description', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_key($data)
    {
        $data['key'] = md5($data['description'] . date('Y-m-d'));
		$insert = $this->db->insert(KEYS, $data);
        
	    return $insert;
	}

    /**
    * Update key
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_key($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update(KEYS, $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}

    /**
    * Delete key
    * @param int $id - key id
    * @return boolean
    */
	function delete_key($id){
		$this->db->where('id', $id);
		$this->db->delete(KEYS); 
	}
 
}
?>	
