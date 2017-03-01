<?php
Class Test2 extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('product_model');
    }
    
    /*
     * Hien thi danh sach san pham
     */
    function index()
    {

       

       
        //lay danh sach danh muc san pham
        $this->load->model('catalog_model');
        $input = array();
        $input['where'] = array('parent_id' => 0);
        $catalogs = $this->catalog_model->get_list($input);
        foreach ($catalogs as $row)
        {
            $input['where'] = array('parent_id' => $row->id);

            $subs = $this->catalog_model->get_list($input);
            $row->subs = $subs;
        }

        pre($catalogs);
  
      
    }


    function ad(){

            $rsInfo = $this->user_model->getInfo($this->session->userdata('user_id'));
            if(!empty($rsInfo )){
                $data = array(
                    'id'=>$rsInfo['id'],
                    'name'=>$rsInfo['name'],
                    'email'=>$rsInfo['email'],

                );
            }else{
                $this->session->unset_userdata('id');
               $name = $this->session->userdata('name');
               $email = $this->session->userdata('email');

            }

    }
    
    }



