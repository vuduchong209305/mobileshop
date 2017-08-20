<?php

class Login extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_model');
	}

	function index()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('login', 'login', 'callback_check_login');
			if($this->form_validation->run())
			{
				$user = $this->input->post('username');
				$this->session->set_userdata('login', $user);
				redirect(admin_url('home'));
			}
		}
		$this->data['temp'] = 'admin/login/index';
		$this->load->view('admin/index', $this->data);
	}

	function check_login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$where = array('a_name'=>$user, 'a_password'=>$pass);
		$admin = $this->admin_model->get_info_rule($where);
		if($admin)
		{
			$this->session->set_userdata('permissions', json_decode($admin->permissions));
			$this->session->set_userdata('admin_id', $admin->id);
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Đăng Nhập Thất Bại');
		return false;
	}
}




?>