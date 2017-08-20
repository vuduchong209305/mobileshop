<?php

class Pay extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['temp'] = 'site/pay/index';
		$this->load->view('site/layout', $this->data);
	}
}



?>