<?php
Class Register extends MY_controller{


	function __construct()
	{


		parent::__construct();
		$this->load->model('user_model');
	}


	function check_email()
	{
		$email = $this->input->post('r_email');
		$where = array('email' => $email);
        //kiêm tra xem username đã tồn tại chưa
		if($this->user_model->check_exists($where))
		{
            //trả về thông báo lỗi
			$this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
			return false;
		}
		return true;
	}



	function sendmail($email)
	{


		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'anhptse03395@gmail.com',
			//'smtp_pass' => 'vuotxcgoyxxzhoqz',
			'smtp_pass' => 'vuotxcgoyxxzhoqz',
			//'smtp_pass' => 'change123!@#',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
			);



		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$message = 'ban da dang ki thanh cong';
		$this->load->library('email', $config);
		//	$this->email->initialize($config);
		$this->email->set_newline("\r\n");
	    	$this->email->from('anhptse03395@gmail.com'); // change it to yours
	    	$this->email->to($email);// change it to yours
	    	$this->email->subject('Day la thu dang ki tai khoan cua ban');
	    	$this->email->message($message);
	    	if($this->email->send())
	    	{
	    		echo 'Email sent.';
	    	}
	    	else
	    	{
	    		show_error($this->email->print_debugger());
	    	}

	    }



	    function index()

	    {

	    	$this->load->library('form_validation');
	    	$this->load->helper('form');


        //neu ma co du lieu post len thi kiem tra
	    	if($this->input->post())
	    	{
	    		$this->form_validation->set_rules('r_name', 'Tên', 'required|min_length[8]');
	    		$this->form_validation->set_rules('r_email', 'Email đăng nhập', 'required|callback_check_email');
	    		$this->form_validation->set_rules('r_phone', 'Số điện thoại', 'required|min_length[8]|numeric');
	    		$this->form_validation->set_rules('r_address', 'Địa chỉ', 'required|min_length[8]');		
	    		$this->form_validation->set_rules('r_password', 'Mật khẩu', 'required|min_length[6]');
	    		$this->form_validation->set_rules('r_repassword', 'Nhập lại mật khẩu', 'matches[r_password]');

            //nhập liệu chính xác
	    		if($this->form_validation->run())
	    		{
                //them vao csdl
	    			$name     = $this->input->post('r_name');
	    			$email    = $this->input->post('r_email');
	    			$phone     = $this->input->post('r_phone');
	    			$address = $this->input->post('r_address');
	    			$password = $this->input->post('r_password');




	    			$data = array(
	    				'name'     => $name,
	    				'email' => $email,
	    				'phone' => $phone,
	    				'address' => $address,
	    				'password' => md5($password)
	    				);
	    			if($this->user_model->create($data))
	    			{ 
	    					$this->sendmail($email);
                    //tạo ra nội dung thông báo
	    				$this->session->set_flashdata('message', 'Đăng kí thành viên thành công');
	    			}else{
	    				$this->session->set_flashdata('message', 'Không đăng kí được ');
	    			}
                //chuyen tới trang danh sách quản trị viên
	    			redirect(user_url('register'));
	    		}
	    	}
	    	$this->load->view('site/login/index');


	    }





	}

