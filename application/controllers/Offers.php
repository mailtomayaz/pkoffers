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
//          $this->load->library(array('ion_auth', 'form_validation', 'session'));
//            if (!$this->ion_auth->logged_in()) {
//               redirect(base_url().'index.php/auth/index', 'refresh');
//          }
    }

    public function index() {
       // $this->load->view('offers');
    }
//get all cities of a province
    public function getCitiesByProvince() {
        // echo "You done it";         
        $id = $this->input->post('id');
        echo $id;
        $data = $this->offer_search_model->getCitiesByProviceId($id);
        $html='';
        if($data){
            foreach($data as $option){
               $html.= '<option '.$option->id.'>'.$option->name.'</option>'; 
            }
        }
       echo $html;
    }
   //get all offers 
    public function getOffers() {
        // echo "You done it";      
       $arrData='';
       $arrData['category_id']= $this->input->post('category_id');
       $arrData['city_id'] = $this->input->post('city_id');
       $arrData['province_id'] = $this->input->post('province_id');
       
        $data = $this->offer_search_model->getOffers($arrData);
        $html='';
        if($data){
            foreach($data as $option){
               $html.= '<div class="col-lg-4">';
               $html.= '<div class="offer_province_name">'.$option->province_id.'</div>';
                $html.= '<div class="offer_category_name">'.$option->category_id.'</div>';
                 $html.= '<div class="offer_desc">'.$option->description.'</div>';
                  $html.= '<div class="offer_address">'.$option->address.'</div>';
                   $html.= '<div class="offer_phone">'.$option->phone.'</div>';
                   $html.= '<div class="offer_img">'.$option->phone.'</div>';
                   $html.= '<div class="offer_date_created">'.$option->date_created.'</div>';
                   //$html.= '<div class="offer_date_expire">'.$option->date_created.'</div>';

                 $html.= '</div>';
            }
        }else{
             $html.= '<div class="col-lg-4">';
              $html.= 'No offer found';
              $html.= '</div>';
             
        }
       echo $html;
    } 
    

}
