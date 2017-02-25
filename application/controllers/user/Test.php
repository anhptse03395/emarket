<?php
Class Test extends MY_controller{


	


	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}


	function index()


	{		
			$object = new StdClass;

			$data  = array('email' => 'fsaophaixoanu@gmail.com' );


				$object=$this->user_model->get_info_rule($data) ;
					$arraylist	= (array) $object ;
					$id= 	$arraylist['id'];
					echo $id;

					$a= rand(100000,999999);
					echo $a;
					
			
			


	}
}