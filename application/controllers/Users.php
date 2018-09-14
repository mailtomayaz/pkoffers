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
       // print_r($_POST);
/*        $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'Last name', 'required');
         $this->form_validation->set_rules('username', 'user name', 'required');
       //$this->form_validation->set_rules('username', 'user name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'email', 'email|required');
        $this->form_validation->set_rules('phone', 'phone', 'required');*/

         $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
      
    
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', $this->form_validation->error_array());
                /*print_r($_POST);
                die('tet');*/
           //  $this->session->set_flashdata('message', validation_errors());
           //print_r($this->form_validation->error_array());
          //  die('tes');
           // redirect('/admin/offers/create', 'refresh');
             redirect('/registor', 'refresh');
        }else{
            
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
                  $this->session->set_flashdata('message', 'Registor successfully! Please Login');
                redirect('/login', 'refresh');
            }
        }
         
    }
    

}
