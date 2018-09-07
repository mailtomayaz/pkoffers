<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('offer_search_model');
        //$this->load->model('provinces_model');
        // $this->load->helper('url');
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
          $this->load->library(array('ion_auth', 'form_validation', 'session'));
//            if (!$this->ion_auth->logged_in()) {
//               redirect(base_url().'index.php/auth/index', 'refresh');
//          }
    }

    public function index() {
        $this->load->view('offers');
    }
//get all cities of a province
    public function add(){
          if ($this->input->post('username')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            //$group_id = 2;//register as a member group

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'username' => $this->input->post('username'),
                'phone' => $this->input->post('phone'),
            );

            $user = $this->ion_auth->register($email, $password, $email, $additional_data);

            if (!$user) {
                $errors = $this->ion_auth->errors();
                echo $errors;
                die('done');
            } else {
                redirect('index.php/login', 'refresh');
            }
        }
    }
    

}
