<?php
Class MY_Controller extends CI_Controller
{
    //bien gui du lieu sang ben view
    public $data = array();
    
    function __construct()
    {
        //ke thua tu CI_Controller
        parent::__construct();
        
        $controller = $this->uri->segment(1);
        switch ($controller)
        {
            case 'admin' :
                {
                    //xu ly cac du lieu khi truy cap vao trang admin
                    $this->load->helper('admin');
                    $this->admin_check_login();
                    break;
                }
                 case 'user' :
                {
                    //xu ly cac du lieu khi truy cap vao trang admin
                   /* $this->load->helper('user');
                    $this->user_check_login();
                    break;*/
                }
            default:
                {
                    //xu ly du lieu o trang ngoai
                }
            
        }
    }
    
    /*
     * Kiem tra trang thai dang nhap cua admin
     */
    private function admin_check_login()
    {
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);

        // controller la cai can truoc khi lam gi 
        
        $login = $this->session->userdata('login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if(!$login && $controller != 'login')
        {
            redirect(admin_url('login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if($login && $controller == 'login')

        {
        	
            redirect(admin_url('home'));
        }
    }
   /*   private function user_check_login()
    {
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);
        
        $login = $this->session->userdata('login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if(!$login && $controller != 'login')
        {
            redirect(admin_url('login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if($login && $controller == 'login')

        {
            
            redirect(admin_url('home'));
        }
    }*/

}


