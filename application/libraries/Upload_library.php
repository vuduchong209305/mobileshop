<?php 

class Upload_library
{
	var $CI = '';
	function __construct()
	{
		$this->CI =& get_instance();
	}

	/* Upload file
	 * $upload_path : Đường dẫn lưu file
	 * $file_name : tên file input upload file
	 */
	function upload($upload_path = '', $file_name = '')
	{
		$config = $this->config($upload_path);
		$this->CI->load->library('upload', $config);
		if($this->CI->upload->do_upload($file_name))
		{
			$data = $this->CI->upload->data();
		} else {
			$data = $this->CI->upload->display_errors();
		}
		return $data;
	}

	function upload_multiple($upload_path = '', $file_name = '')
	{
		$config = $this->config($upload_path);

		//lưu biến môi trường khi thực hiện upload
		$file  = $_FILES['image_list'];
        $count = count($file['name']);//lấy tổng số file được upload
        $image_list = array(); // lưu tên các file ảnh upload thành công
        for($i=0; $i<=$count-1; $i++) {

				$_FILES['userfile']['name']     = $file['name'][$i];  //khai báo tên của file thứ i
				$_FILES['userfile']['type']     = $file['type'][$i]; //khai báo kiểu của file thứ i
				$_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i]; //khai báo đường dẫn tạm của file thứ i
				$_FILES['userfile']['error']    = $file['error'][$i]; //khai báo lỗi của file thứ i
				$_FILES['userfile']['size']     = $file['size'][$i]; //khai báo kích cỡ của file thứ i
				//load thư viện upload và cấu hình
				$this->CI->load->library('upload', $config);
				//thực hiện upload từng file
				if($this->CI->upload->do_upload())
				{
				//nếu upload thành công thì lưu toàn bộ dữ liệu
				$data = $this->CI->upload->data();
				//in cấu trúc dữ liệu của các file
				$image_list[] = $data['file_name'];
            }     
        }
          return $image_list;
      }

	// Cấu hình upload file
      function config($upload_path = '')
      {
      	$config['upload_path'] = $upload_path;
      	$config['allowed_types'] = 'jpg|jpeg|png|gif';
      	$config['max_size'] = '5000';
      	$config['max_width'] = '5000';
      	$config['max_height'] = '5000';

      	return $config;
      }
  }


  ?>