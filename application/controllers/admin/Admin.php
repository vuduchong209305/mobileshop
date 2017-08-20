<?php 

class Admin extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('upload_library');
	}

	function index()
	{
		// Lấy ra danh sách admin
		$input['order'] = array('a_id', 'ASC');
		$list = $this->admin_model->get_list($input);
		$data['list'] = $list;

		// Lấy nội dung thông báo của biến mess
		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/admin/index';
		$this->load->view('admin/index', $data);
	}

	function add()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('username','Tài Khoản','required|min_length[8]');
			$this->form_validation->set_rules('password','Mật Khẩu','required|min_length[8]');
			$this->form_validation->set_rules('fullname','Tên','required');
			$this->form_validation->set_rules('phone','Số Điện Thoại','required|trim');

			if($this->form_validation->run())
			{
				$upload_path = './upload/admin';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$data = array(
					'a_name' => $this->input->post('username'),
					'a_password' => $this->input->post('password'),
					'a_fullname' => $this->input->post('fullname'),
					'a_phone' => $this->input->post('phone'),
					'a_role' => $this->input->post('role'),
					'a_avatar' => $image
					);
				$permisions = $this->input->post('permissions');
				$data['permissions'] = json_encode($permisions);
				if($this->admin_model->create($data))
				{
					$this->session->set_flashdata('mess','Thêm dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không thêm được');
				}
				redirect(admin_url('admin/index'));
			}
		}
		$this->config->load('permissions', true);
		$config_permissions = $this->config->item('permissions');
		$this->data['config_permissions'] = $config_permissions;

		$this->data['temp'] = 'admin/admin/add';
		$this->load->view('admin/index', $this->data);
	}

	function edit()
	{
		// Lấy id của tài khoản cần chỉnh sửa
		$id = $this->uri->rsegment(3);
		// Lấy thông tin của tài khoản
		$info = $this->admin_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại Quản Trị Viên');
			redirect(admin_url('admin'));
		}
		$info->permissions = json_decode($info->permissions);
		$this->data['info'] = $info;

		if($this->input->post())
		{
			$this->form_validation->set_rules('username','Tài Khoản','required|min_length[8]');
			$password = $this->input->post('password');
			if($password)
			{
				$this->form_validation->set_rules('password','Mật Khẩu','required|min_length[8]');
			}
			$this->form_validation->set_rules('fullname','Tên','required');
			$this->form_validation->set_rules('phone','Số Điện Thoại','required|trim');
			if($this->form_validation->run())
			{
				$upload_path = './upload/admin';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$data = array(
					'a_name' => $this->input->post('username'),
					'a_fullname' => $this->input->post('fullname'),
					'a_phone' => $this->input->post('phone'),
					'a_role' => $this->input->post('role')
					);
				// Nếu thay đổi mật khẩu thì mới gắn dữ liệu
				if($password)
				{
					$data['a_password'] = $password;
				}

				if($image != ''){
					$data['a_avatar'] = $image;
				}
				$permisions = $this->input->post('permissions');
				$data['permissions'] = json_encode($permisions);

				if($this->admin_model->update($id, $data))
				{
					$this->session->set_flashdata('mess','Cập nhật dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không cập được');
				}
				redirect(admin_url('admin/index'));
			}
		}
		$this->config->load('permissions', true);
		$config_permissions = $this->config->item('permissions');
		$this->data['config_permissions'] = $config_permissions;

		$this->data['temp'] = 'admin/admin/edit';
		$this->load->view('admin/index', $this->data);
	}

	function delete()
	{
		// Lấy thông tin id cần xóa
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->admin_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại tài khoản này');
			redirect(admin_url('admin/index'));
		} else {
			$url = getcwd(). './upload/admin//' .$info->a_avatar;
			unlink($url);
		}
		// Thực hiện xóa
		$this->admin_model->delete($id);
		$this->session->set_flashdata('mess', 'Xóa dữ liệu thành công');
		redirect(admin_url('admin'));
	}
}

?>