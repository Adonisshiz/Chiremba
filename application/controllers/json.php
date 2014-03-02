<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model("json_model");
		}
		
	public function articles($date){
		$jsonData =$this->json_model->getArticles($date);
		
		foreach($jsonData->result() as $row){
			$headlines[]=	$row->headline;
			$stories[]	=	$row->story;
			$dates[]	=	$row->dates;
			$categories[]	=	$row->category;
			$journalist[]=	$row->journalist;
		}
		$jsonData = array('headlines'=> $headlines,
						  'stories'	 => $stories,
						  'dates'	 => $dates,
						  'categories'=> $categories,
						  'journalists'=> $journalist
						 );
		echo json_encode($jsonData);
	}

    public function sections($section){
        $jsonData = $this->json_model->getArticlesFromSection($section);

        foreach($jsonData->result() as $row){
            $headlines[]    =   $row->headline;
            $stories[]      =   $row->story;
            $dates[]        =   $row->dates;
            $categories[]   =   $row->category;
            $journalist[]   =   $row->journalist;
        }

        $jsonData = array(  'headlines'=> $headlines,
                            'stories'	 => $stories,
                            'dates'	 => $dates,
                            'categories'=> $categories,
                            'journalists'=> $journalist
        );
        echo json_encode($jsonData);

    }
}