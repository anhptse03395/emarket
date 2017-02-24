<?php
Class Test extends MY_controller{


	function __construct()
	{


		parent::__construct();
		
	}
	function index()
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
	    	$this->email->to('anhptse03395@gmail.com');// change it to yours
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






	}
