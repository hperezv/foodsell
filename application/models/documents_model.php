<?php
class Documents_model extends CI_Model {
 
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
    public function get_product_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('documents');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }

    /**
    * Fetch products data from the database
    * possibility to mix search, filter and order
    * @param int $manufacuture_id 
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_products($tipodoc_id=null, $search_string=null, $order=null, $order_type='Asc', $limit_start, $limit_end)
    {
	    
		$this->db->select('documents.id');
		$this->db->select('documents.numdoc');
		$this->db->select('documents.asunto');
		$this->db->select('documents.fecha');
		$this->db->select('documents.observ');
		$this->db->select('documents.tipodoc_id');
		$this->db->select('tipodoc.name as manufacture_name');
		$this->db->from('documents');
		if($tipodoc_id != null && $tipodoc_id != 0){
			$this->db->where('tipodoc_id', $tipodoc_id);
		}
		if($search_string){
			$this->db->like('numdoc', $search_string);
		}

		$this->db->join('tipodoc', 'documents.tipodoc_id = tipodoc.id', 'left');

		$this->db->group_by('documents.id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id', $order_type);
		}


		$this->db->limit($limit_start, $limit_end);
		//$this->db->limit('4', '4');


		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $tipodoc_id
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_products($tipodoc_id=null, $search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('documents');
		if($tipodoc_id != null && $tipodoc_id != 0){
			$this->db->where('tipodoc_id', $tipodoc_id);
		}
		if($search_string){
			$this->db->like('numdoc', $search_string);
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
    function store_product($data)
    {
		$insert = $this->db->insert('documents', $data);
	    return $insert;
	}

    /**
    * Update product
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_product($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('documents', $data);
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
    * Delete product
    * @param int $id - product id
    * @return boolean
    */
	function delete_product($id){
		$this->db->where('id', $id);
		$this->db->delete('documents'); 
	}
 
}
?>	
