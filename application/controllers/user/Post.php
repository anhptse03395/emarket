<?php
Class Post extends MY_controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('dangtin_model');
	}


	function index()

	{

		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('user_model');
		$user_id = $this->session->userdata('user_id');
		$input['where'] =  array('id' => $user_id );
		$info= $this->user_model->get_list($input);
		$this ->data['info']=$info;
		echo $info;
		

        //neu ma co du lieu post len thi kiem tra
		if($this->input->post())

		{
			$this->form_validation->set_rules('p_name', 'Tên', 'required|min_length[8]');
			$this->form_validation->set_rules('p_email', 'Email đăng nhập', 'required|min_length[8]');
			$this->form_validation->set_rules('p_phone', 'Số điện thoại', 'required|min_length[8]|numeric');
			$this->form_validation->set_rules('p_address', 'Địa chỉ', 'required|min_length[8]');
			$this->form_validation->set_rules('p_title', 'tieu de', 'required|min_length[8]');
			$this->form_validation->set_rules('p_content', 'noi dung', 'required|min_length[8]');

            //nhập liệu chính xác
			if($this->form_validation->run())
			{
                //them vao csdl
				$name     = $this->input->post('p_name');
				$email    = $this->input->post('p_email');
				$address = $this->input->post('p_address');
				$phone = $this->input->post('p_phone');
				$title = $this->input->post('p_title');
				$content =$this->input->post('p_content');

				$user_id = $this->session->userdata('user_id');


				$this->load->library('upload_library');
				$upload_path = './upload/product';
				$upload_data = $this->upload_library->upload($upload_path, 'image');  
				$image_link = '';
				if(isset($upload_data['file_name']))
				{
					$image_link = $upload_data['file_name'];
				}


				$image_list = array();
				$image_list = $this->upload_library->upload_file($upload_path, 'image_list');
				$image_list = json_encode($image_list);
				
				$data = array(
					'name'  =>  $name,
					'email' =>  $email,
					'image_link' => $image_link,
					'image_list' => $image_list,
					'address'=> $address,
					'phone' =>  $phone,
					'title' =>  $title,
					'content'=> $content,
					'user_id'=>	$user_id,
					);
				if($this->dangtin_model->create($data))
				{
                    //tạo ra nội dung thông báo
					$this->session->set_flashdata('message', 'Bài đăng thành công');
				}else{
					$this->session->set_flashdata('message', 'Không đăng bài được ');
				}
                //chuyen tới trang danh sách quản trị viên
				redirect(user_url('post'));
			}

			
		}

		$this->load->view('site/post/index',$this->data);


	}
}
?>