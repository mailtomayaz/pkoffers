<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * Pages for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/pages/view
     * 	- or -
     * 		http://example.com/index.php/pages/view/about
     * 	- or -
     * */
    function __construct() {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        $this->load->model('offer_search_model');
        $this->load->model('admin/provinces_model');
        $this->load->model('admin/city_model');
         $this->load->model('admin/category_model');
           $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library('pagination');
//           $this->load->library(array('ion_auth', 'form_validation', 'session'));
//            if (!$this->ion_auth->logged_in()) {
//               redirect(base_url().'index.php/auth/index', 'refresh');
//          }
    }

    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['provinces_list'] = $this->provinces_model->getList();
        $data['cities_list'] = $this->city_model->getList();
        $data['category_list'] = $this->category_model->getList();
/*offers */
 $arrData='';
 if($this->input->post('page_no')){
 $arrData['page_no'] = $this->input->post('page_no');
}else{
     $arrData['page_no']= 1;
}
  $config = array();
  $config["base_url"] = "#";
  $config["total_rows"] = count($this->offer_search_model->getWholeOffers());
  $config["per_page"] = 1;
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
  $pageW = $arrData['page_no'];//$this->uri->segment(3);
  $start = ($pageW - 1) * $config["per_page"];

  $output = array(
   'pagination_link'  => $this->pagination->create_links(),
   'offers'   => $this->offer_search_model->getWholeOffersWithPagination($config["per_page"], $start,$arrData)
  );

       $data['all_offers'] = $output;

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer', $data);
    }

}
