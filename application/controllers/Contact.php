<?php 

class Contact extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

	function index()
	{
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$this->googlemaps->initialize($config);
		$this->data['map'] = $this->googlemaps->create_map();
		$this->data['temp'] = 'site/contact/index';
		$this->load->view('site/layout', $this->data);
	}

	function add()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('email','Email','trim|required|valid_email|');
			$this->form_validation->set_rules('name','Mật Khẩu','trim|required|min_length[6]');
			$this->form_validation->set_rules('phone','Số Điện Thoại','trim|required');
			$this->form_validation->set_rules('message','Tin Nhắn','trim|required');

			if($this->form_validation->run())
			{
				$data = array(
					'email' => $this->input->post('email'),
					'name' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
					'content' => $this->input->post('message')
					);
				if($this->contact_model->create($data))
				{
					$this->session->set_flashdata('mess','Gửi Thành Công');
				} else {
					$this->session->set_flashdata('mess','Gửi Thất Bại');
				}
				redirect(base_url('contact/index'));
			}
		}
		$data['temp'] = 'site/contact/index';
		$this->load->view('site/layout', $data);
	}
}


 ?>