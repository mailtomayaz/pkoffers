<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin extends Admin_Controller{

     function __construct() {
        parent::__construct();
          $this->load->library(array('ion_auth'));

    if (!$this->ion_auth->logged_in()) {
        redirect('/auth', 'refresh');
    }
        log_message('debug', 'CI My Admin : Auth class loaded');
    }
    function index() {
        //echo 'te';
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "dashboard";
     //   $data['module'] = 'auth';
        $this->load->view($this->_container, $data);
    }

}
