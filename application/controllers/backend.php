<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BackEnd extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->_is_logged_in();
		$this->load->model('admin_model');
	}
	
	private function _is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        
       if(!isset($is_logged_in) || $is_logged_in !== TRUE)
       {
           redirect('home');
       }
    }
	
	 public function index(){
		$data['success'] = "";
		$this->load->view('app_admin', $data);
	}		
	
	public function categories(){
		$categories = $this->admin_model->get_categories();
		$data['categories'] = $categories;
		$this->load->view('app_categories', $data);
	}
	
	public function articles(){
		$articles = $this->admin_model->get_articles();
		$data['articles'] = $articles;
		$this->load->view('app_articles', $data);
	}
	
	public function respond(){

		$questions = $this->admin_model->get_stories();
		$data['question'] = $questions;
		$this->load->view('app_questions', $data);
	}
	
	public function showClients(){
		$clientData = $this->admin_model->get_Members();
		//var_dump($clientData);
		$data['info'] = $clientData;
		$this->load->view('app_members', $data);
	}
	
	public function answer(){
		$question = $this->admin_model->get_stories();
		$data['question'] = $question;
		$this->load->view('app_postt',$data);
	}
	
	public function addArticle(){
		$diagnosis = $this->input->post('diagnosis');
		$question = $this->input->post('questions');
	
		$this->admin_model->answer($diagnosis,$question);
		$data['success'] = "Thank you for taking your time to help Zimbabwe, your contribution is greatly appreciated";
		$this->load->view('app_admin',$data);
		
		//echo $diagnosis;
		//echo "<br/>";
		//echo $question;
	}
	
	public function post(){
		$this->form_validation->set_rules('journalist','Journalist','required');
		$this->form_validation->set_rules('headline','Headline','required');
		$this->form_validation->set_rules('story','Story','required');
		if($this->form_validation->run()==FALSE)
		{
			$categories = $this->admin_model->get_categories();
			$data['categories'] = $categories;
			$this->load->view('app_post', $data);
        }else{
			$data = array(
			'journalist' =>	$this->input->post('journalist'),
			'headline'	=>	$this->input->post('headline'),
			'story'	=>	$this->input->post('story'),
			'category' => $this->input->post('category'),
			'date' => get_time()
			);
			
			$insert = $this->admin_model->insert_story($data);
		
			if(!$insert){
				die();
			}else{
				$this->load->view('app_post', $data);
			}
		}
	}
}

/* End of file theherald.php */
/* Location: ./application/controllers/theherald.php */