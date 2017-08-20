<?php

class User extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('upload_library');
	}

	public function index(){
		$input['order'] = array('user_id', 'ASC');
		$list = $this->user_model->get_list($input);
		$data['list'] = $list;

		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/user/index';
		$this->load->view('admin/index', $data);
	}

	public function add(){
		if($this->input->post())
		{
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Mật Khẩu','trim|required');
			$this->form_validation->set_rules('fullname','Fullname','trim|required');
			$this->form_validation->set_rules('address','Địa Chỉ','trim|required');
			$this->form_validation->set_rules('phone','Phone','trim|required|');

			if($this->form_validation->run())
			{
				$upload_path = './upload/user';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$data = array(
					'user_email' => $this->input->post('email'),
					'user_password' => $this->input->post('password'),
					'user_fullname' => $this->input->post('fullname'),
					'user_address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),
					'sex' => $this->input->post('gioitinh'),
					'birthday' => $this->input->post('birthday'),
					'user_image' => $image
				);
				if($this->user_model->create($data))
				{
					$this->session->set_flashdata('mess','Thêm dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không thêm được');
				}
				redirect(admin_url('user/index'));
			}
		}
		$data['temp'] = 'admin/user/add';
		$this->load->view('admin/index', $data);
	}


	public function edit()
	{
		// Lấy id của User cần sửa
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		// Lấy thông tin của User
		$info = $this->user_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại Quản Trị Viên');
			redirect(admin_url('admin'));
		}
		$data['info'] = $info;

		if($this->input->post())
		{
			$password = $this->input->post('password');
			if($password)
			{
				$this->form_validation->set_rules('password','Mật Khẩu','required|min_length[8]');
			}

			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('fullname','Fullname','trim|required');
			$this->form_validation->set_rules('address','Địa Chỉ','trim|required');
			$this->form_validation->set_rules('phone','Phone','trim|required');

			if($this->form_validation->run())
			{
				$upload_path = './upload/user';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$data = array(
					'user_email' => $this->input->post('email'),
					'user_fullname' => $this->input->post('fullname'),
					'user_address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),
					'sex' => $this->input->post('gioitinh'),
					'birthday' => $this->input->post('birthday')
				);
				if($image != ''){
					$data['user_image'] = $image;
				}
				if($password)
				{
					$data['user_password'] = $password;
				}
				if($this->user_model->update($id, $data))
				{
					$this->session->set_flashdata('mess','Cập nhật dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không cập nhật được');
				}
				redirect(admin_url('user/index'));
			}
		}
		$data['temp'] = 'admin/user/edit';
		$this->load->view('admin/index', $data);
	}

	function delete()
	{
		// Lấy thông tin id cần xóa
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->user_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại tài khoản này');
			redirect(admin_url('user/index'));
		} else {
			$url = getcwd(). './upload/user//' .$info->user_image;
			unlink($url);
		}
		// Thực hiện xóa
		$this->user_model->delete($id);
		$this->session->set_flashdata('mess', 'Xóa dữ liệu thành công');
		redirect(admin_url('user/index'));
	}

	function delete_all()
	{
		foreach ($_POST['username'] as $username){
			$this->user_model->delete_all($username);
		}
		return redirect(admin('user/list'));
	}
}

?>
