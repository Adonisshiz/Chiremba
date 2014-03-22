<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mrwadzoe extends CI_Controller {

    private $question;
    private $questionWordsArray;

	public function __construct() {
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('marwadzoe_model');
	}


    public function index(){
       redirect('home/');
    }
}




/* End of file marwadzoe.php */
/* Location: ./application/controllers/marwadzoe.php */