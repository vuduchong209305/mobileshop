<?php 

	class Home extends MY_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data['temp'] = 'admin/dashboard';
			$this->load->view('admin/index', $data);
		}

		function logout()
		{
			if($this->session->userdata('login'))
			{
				$this->session->unset_userdata('login');
				redirect(admin_url('login'));
			}
		}
	}



?>