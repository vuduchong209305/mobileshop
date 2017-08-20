<?php 

class User extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->library('upload_library');
	}

	function check_email()
	{
		$email = $this->input->post('email');
		$where = array('user_email' => $email);
		if($this->user_model->check_exists($where))
		{
			$this->form_validation->set_message(__FUNCTION__,'Email Đã Tồn Tại');
			return false;
		}
		return true;
	}

	function register()
	{
		// nếu đã đăng nhập chuyển về trang chủ
		if($this->session->userdata('user_id_login')){
			redirect(base_url('user'));
		}

		$this->load->library('upload_library');
		if($this->input->post())
		{
			$this->form_validation->set_rules('email','Email','trim|required|valid_email|callback_check_email');
			$this->form_validation->set_rules('password','Mật Khẩu','trim|required|min_length[6]');
			$this->form_validation->set_rules('re-password','Nhập Lại Mật Khẩu','trim|required|matches[password]');
			$this->form_validation->set_rules('fullname','Họ Tên','trim|required');
			$this->form_validation->set_rules('address','Địa Chỉ','trim|required');
			$this->form_validation->set_rules('phone','Số Điện Thoại','trim|required');

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
					$this->session->set_flashdata('mess','Đăng ký thành công');
				} else {
					$this->session->set_flashdata('mess','Đăng ký thất bại');
				}
				redirect(base_url('user/register'));
			}
		}

		$this->data['temp'] = 'site/user/register';
		$this->load->view('site/layout', $this->data);
	}


	function check_email_login (){
		$email = $this->input->post('email');
		$where = array ('user_email' => $email);
		if ($this->user_model->check_exists($where)){
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Email không tồn tại');
		return false;
	}

	function check_password (){
		$password = $this->input->post('password');
		$where = array ('user_password' => $password);
		if ($this->user_model->check_exists($where)){
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Mật khẩu không chính xác');
		return false;
	}

	function login(){
		// nếu đã đăng nhập chuyển về trang chủ
		if($this->session->userdata('user_id_login')){
			redirect(base_url('user'));
		}

		if ($this->input->post()){
			$this->form_validation->set_rules ('email','Email đăng nhập','required|valid_email|callback_check_email_login');
			$this->form_validation->set_rules ('password','Mật khẩu','required|min_length[6]|callback_check_password');
			$this->form_validation->set_rules('login','login','callback_check_login');
			if ($this->form_validation->run()){
				// lấy thông tin thành viên
				$user = $this->_get_user_info();
				// gắn sesssion
				$this->session->set_userdata('user_id_login',$user->user_id);
				$this->session->set_flashdata('mess','Đăng nhập thành công');
				redirect ();
			}
		}
		// hiển thị ra view
		$this->data['temp'] = 'site/user/login';
		$this->load->view('site/layout',$this->data);	
	}

	function check_login (){
		$user = $this->_get_user_info();
		if ($user){
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Đăng nhập thất bại');
		return false;
	}


	// lấy ra thông tin thành viên
	private function _get_user_info(){
		$email = $this->input->post('email');
		$where = array('user_email'=> $email );	
		$password = $this->input->post('password');

		$where = array ('user_email' => $email,'user_password' => $password);
		$user = $this->user_model->get_info_rule($where);
		
		return $user;
	}

	function logout()
	{
		if($this->session->userdata('user_id_login'))
		{
			$this->session->unset_userdata('user_id_login');
			redirect();
		}
	}

	function index()
	{
		if(!$this->session->userdata('user_id_login'))
		{
			redirect();
		}
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);
		if(!$user)
		{
			redirect();
		}
		$this->data['user'] = $user;
		// hiển thị ra view
		$this->data['temp'] = 'site/user/index';
		$this->load->view('site/layout',$this->data);	
	}

	function edit()
	{
		if(!$this->session->userdata('user_id_login'))
		{
			redirect();
		}
		// Lấy thông tin thành viên
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);
		if(!$user)
		{
			redirect();
		}
		$this->data['user'] = $user;

		if($this->input->post())
		{
			$password = $this->input->post('password');
			if($password)
			{
				$this->form_validation->set_rules('password','Mật Khẩu','required|min_length[8]');
				$this->form_validation->set_rules('re_password','Nhập Lại Mật Khẩu','matches[password]');
			}
			$this->form_validation->set_rules('fullname','Họ Tên','trim|required');
			$this->form_validation->set_rules('address','Địa Chỉ','trim|required');
			$this->form_validation->set_rules('phone','Số Điện Thoại','trim|required');

			if($this->form_validation->run())
			{
				$upload_path = './upload/user';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}

				$data = array(
					'user_password' => $this->input->post('password'),
					'user_fullname' => $this->input->post('fullname'),
					'user_address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),

				);
				if($image != ''){
					$data['user_image'] = $image;
				}
				if($password)
				{
					$data['password'] = $password;
				}
				if($this->user_model->update($user_id, $data))
				{
					$this->session->set_flashdata('mess','Cập nhật thành công');
				} else {
					$this->session->set_flashdata('mess','Cập nhật thất bại');
				}
				redirect(base_url('user/index'));
			}
		}
		// hiển thị ra view
		$this->data['temp'] = 'site/user/edit';
		$this->load->view('site/layout',$this->data);	
	}
}

?>