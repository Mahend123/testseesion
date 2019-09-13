
<?php
class User_Model extends CI_Model {

       public function __construct(){
			parent::__construct();
			$this->load->database();
		}


	public function insert($value) {
        $n = $this->db->insert("testtbl",$value);
    	return $n;
    }

    public function Checklogin($data){
    	$this->db->where($data);
    	$result = $this->db->get('testtbl');
    	return $result->result_array();
    	
    }
}