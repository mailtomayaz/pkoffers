<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('offer_search_model');
        //$this->load->model('provinces_model');
        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('offers');
    }

    public function getCitiesByProvince() {
        // echo "You done it";         
        $id = $this->input->post('id');
        $data = $this->offer_search_model->getCitiesByProviceId($id);
        $html='';
        if($data){
            foreach($data as $option){
               $html.= '<option '.$option->id.'>'.$option->name.'</option>'; 
            }
        }
       echo $html;
    }

}
