<?php
Class Listproduct extends MY_Controller
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

    function removeURL($strTitle)
    {

       $strTitle=trim($strTitle);
        $strTitle= preg_replace("/ {2,}/", " ", $strTitle);
       return $strTitle;
   }

   function index()
   {
        //lay tong so luong ta ca cac san pham trong websit
    $total_rows = $this->product_model->get_total();
    $this->data['total_rows'] = $total_rows;

        //load ra thu vien phan trang
    $this->load->library('pagination');
    $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = user_url('listproduct/index'); //link hien thi ra danh sach san pham
        $config['per_page']   = 5;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        $id = intval($id);
        $input['where'] = array();
        if($id > 0)
        {
            $input['where']['id'] = $id;
        }
        $name = $this->input->post('name');
        if($name)
        {
            $input['like'] = array('product_name', $name);
        }
        $catalog_id = $this->input->get('catalog');
        $catalog_id = intval($catalog_id);
        if($catalog_id > 0)
        {
            $input['where']['catalog_id'] = $catalog_id;
        }
        
        //lay danh sach san pha
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;

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
        $this->data['catalogs'] = $catalogs;
        
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $this->load->view('site/listproduct/index',$this->data);

        
    }

function search()
    {
         $input = array();
        $this->load->library('form_validation');
        $this->load->helper('form');
        //neu co gui form tim kiem
        if ($this->input->post()) {
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('catalog');
            $input['where'] = array();
            
            $this->session->set_userdata('id', $this->input->post('id'));
            if ($this->session->userdata('id')) {
                $input['where']['id'] = $this->session->userdata('id');
               

            }
            $name= $this->input->post('name');

            $this->session->set_userdata('name',$this->removeURL($name));
            if ($this->session->userdata('name')) {
                $input['like'] = array('product_name', $this->session->userdata('name'));
                   $product= $this->product_model->get_list($input);
                   foreach ($product as $row) {
                          $data['impression'] = $row->impression + 1;
                        $this->product_model->update($row->id,$data);    
                   }

            }
            $this->session->set_userdata('catalog', $this->input->post('catalog'));
            if ($this->session->userdata('catalog')) {
                $input['where']['catalog_id'] = $this->session->userdata('catalog');
                 $product= $this->product_model->get_list($input);
                    foreach ($product as $row) {
                          $data['impression'] = $row->impression + 1;
                        $this->product_model->update($row->id,$data);    
                   }

            }
        }
        // cu tim theo session da gui trc do
        if (($this->session->userdata('id') || $this->session->userdata('name') || $this->session->userdata('catalog'))) {
            $input['where'] = array();
            if ($this->session->userdata('id')) {
                $input['where']['id'] = $this->session->userdata('id');

            }
                $name=$this->session->userdata('name');
            if ($this->session->userdata('name')) {
                $input['like'] = array('product_name', $this->removeURL($name));
                  

            }
            if ($this->session->userdata('catalog')) {
                $input['where']['catalog_id'] = $this->session->userdata('catalog');
            }
        }


////////////////////////////////
       $total_rows = $this->product_model->get_total($input);
        // thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;
        // neu ko search thi de link phan trang nhu binh thuong
        // if(!isset($id) || !isset($name) || !isset($catalog_id) )
        //{
        $config['base_url'] = user_url('listproduct/search'); // link hien thi du lieu
        // }
        $config['per_page'] = 5;
        $config['uri_segment'] = 4;
       // $config['use_page_numbers'] = TRUE;
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);

        $segment = intval($this->uri->segment(4));

        $input['limit'] = array($config['per_page'], $segment);

        $this->data['list'] = $this->product_model->get_list_imp($input);

        // load filter list
        $this->load->model('catalog_model');
        // dat la input_catalog de tranh bi trung voi input cua product
        $input_catalog['where'] = array('parent_id' => 0);
        $catalogs = $this->catalog_model->get_list($input_catalog);
        foreach ($catalogs as $row) {
            $input_catalog['where'] = array('parent_id' => $row->id);
            $subs = $this->catalog_model->get_list($input_catalog);
            $row->subs = $subs;
        }
        $this->data['catalogs'] = $catalogs;
        // gan thong bao loi de truyen vao view
        $this->data['message'] = $this->session->flashdata('message');
      
       $this->load->view('site/listproduct/index',$this->data);
    }


    function product_detail()
    {
        //lay id san pham muon xem
        $id = $this->uri->rsegment(3);

        $product = $this->product_model->get_info($id);
        if(!$product) redirect();
        $this->data['product'] = $product;


        //lấy danh sách ảnh sản phẩm kèm theo
        $image_list = @json_decode($product->image_list);
        $this->data['image_list'] = $image_list;

        //lay thong tin cua danh mục san pham
 /*   $catalog = $this->catalog_model->get_info($product->catalog_id);
 $this->data['catalog'] = $catalog;*/

        //hiển thị ra view
 $this->load->view('site/product_detail/index',$this->data);

}


}

