<?php 

class Product extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}


	// Hiển thị danh sách sản phẩm theo Category
	function category()
	{
		// Lấy ID của Category
		$id = intval($this->uri->rsegment(3));
		// Lấy ra thông tin của Category
		$this->load->model('category_model');
		$category = $this->category_model->get_info($id);
		if(!$category)
		{
			redirect(base_url('home/index'));
		}
		$this->data['category'] = $category;
		$input['where'] = array('cat_id' => $id);

		$total_rows = $this->product_model->get_total($input);
		$this->data['total_rows'] = $total_rows;

		// Lấy danh sách sản phẩm
		$input['order'] = array('pro_price', 'DESC');
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		// Hiển thị ra view
		$this->data['temp'] = 'site/product/category';
		$this->load->view('site/layout', $this->data);
	}

	function view()
	{
		// Lấy id của sp muốn xem
		$id = $this->uri->rsegment(3);
		$product = $this->product_model->get_info($id);
		if(!$product) redirect();
		$this->data['product'] = $product;

		// Cập nhật lại lượt xem sp
		$data['pro_view'] = $product->pro_view + 1;
		$this->product_model->update($product->pro_id, $data);

		// Lấy thông tin của danh mục sp
		$category = $this->category_model->get_info($product->cat_id);

		// Hiển thị ra view
		$this->data['temp'] = 'site/product/view';
		$this->load->view('site/layout', $this->data);
	}

	// Tìm kiếm theo tên sản phẩm
	function search()
	{
		$key = $this->input->get('keyword');
		$this->data['key'] = trim($key);

		$input['like'] = array('pro_title', $key);
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'site/product/search';
		$this->load->view('site/layout', $this->data);
	}

	// Tìm kiếm theo giá
	function search_price()
	{
		$price_from = intval($this->input->get('price_from'));
		$price_to   = intval($this->input->get('price_to'));
		$this->data['price_from'] = $price_from;
		$this->data['price_to']   = $price_to;
		// Lọc theo giá
		$input['where'] = array('pro_price >=' => $price_from, 'pro_price <=' => $price_to);
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'site/product/search_price';
		$this->load->view('site/layout', $this->data);
	}

	function get_search()
	{
		$key = $this->input->post('textnhapvao');
		$datasearch = trim($key);
		if(!empty($datasearch))
		{
			$input['like'] = array('pro_title', $key);
    		$data['pro'] = $this->product_model->get_list($input);
    		$this->load->view('site/product/ajax_search',$data);
		}
	}

	function index()
	{
		$total_rows = $this->product_model->get_total();
		$this->data['total_rows'] = $total_rows;

		$config['total_rows'] = $total_rows;
		$config['base_url'] = base_url('product/index');
		$config['per_page'] = 20;
		$config['uri_segment'] = 4;
		$config['next_link'] = 'Sau';
		$config['prev_link'] = 'Trước';
		$this->pagination->initialize($config);

		$segment = intval($this->uri->segment(4));
		$input['limit'] = array($config['per_page'], $segment);

		$input['order'] = array('pro_price', 'ASC');
		$list = $this->product_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'site/product/index';
		$this->load->view('site/layout', $this->data);
	}
}
?>