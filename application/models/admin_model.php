<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
	
	public function get_categories(){
		$this->db->select('name');
		$this->db->from('categories');
		$query = $this->db->get();
		return $query;
	}
	
	public function get_articles(){
		$this->db->select('*');
		$this->db->from('articles');
		$query = $this->db->get();
		return $query;
	}
	public function get_stories(){
		$this->db->select("*");
		$this->db->from('questions');
		$query = $this->db->get();
		return $query;
	}
	
	public function insert_story($data){
		if(!$this->db->insert('articles',$data)){
			return false;
		}else{
			return true;
		}
	}
	
	public function answer($diagnosis, $qstn){
		$data = array(
						'doc'	   => $diagnosis,
						'ansad'	   =>  '1'
						);
		$this->db->where('question',$qstn);
		$this->db->update('questions',$data);
	}
	
	public function get_Members(){
		$this->db->select("*");
		$this->db->from('clients');
		$query = $this->db->get();
		return $query;
	}
}
	
	

