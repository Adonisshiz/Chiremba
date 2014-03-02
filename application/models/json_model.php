<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json_model extends CI_Model{
	
    public function __construct(){
        parent::__construct();
    }


	public function getArticles($date){
		$this->db->select("*");
		$this->db->from("articles");
		$this->db->where("dates",$date);
		$query = $this->db->get();
		return $query;
	}


    public function getArticlesFromSection($section){
        $this->db->select("*");
        $this->db->from("articles");
        $this->db->where("category",$section);
        $query = $this->db->get();
        return $query;
    }
}