<?php 

class Category extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
		$this->load->library('upload_library');
	}

	function index()
	{
		// Lấy ra danh sách tất cả sản phẩm
		$input['order'] = array('parent_id', 'ASC');
		$list = $this->category_model->get_list($input);
		$data['list'] = $list;

		// Lấy nội dung thông báo của biến mess
		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/category/index';
		$this->load->view('admin/index', $data);
	}

	function add()
	{
		if($this->input->post()){

			$this->form_validation->set_rules('name','Tiêu Đề','required');

			if($this->form_validation->run())
			{
				$upload_path = './upload/category';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$name = $this->input->post('name');
				$base_url = str_slug($name);

				$data = array(
					'name' => $name,
					'parent_id' => $this->input->post('category'),
					'base_url' => $base_url,
					'image' => $image,
					'description' => $this->input->post('description'),
					'sort_order' => $this->input->post('sort_order')
					);
				if($this->category_model->create($data))
				{
					$this->session->set_flashdata('mess','Thêm dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không thêm được');
				}
				redirect(admin_url('category'));
			}
		}

		//Lấy ra danh sách danh mục cha
		$input['order'] = array('cat_id', 'ASC');
		$input['where'] = array('parent_id' => 0);
		$list = $this->category_model->get_list($input);
		$data['list'] = $list;
		$data['temp'] = 'admin/category/add';
		$this->load->view('admin/index', $data);
	}

	function edit()
	{
		// Lấy id cần chỉnh sửa
		$id = $this->uri->rsegment(3);
		// Lấy tất cả thông tin của id đó
		$info = $this->category_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('category'));
		}
		$data['info'] = $info;

		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tiêu Đề','required');

			if($this->form_validation->run())
			{
				//Upload ảnh
				$upload_path = './upload/category';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}
				
				$name = $this->input->post('name');
				$base_url = str_slug($name);

				$data = array(
					'name' => $name,
					'parent_id' => $this->input->post('category'),
					'base_url' => $base_url,
					'description' => $this->input->post('description'),
					'sort_order' => $this->input->post('sort_order')
					);
				if($image != ''){
					$data['image'] = $image;
				}

				if($this->category_model->update($id, $data))
				{
					$this->session->set_flashdata('mess','Cập nhật dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không cập nhật được');
				}
				redirect(admin_url('category'));
			}
		}

		// Lấy ra danh sách danh mục cha
		$input['order'] = array('id', 'ASC');
		$input['where'] = array('parent_id' => 0);
		$list = $this->category_model->get_list();
		$data['list'] = $list;
		$data['temp'] = 'admin/category/edit';
		$this->load->view('admin/index', $data);
	}

	function delete()
	{
		// Lấy thông tin id cần xóa
		$id = $this->uri->rsegment('3');
		$id = intval($id);
		$info = $this->category_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('category'));
		} else {
			$url = getcwd(). './upload/category//' .$info->image;
			unlink($url);
		}
		// Thực hiện xóa
		$this->category_model->delete($id);
		$this->session->set_flashdata('mess', 'Xóa dữ liệu thành công');
		redirect(admin_url('category'));
	}

	function del_all($id = array())
	{
		$result = $this->category_model->del_where_id($id);
		if ($result == TRUE) {
			$this->session->set_flashdata('success' , 'Xóa thành công !');
		} else {
			$this->session->set_flashdata('error' , 'Xóa không thành công !');
		}
	}
}

?>