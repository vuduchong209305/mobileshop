<?php 

class Home extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('slide_model');
		$input['order'] = array('id', 'ASC');
		$slide = $this->slide_model->get_list($input);
		$this->data['slide'] = $slide;

		$this->load->model('product_model');
		$input['order'] = array('pro_view', 'DESC');
		$pro_view = $this->product_model->get_list($input);
		$this->data['pro_view'] = $pro_view;

		$input['order'] = array('pro_sell', 'DESC');
		$pro_sell = $this->product_model->get_list($input);
		$this->data['pro_sell'] = $pro_sell;

		$input['order'] = array('pro_id', 'DESC');
		$pro_new = $this->product_model->get_list($input);
		$this->data['pro_new'] = $pro_new;

		$input['order'] = array('pro_price', 'ASC');
		$pro_price = $this->product_model->get_list($input);
		$this->data['pro_price'] = $pro_price;

		$input['where'] = array('hot' => 1);
		$pro_hot = $this->product_model->get_list($input);
		$this->data['pro_hot'] = $pro_hot;

		// Lấy nội dung thông báo của biến mess
		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}
}

?>