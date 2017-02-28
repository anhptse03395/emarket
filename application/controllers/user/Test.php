<?php
Class Test extends MY_controller{


	


	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		

	}


/*	$object = new StdClass;
	$object=$this->user_model->get_info_rule($data) ;
	$arraylist	= (array) $object ;


	var_dump( (array) $object )
*/
	function index()


	{		

		/*$object = new StdClass;


			
		$input = array();
		$input['select']= "user.id as id,user.name as name" ;
			$input['join'] = array('dangtin');

		$object= $this->user_model->join($input);
			$arraylist=		var_dump((array) $object );
			
			echo $arraylist;*/


			$input = array();
			$input['select']= "user.id as id,user.name as name" ;
			$input['join'] = array('dangtin');
			$list=$this->user_model->join($input);
		 	$data['list'] = $list;
		 foreach ($list as $row) {
		 	echo $row->id;
		 	echo $row->name;
		 }
		echo $this->db->last_query();
		
		$user = $this->session->userdata('userInfo');
				echo  $user ;







		}
	}