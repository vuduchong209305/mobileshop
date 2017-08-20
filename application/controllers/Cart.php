<?php 

Class Cart extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
	}

	// Thêm sp vào giỏ hàng
	function add()
	{
		$this->load->model('product_model');
		$id = $this->uri->rsegment(3);
		$product = $this->product_model->get_info($id);
		if(!$product) redirect(base_url('home/index'));

		$qty = 1;
		// Thông tin thêm vào giỏ hàng
		$data['id'] = $product->pro_id;
		$data['qty'] = $qty;
		$data['name'] = url_title($product->pro_title);
		$data['image'] = $product->pro_image;
		$data['price'] = $product->pro_price;
		$this->cart->insert($data);

		redirect(base_url('cart/index'));
	}

	// Hiển thị danh sách sp trong giỏ hàng
	function index()
	{
		// Thông tin giỏ hàng
		$carts = $this->cart->contents();

		// Tổng số sp có trong giỏ hàng
		$total_items = $this->cart->total_items();
		$this->data['carts'] = $carts;
		$this->data['total_items'] = $total_items;

		$this->data['temp'] = 'site/cart/index';
		$this->load->view('site/layout', $this->data);
	}

	// Cập nhật giỏ hàng
	function update()
	{
		$carts = $this->cart->contents();
		foreach($carts as $key=>$row)
		{
			$total_qty = $this->input->post('qty_'.$row['id']);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = $total_qty;
			$this->cart->update($data);
		}
		redirect(base_url('cart/index'));
	}

	// Xóa sp trong giỏ hàng
	function delete()
	{
		$id = intval($this->uri->rsegment(3));

		// Trường hợp xóa 1 sp nào đó trong cart
		if ($id > 0)
		{
			$carts = $this->cart->contents();
			foreach($carts as $key=>$row)
			{
				if($row['id'] == $id)
				{
					$data['rowid'] = $key;
					$data['qty'] = 0;
					$this->cart->update($data);
				}
			}
		} else {
			// Xóa toàn bộ giỏ hàng
			$this->cart->destroy();
		}
		redirect(base_url('cart/index'));
	}
}


?>