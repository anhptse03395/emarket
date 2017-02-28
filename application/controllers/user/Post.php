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



				
				$object = new StdClass;
				$object=$this->user_model->get_info_rule($data) ;
				$arraylist	= (array) $object ;
				$id=	$arraylist['id'];


				$data = array(
					'name'  =>  $name,
					'email' =>  $email,
					'address'=> $address,
					'phone' =>  $phone,
					'title' =>  $title,
					'content'=> $content,
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

		$this->load->view('site/post/index');


	}
}
?>