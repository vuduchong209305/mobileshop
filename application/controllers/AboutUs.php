<?php 

class AboutUs extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('config_model');
	}

	function index()
	{
		$about = $this->config_model->get_list();
		$this->data['about'] = $about;
		$this->data['temp'] = 'site/aboutus/index';
		$this->load->view('site/layout', $this->data);
	}
}


 ?>