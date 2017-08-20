<?php 

class Order extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('order_model');
		$this->load->model('detailorder_model');
	}

	// Lấy thông tin của khách hàng
	function checkout()
	{
		// Thông tin giỏ hàng
		$carts = $this->cart->contents();
		$total_items = $this->cart->total_items();
		if($total_items <=0 )
		{
			redirect();
		}
		// Tổng số tiền cần thanh toán
		$total_amount = 0;
		foreach($carts as $row)
		{
			$total_amount = $total_amount + $row['subtotal'];
		}
		$this->data['total_amount'] = $total_amount;
		// Nếu thành viên đã đăng nhập thì lấy thông tin thành viên
		$user_id = 0;
		$user ='';
		if($this->session->userdata('user_id_login'))
		{
			$user_id = $this->session->userdata('user_id_login');
			$user = $this->user_model->get_info($user_id);
		}
		$this->data['user'] = $user;

		if($this->input->post())
		{
			$this->form_validation->set_rules ('email','Email','required');
			$this->form_validation->set_rules('fullname','Họ Tên','trim|required');
			$this->form_validation->set_rules('address','Địa Chỉ','trim|required');
			$this->form_validation->set_rules('phone','Số Điện Thoại','trim|required');
			$this->form_validation->set_rules('message','Tin Nhắn','trim');

			if($this->form_validation->run())
			{
				$data = array(
					'cus_id'      => $user_id, // id thành viên mua hàng
					'cus_email'   => $this->input->post('email'),
					'cus_name'    => $this->input->post('fullname'),
					'cus_address' => $this->input->post('address'),
					'cus_phone'   => $this->input->post('phone'),
					'cus_note'    => $this->input->post('message'),
					'total_price' => $total_amount,
					'active'      => 0 // trạng thái mặc địnhchưa thanh toán
				);
				// Thêm dữ liệu vào bảng Order
				$this->order_model->create($data);
				// Thêm vào bảng chi tiết đơn hàng
				$order_id = $this->db->insert_id(); // Lấy ra id của giao dịch vừa thêm
				foreach ($carts as $row)
				{
					$data = array(
						'order_id'  => $order_id,
						'pro_id'    => $row['id'],
						'pro_name'  => $row['name'],
						'quantity'  => $row['qty'],
						'pro_price' => $row['subtotal'],
						'active'    => '0'
					);
					$this->detailorder_model->create($data);
				}
				// Xóa toàn bộ giỏ hàng
				$this->cart->destroy();
				// Tạo ra nội dung thông báo
				$this->session->set_flashdata('mess', 'Chúc mừng bạn đã đặt hàng thành công');
				// Chuyển tới trang user
				redirect(base_url('home/index'));
			}
		}
		// Hiển thị ra view
		$this->data['temp'] = 'site/order/checkout';
		$this->load->view('site/layout', $this->data);
	}
}

 ?>