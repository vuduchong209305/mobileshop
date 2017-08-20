<?php 

class Warranty extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['temp'] = 'site/warranty/index';
		$this->load->view('site/layout', $this->data);
	}
	

}

 ?>