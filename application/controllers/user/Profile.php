<?php  

Class Profile extends MY_controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        //$this->load->library('session');
    }

        function index(){

            $rsInfo = $this->user_model->getInfo($this->session->userdata('user_id'));
            if(!empty($rsInfo )){
                $data = array(
                    'id'=>$rsInfo['id'],
                    'name'=>$rsInfo['name'],
                    'email'=>$rsInfo['email'],

                );
            }else{
                $rsInfo['id']=$this->session->userdata('id');
                $rsInfo['name'] = $this->session->userdata('name');
                $rsInfo['email'] = $this->session->userdata('email');

            }


            $this->load->view('site/profile/index');

  }

  
}


 ?>