<?php 

class MY_Controller extends CI_Controller {
	function __construct(){
		parent::__construct();

		$controller = $this->uri->segment(1);
		switch ($controller) {
			case 'admin':
			{
				// Xử lý các dữ liệu khi truy cập admin
				$this->_check_login();
				break;
			}
			default:
				// Xử lý dữ liệu trang ngoài

				// Load dữ liệu category
			$this->load->model('category_model');
			$input['where'] = array('parent_id' => 0);
			$parent_id = $this->category_model->get_list($input);
			foreach ($parent_id as $row)
			{
				$input['where'] = array('parent_id' => $row->cat_id);
				$input['order'] = array('sort_order', 'DESC');
				$subs = $this->category_model->get_list($input);
				$row->subs = $subs;
			}
			$this->data['parent_id'] = $parent_id;

				// Lấy ra danh sách các thương hiệu
			$company['where'] = array('type' => 1);
			$company['order'] = array('sort_order', 'DESC');
			$company = $this->category_model->get_list($company);
			$this->data['company'] = $company;

				// Load dữ liệu News
			$this->load->model('news_model');
			$news['order'] = array('news_id', 'DESC');
			$news['limit'] = array(5,0);
			$news = $this->news_model->get_list($news);
			$this->data['news'] = $news;

				// Load dữ liệu giỏ hàng
			$carts = $this->cart->contents();
			$this->data['carts'] = $carts;

			// Lấy ra tổng tiền cần thanh toán
			$total_amount = 0;
			foreach($carts as $row)
			{
				$total_amount = $total_amount + $row['subtotal'];
			}
			$this->data['total_amount'] = $total_amount;


			// Kiểm tra xem thành viên đã đăng nhập hay chưa
			$user_id_login = $this->session->userdata('user_id_login');
			$this->data['user_id_login'] = $user_id_login;
			// Nếu đã đăng nhập thì lấy thông tin thành viên
			if($user_id_login)
			{
				$this->load->model('user_model');
				$user_info = $this->user_model->get_info($user_id_login);
				$this->data['user_info'] = $user_info;
			}

			$this->load->library('cart');
			$this->data['total_items'] = $this->cart->total_items();
		}
	}

	private function _check_login()
	{
		$controller = $this->uri->rsegment(1);
		$login = $this->session->userdata('login');
		if(!$login && $controller != 'login')
		{
			redirect(admin_url('login'));
		}
		if($login && $controller == 'login')
		{
			redirect(admin_url('home'));
		}
		// elseif (!in_array($controller, array('login', 'home')))
		// {
		// 	$admin_id = $this->session->userdata('admin_id');
		// 	$admin_root = $this->config->item('root_admin');
		// 	if($admin_id != $admin_root){
		// 		// Kiểm tra quyền
		// 		$permissions_admin = $this->session->userdata('permissions');
		// 		$controller = $this->uri->rsegment(1);
		// 		$action = $this->uri->rsegment(2);
		// 		$check = true;
		// 		if(!isset($permissions_admin->{$controller}))
		// 		{
		// 			$check = false;
		// 		}
		// 		$permissions_actions = $permissions_admin->{$controller};
		// 		if(!in_array($action, $permissions_actions))
		// 		{
		// 			$check = false;
		// 		}
		// 		if(!$check){
		// 			$this->session->set_flashdata('mess','Bạn không có quyền truy cập trang này');
		// 			redirect(base_url('admin'));
		// 		}
		// 	}
		// }
	}
}

?>