<?php
class Test extends CI_Controller
{
	public $base;
	public $css;
	
	function __construct()
	{
		parent::__construct();
		$this->base = "application";
		$this->css = $this->config->item('css');
	}
	
	public function load($arg = false)
	{
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$data['title'] = 'Welcome to the Test';
		$data['text'] = 'This is the argument = '.$arg;
		
		$this->load->view('test', $data);
	}
}

?>
