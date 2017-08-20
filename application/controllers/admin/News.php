<?php 

class News extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('upload_library');
	}

	function index()
	{
		// Lấy ra danh sách tất cả sản phẩm
		$input['order'] = array('news_id', 'ASC');
		$list = $this->news_model->get_list($input);
		$data['list'] = $list;

		// Lấy nội dung thông báo của biến mess
		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/news/index';
		$this->load->view('admin/index', $data);
	}

	function add()
	{
		if($this->input->post()){

			$this->form_validation->set_rules('name','Tiêu Đề','required');

			if($this->form_validation->run())
			{
				$upload_path = './upload/news';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$name = $this->input->post('name');
				$base_url = str_slug($name);

				$data = array(
					'news_title' => $name,
					'base_url' => $base_url,
					'news_detail' => $this->input->post('detail'),
					'news_thumbnail' => $image
					);
				if($this->news_model->create($data))
				{
					$this->session->set_flashdata('mess','Thêm dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không thêm được');
				}
				redirect(admin_url('news'));
			}
		}

		$list = $this->news_model->get_list();
		$data['list'] = $list;
		$data['temp'] = 'admin/news/add';
		$this->load->view('admin/index', $data);
	}

	function edit()
	{
		// Lấy id cần chỉnh sửa
		$id = $this->uri->rsegment(3);
		// Lấy tất cả thông tin của id đó
		$info = $this->news_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('news'));
		}
		$data['info'] = $info;

		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tiêu Đề','required');

			if($this->form_validation->run())
			{
				//Upload ảnh
				$upload_path = './upload/news';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}
				
				$name = $this->input->post('name');
				$base_url = url_title($name,'-');

				$data = array(
					'news_title' => $name,
					'base_url' => $base_url
					);
				if($image != ''){
					$data['news_thumbnail'] = $image;
				}

				if($this->news_model->update($id, $data))
				{
					$this->session->set_flashdata('mess','Cập nhật dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không cập nhật được');
				}
				redirect(admin_url('news'));
			}
		}
		$data['temp'] = 'admin/news/edit';
		$this->load->view('admin/index', $data);
	}

	function delete()
	{
		// Lấy thông tin id cần xóa
		$id = $this->uri->rsegment('3');
		$id = intval($id);
		$info = $this->news_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('news'));
		} else {
			$url = getcwd(). './upload/news//' .$info->image;
			unlink($url);
		}
		// Thực hiện xóa
		$this->news_model->delete($id);
		$this->session->set_flashdata('mess', 'Xóa dữ liệu thành công');
		redirect(admin_url('news'));
	}

	function del_all($id = array())
	{
		$result = $this->news_model->del_where_id($id);
		if ($result == TRUE) {
			$this->session->set_flashdata('success' , 'Xóa thành công !');
		} else {
			$this->session->set_flashdata('error' , 'Xóa không thành công !');
		}
	}
}

?>