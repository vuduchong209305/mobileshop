<?php 

class Support extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['temp'] = 'admin/support/support';
		$this->load->view('admin/index', $data);
	}

	function contact()
	{
		$data['temp'] = 'admin/support/contact';
		$this->load->view('admin/index', $data);
	}
}

?>