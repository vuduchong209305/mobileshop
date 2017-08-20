<?php 

	class Category extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('category_model');
		}

		function index()
		{
			$this->data['temp'] = 'site/category/index';
			$this->load->view('site/layout', $this->data);
		}

		function getListParentId()
		{
			$input['where'] = array('parent_id' => 0);
			$parent_id = $this->category_model->get_list($input);
			$this->data['parent_id'] = $parent_id;

			$this->load->view('site/layout', $this->data);
		}
	}
?>