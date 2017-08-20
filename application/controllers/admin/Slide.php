<?php 

class Slide extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
		$this->load->library('upload_library');
	}

	function index()
	{
		// Lấy ra danh sách tất cả sản phẩm
		$input['order'] = array('id', 'ASC');
		$list = $this->slide_model->get_list($input);
		$data['list'] = $list;

		// Lấy nội dung thông báo của biến mess
		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/slide/index';
		$this->load->view('admin/index', $data);
	}

	function add()
	{
		if($this->input->post()){

			$this->form_validation->set_rules('name','Tiêu Đề','required');

			if($this->form_validation->run())
			{
				$upload_path = './upload/slide';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$name = $this->input->post('name');
				$base_url = str_slug($name);

				$data = array(
					'slide_title' => $name,
					'url' => $base_url,
					'slide_image' => $image
					);
				if($this->slide_model->create($data))
				{
					$this->session->set_flashdata('mess','Thêm dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không thêm được');
				}
				redirect(admin_url('slide'));
			}
		}
		$data['temp'] = 'admin/slide/add';
		$this->load->view('admin/index', $data);
	}

	function edit()
	{
		// Lấy id cần chỉnh sửa
		$id = $this->uri->rsegment(3);
		// Lấy tất cả thông tin của id đó
		$info = $this->slide_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('slide'));
		}
		$data['info'] = $info;

		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tiêu Đề','required');

			if($this->form_validation->run())
			{
				//Upload ảnh
				$upload_path = './upload/slide';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}
				
				$name = $this->input->post('name');
				$base_url = url_title($name,'-');

				$data = array(
					'slide_title' => $name,
					'url' => $base_url
					);
				if($image != ''){
					$data['slide_image'] = $image;
				}

				if($this->slide_model->update($id, $data))
				{
					$this->session->set_flashdata('mess','Cập nhật dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không cập nhật được');
				}
				redirect(admin_url('slide'));
			}
		}

		$data['temp'] = 'admin/slide/edit';
		$this->load->view('admin/index', $data);
	}

	function delete()
	{
		// Lấy thông tin id cần xóa
		$id = $this->uri->rsegment('3');
		$id = intval($id);
		$info = $this->slide_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('slide'));
		} else {
			$url = getcwd(). './upload/slide//' .$info->slide_image;
			unlink($url);
		}
		// Thực hiện xóa
		$this->slide_model->delete($id);
		$this->session->set_flashdata('mess', 'Xóa dữ liệu thành công');
		redirect(admin_url('slide'));
	}

	function del_all($id = array())
	{
		$result = $this->slide_model->del_where_id($id);
		if ($result == TRUE) {
			$this->session->set_flashdata('success' , 'Xóa thành công !');
		} else {
			$this->session->set_flashdata('error' , 'Xóa không thành công !');
		}
	}
}

?>