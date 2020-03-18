<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function SaveForm($table,$form_data) {
        $this->db->insert($table, $form_data);
        if ($this->db->affected_rows() == '1') {
            return $this->db->insert_id();
        }
        return FALSE;
    }

    public function GetAllInfo($table,$order_by,$data = null, $num = null, $offset = null) {
        $this->db->order_by($order_by, 'DESC');
        if ($data != null)
            $this->db->where($data);
        return $this->db->get($table, $num, $offset)->result_array();
    }
	
	public function insertinto($table,$id,$name,$email){
		
				  // $this->db->where('user_id',$id);
				   
				  // $q = $this->db->get($table);
				   
				   $q = $this->db->query("SELECT id FROM t_register WHERE email =".$email."");
				
				   if ( $q->num_rows() > 0 ) 
				   {
					   //insert
					$this->db->query("INSERT INTO t_register SET VALUES('',)");
					   
				//	  $this->db->where('user_id',$id);
				//	  $this->db->update($table,$data);
				   } else {
					   
					   	$this->db->query("INSERT INTO t_register SET VALUES('',)");
					   
					   //get
				//	  $this->db->set('user_id', $id);
				//	  $this->db->insert('profile',$data);
				   }
				   
	}

    public function Delete($table,$data) {
        if ($this->db->delete($table, $data))
            return "successfully removed";
        else
            return "deletion unsuccessful";
    }

    public function GetInfoByRow($table,$order_by,$data = null) {
        $this->db->order_by($order_by, 'DESC');
        $this->db->where($data);
        $query = $this->db->get($table)->row();

        if (empty($query)){
          throw new Exception("No result found");
        }else{
            return $query;
        }
        
    }

    public function Manage($table,$data, $where, $type) {
        $this->db->where($where);
        if ($this->db->update($table, $data))
            return True;
        else
            return False;
    }

}

?>