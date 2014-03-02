<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class marwadzoe extends CI_Controller {

    private $question;
    private $questionWordsArray;

	public function __construct() {
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('search_engine_model');
	}


    public function index(){
        $this->validateForm();

        $this->createWordsArray();
    }

    private function validateForm(){
        $this->form_validation->set_rules('question','Question','trim|required|xss_clean|htmlspecialchars');
        if($this->form_validation->run()==FALSE){
            redirect('home/');
        }else{
            $this->question = $this->input->post('question');
        }
    }

    private function createWordsArray(){
        $this->questionWordsArray = explode(" ", $this->question);
        foreach($this->questionWordsArray as $q){
            echo $q;
            echo "<br/>";
        }
    }


}




/* End of file marwadzoe.php */
/* Location: ./application/controllers/marwadzoe.php */