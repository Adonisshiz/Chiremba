<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Marwadzoe_model extends CI_Model{
	
    public function __construct(){
        parent::__construct();
    }
	
    public function find_user($username,$password, $limit = 1) {
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password ), $limit);
       if($query->num_rows != 1)
       {
           return FALSE;
       }
       else
       {
		$this->db->select('company');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$row = $query->row();
		return $row->company;
       }
	}

    //public function search($symptom){
		//$row = $this->db->query("SELECT  `sickness` FROM  `malaria` WHERE  `symptoms` =  '{$symptom}' LIMIT 0 , 30");
		//$this->db->select('sickness');
		//$this->db->from('malaria');
		//$this->db->where('symptoms',$symptom);
		//$query = $this->db->get();
		//$row = $query->row();
		//return $row;
    //}
	

    public function getSymptoms(){
        $this->db->select("*");
        $this->db->from('symptoms');
        $query = $this->db->get();
        $row = $query->row();
        return $query->result();

    }
	public function getTreatment($row){
        $this->db->select("*");
        $this->db->from('malaria');
		$this->db->where('treatment',$row);
        $query = $this->db->get();
        $row = $query->row();
        return $row;

    }


}
	
	

