<?php 

class Product extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->library('upload_library');
	}

	function index()
	{
		$total_rows = $this->product_model->get_total();
		$data['total_rows'] = $total_rows;

		// // Lấy danh sách sản phẩm
		$list = $this->product_model->get_list();
		$data['list'] = $list;

		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/product/index';
		$this->load->view('admin/index', $data);
	}

	function add()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tiêu Đề','required|trim');
			$this->form_validation->set_rules('catalog','Hãng','required');
			$this->form_validation->set_rules('price','Giá','required');

			if($this->form_validation->run())
			{
				$upload_path = './upload/product';
				$data        = $this->upload_library->upload($upload_path, 'image');
				$image       = '';
				if(isset($data['file_name'])){
					$image  = $data['file_name'];
				}
				$image_list = array();
				$image_list = $this->upload_library->upload_multiple($upload_path, 'image_list');
				$name       = $this->input->post('name');
				$base_url   = url_title($name,'-', TRUE);
				$price      = $this->input->post('price');
				$price      = str_replace(',', '', $price);
				$saleoff    = $this->input->post('saleoff');
				$saleoff    = str_replace(',', '', $saleoff);

				$data = array(
					'pro_title'      => $name,
					'base_url'       => $base_url,
					'cat_id'         => $this->input->post('catalog'),
					'sort_order'     => intval($this->input->post('sort_order')),
					'pro_price'      => $price,
					'pro_sale'       => $saleoff,
					'pro_descript'   => $this->input->post('description'),
					'pro_detail'     => $this->input->post('detail'),
					'pro_image'      => $image,
					'pro_image_list' => json_encode($image_list),
					'hot'            => $this->input->post('hot')
					);
				if($this->product_model->create($data))
				{
					$this->session->set_flashdata('mess','Thêm dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không thêm được');
				}
				redirect(admin_url('product/index'));
			}
		}

		// Lấy danh sách danh mục sản phẩm
		$this->load->model('category_model');
		$input['order'] = array('cat_id', 'ASC');
		$input['where'] = array('parent_id' => 0);
		$category = $this->category_model->get_list($input);
		foreach ($category as $row)
		{
			$input['where'] = array('parent_id' => $row->cat_id);
			$subs = $this->category_model->get_list($input);
			$row->subs = $subs;
		}
		$data['category'] = $category;

		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/product/add';
		$this->load->view('admin/index', $data);
	}

	function edit()
	{
		$id = $this->uri->rsegment(3);
		$info = $this->product_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('product/index'));
		}
		$data['info'] = $info;

		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tiêu Đề','required|trim');
			$this->form_validation->set_rules('catalog','Thể Loại','required');
			$this->form_validation->set_rules('price','Giá','required');

			if($this->form_validation->run())
			{
				$upload_path = './upload/product';
				$data = $this->upload_library->upload($upload_path, 'image');
				$image = '';
				if(isset($data['file_name'])){
					$image = $data['file_name'];
				}
				$image_list = array();
				$image_list = $this->upload_library->upload_multiple($upload_path, 'image_list');
				$image_list_json = json_encode($image_list);

				$name = $this->input->post('name');
				$base_url = url_title($name,'-', TRUE);
				$price = $this->input->post('price');
				$price = str_replace(',', '', $price);
				$saleoff = $this->input->post('saleoff');
				$saleoff = str_replace(',', '', $saleoff);

				$data = array(
					'pro_title' => $name,
					'base_url' => $base_url,
					'cat_id' => $this->input->post('catalog'),
					'sort_order' => intval($this->input->post('sort_order')),
					'pro_price' => $price,
					'pro_sale' => $saleoff,
					'pro_descript' => $this->input->post('description'),
					'pro_detail' => $this->input->post('detail'),
					'hot' => $this->input->post('hot')
				);

				if($image != ''){
					$data['pro_image'] = $image;
				}
				if(!empty($image_list)){

					$data['pro_image_list'] = $image_list_json;
				}

				if($this->product_model->update($id,$data))
				{
					$this->session->set_flashdata('mess','Cập nhật dữ liệu thành công');
				} else {
					$this->session->set_flashdata('mess','Không cập nhật được');
				}
				redirect(admin_url('product/index'));
			}
		}

		// Lấy danh sách danh mục sản phẩm
		$this->load->model('category_model');
		$input['order'] = array('cat_id', 'ASC');
		$input['where'] = array('parent_id' => 0);
		$category = $this->category_model->get_list($input);
		foreach ($category as $row)
		{
			$input['where'] = array('parent_id' => $row->cat_id);
			$subs = $this->category_model->get_list($input);
			$row->subs = $subs;
		}
		$data['category'] = $category;

		$mess = $this->session->flashdata('mess');
		$data['mess'] = $mess;

		$data['temp'] = 'admin/product/edit';
		$this->load->view('admin/index', $data);
	}

	function delete()
	{
		// Lấy thông tin id cần xóa
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$this->_del($id);
		$this->session->set_flashdata('mess', 'Xóa dữ liệu thành công');
		redirect(admin_url('product/index'));
	}

	function del_all()
	{
		$ids = $this->input->post('ids');
		foreach ($ids as $id)
		{
			$this->_del($id);
		}
	}

	// Xóa sản phẩm
	private function _del($id)
	{
		$info = $this->product_model->get_info($id);
		// Kiểm tra xem sp đó có tồn tại ko
		if(!$info)
		{
			$this->session->set_flashdata('mess', 'Không tồn tại sản phẩm này');
			redirect(admin_url('product/index'));
		}
		// Thực hiện xóa
		$this->product_model->delete($id);
		// Xóa ảnh của sản phẩm
		$image = './upload/product/'. $info->pro_image;
		if(file_exists($image)){
			unlink($image);
		}
		// Xóa các ảnh kèm theo
		$image_list = json_decode($info->pro_image_list);
		if(is_array($image_list)){
			foreach($image_list as $img){
				$image = './upload/product/'. $img;
				if(file_exists($image)){
					unlink($image);
				}
			}
		}
	}

	function view()
	{
		$id = $this->uri->segment(4);
		$input = array();
		
		//lấy thông tin transaction
		$this->load->model('product_model');	
		$product = $this->product_model->get_info($id);
		if(!$product) redirect();
		$data['product'] = $product;
		// load ra view
		$this->load->view('admin/product/view',$data);
	}
}

?>