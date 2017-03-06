<?php  

Class Profile extends MY_controller{



    function index(){

     
            $this->data['temp'] = 'site/profile/profile/index';
            $this->load->view('site/profile/main', $this->data);

        }

        function listpost(){

     
            $this->data['temp'] = 'site/profile/listpost/index';
            $this->load->view('site/profile/main', $this->data);

        }


    }


    ?>