<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model{
	var $table_colunms = array('username','firstname','surname','password','email','signupdate');
	
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
		$this->db->select('name');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$row = $query->row();
		return $row->name;
       }
	}
}
	
	

