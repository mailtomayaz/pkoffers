<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

    function __construct() {
        parent::__construct();
        log_message('debug', 'CI My Admin : Auth class loaded');
    }
    function index() {
        //echo 'te';
        $data['page'] = $this->config->item('ci_my_admin_template_dir_public') . "login_form";
     //   $data['module'] = 'auth';
        $this->load->view($this->_container, $data);
    }
}