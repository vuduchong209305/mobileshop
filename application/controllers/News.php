<?php 

Class News extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$total_rows = $this->news_model->get_total();
		$data['total_rows'] = $total_rows;

		$news['order'] = array('news_id', 'DESC');
		$list = $this->news_model->get_list($news);
		$this->data['list'] = $list;
		
		$this->data['temp'] = 'site/news/index';
		$this->load->view('site/layout', $this->data);
	}

	function view()
	{
		$id = $this->uri->rsegment(3);
		$info = $this->news_model->get_info($id);
		$this->data['info'] = $info;
		$this->data['temp'] = 'site/news/view';
		$this->load->view('site/layout', $this->data);
	}
}


 ?>