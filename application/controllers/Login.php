<?php 

class Login extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['temp'] = 'site/user/login';
		$this->load->view('site/layout', $data);
	}
}

?>