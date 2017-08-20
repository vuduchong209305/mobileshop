<?php 

class Config extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('config_model');
		$this->load->library('upload_library');
	}

	function index()
	{
		// Lấy ra danh sách tất cả sản phẩm
		$list = $this->config_model->get_list();
		$data['list'] = $list;

		// Lấy nội dung thông báo của biến mess
		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/config/index';
		$this->load->view('admin/index', $data);
	}

	function edit()
	{	
		// Lấy id cần chỉnh sửa
		$id = $this->uri->rsegment(3);
		// Lấy tất cả thông tin của id đó
		$info = $this->config_model->get_info($id);
		$data['info'] = $info;
		if($this->input->post())
		{
			$this->form_validation->set_rules('title','Tiêu Đề','trim');
			$this->form_validation->set_rules('phone','Số Điện Thoại','trim');
			$this->form_validation->set_rules('gmail','Gmail','trim');
			$this->form_validation->set_rules('facebook','Facebook','trim');
			$this->form_validation->set_rules('youtube','Youtube','trim');
			$this->form_validation->set_rules('info','Thông Tin','trim');
			$this->form_validation->set_rules('detail','Chi Tiết','trim');

			if($this->form_validation->run())
			{
				$upload_path = './upload/config';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$data = array(
					'title' => $this->input->post('title'),
					'hotline' => $this->input->post('phone'),
					'gmail' => $this->input->post('gmail'),
					'facebook' => $this->input->post('facebook'),
					'youtube' => $this->input->post('youtube'),
					'contact_page' => $this->input->post('info'),
					'descript_web' => $this->input->post('detail'),
					);
				if($image != ''){
					$data['logo'] = $image;
				}

				if($this->config_model->update($id,$data))
				{
					$this->session->set_flashdata('mess','Thêm dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không thêm được');
				}
				redirect(admin_url('config/index'));
			}
		}
		$data['temp'] = 'admin/config/edit';
		$this->load->view('admin/index', $data);
	}
}

?>