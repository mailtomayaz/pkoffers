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
        $this->load->library('pagination');
//          $this->load->library(array('ion_auth', 'form_validation', 'session'));
//            if (!$this->ion_auth->logged_in()) {
//               redirect(base_url().'index.php/auth/index', 'refresh');
//          }
        //echo base_url();
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
  $arrData['page_no'] = $this->input->post('page_no');
  $arrData['dateFrom'] = $this->input->post('dateFrom');
  $arrData['dateTo'] = $this->input->post('dateTo');
  $config = array();
  $config["base_url"] = "#";
  $config["total_rows"] = count($this->offer_search_model->getAllOffers($arrData));
  $config["per_page"] = 2;
  $config["uri_segment"] = 3;
  $config["use_page_numbers"] = TRUE;
  $config["full_tag_open"] = '<ul class="pagination">';
  $config["full_tag_close"] = '</ul>';
  $config["first_tag_open"] = '<li>';
  $config["first_tag_close"] = '</li>';
  $config["last_tag_open"] = '<li>';
  $config["last_tag_close"] = '</li>';
  $config['next_link'] = '&gt;';
  $config["next_tag_open"] = '<li>';
  $config["next_tag_close"] = '</li>';
  $config["prev_link"] = "&lt;";
  $config["prev_tag_open"] = "<li>";
  $config["prev_tag_close"] = "</li>";
  $config["cur_tag_open"] = "<li class='active'><a href='#'>";
  $config["cur_tag_close"] = "</a></li>";
  $config["num_tag_open"] = "<li>";
  $config["num_tag_close"] = "</li>";
  $config["num_links"] = 1;
  $this->pagination->initialize($config);
  $page = $arrData['page_no'];//$this->uri->segment(3);
  $start = ($page - 1) * $config["per_page"];

  $output = array(
   'pagination_link'  => $this->pagination->create_links(),
   'offers'   => $this->offer_search_model->getOffers($config["per_page"], $start,$arrData)
  );

echo json_encode($output);
    die();
       
       // $data = $this->offer_search_model->getOffers($config["per_page"],$arrData);
        //print_r($data);
        
      //  $total_row = count($data);//$this->offer_search_model->record_count();
        //echo $total_row;
       
     /* $config['num_links'] = $total_row;
      $config["total_rows"] = $total_row;
      $this->pagination->initialize($config);
      $str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
$links = explode('&nbsp;',$str_links );
if($this->uri->segment(3)){
$page = ($this->uri->segment(3)) ;
}
else{
$page = 1;
}*/

/*        $html='';
        if($data){
            foreach($data as $option){
              //echo $option->image;
               $html.= '<div class="col-lg-4 box-series">';

$html.='<div class="product-image"><img class="img-responsive" src="'.base_url().'uploads/'.$option->image.'" /></div>';
               $html.=' <h2>'.$option->name.'</h2>';
               $html.= '<div class="offer_province_name">'.$option->province_id.'</div>';
               $html.= '<div class="offer_category_name">'.$option->category_id.'</div>';
               $html.= '<div class="offer_desc">'.$option->description.'</div>';
                 // $html.= '<div class="offer_address">'.$option->address.'</div>';
                 //  $html.= '<div class="offer_phone">'.$option->phone.'</div>';
                 //$html.= '<div class="offer_img">'.$option->phone.'</div>';
                 // $html.= '<div class="offer_date_created">'.$option->date_created.'</div>';
                 //$html.= '<div class="offer_date_expire">'.$option->date_created.'</div>';
                $html.= '<a href="'.base_url().'offers/showoffer/'.$option->id.'" class="offer_link">View Details</a>';
                $html.= '</div>';
            }
            $html.='</div></div>';
            foreach($links as $link){
               $html.=  "<li>". $link."</li>";
            }
        }else{
             $html.= '<div class="col-lg-4">';
              $html.= 'No offer found';
              $html.= '</div>';
             
        }
       echo $html;*/
    } 
    public function getOffersByDate() {
        // echo "You done it"; 
     /* echo "<pre>";
        print_r($this->input->post());  
      echo "</pre>";*/
     // die('test2');
      $arrData='';
      $arrData['category_id']= $this->input->post('category_id');
      $arrData['city_id'] = $this->input->post('city_id');
      $arrData['province_id'] = $this->input->post('province_id');
      $arrData['page_no'] = $this->input->post('page_no');
      $arrData['dateFrom'] = $this->input->post('dateFrom');
      $arrData['dateTo'] = $this->input->post('dateTo');

 $config = array();
  $config["base_url"] = "#";
  $config["total_rows"] = count($this->offer_search_model->getAllOffersWithDate($arrData));
  $config["per_page"] = 5;
  $config["uri_segment"] = 3;
  $config["use_page_numbers"] = TRUE;
  $config["full_tag_open"] = '<ul class="pagination">';
  $config["full_tag_close"] = '</ul>';
  $config["first_tag_open"] = '<li>';
  $config["first_tag_close"] = '</li>';
  $config["last_tag_open"] = '<li>';
  $config["last_tag_close"] = '</li>';
  $config['next_link'] = '&gt;';
  $config["next_tag_open"] = '<li>';
  $config["next_tag_close"] = '</li>';
  $config["prev_link"] = "&lt;";
  $config["prev_tag_open"] = "<li>";
  $config["prev_tag_close"] = "</li>";
  $config["cur_tag_open"] = "<li class='active'><a href='#'>";
  $config["cur_tag_close"] = "</a></li>";
  $config["num_tag_open"] = "<li>";
  $config["num_tag_close"] = "</li>";
  $config["num_links"] = 1;
  $this->pagination->initialize($config);
  $page = $arrData['page_no'];//$this->uri->segment(3);
  $start = ($page - 1) * $config["per_page"];

  $output = array(
   'pagination_link'  => $this->pagination->create_links(),
   'offers'   => $this->offer_search_model->getOffersWithDate($config["per_page"], $start,$arrData)
  );

echo json_encode($output);
    die();
       
    } 
    public function showoffer($id){

      $data['result'] = $this->offer_search_model->getOfferById($id);
     $this->load->view('templates/header');
     $this->load->view('pages/single-offer',$data);
     $this->load->view('templates/footer');
  //   $this->load->view('offers');
    // print_r($data);

    }
    

}
