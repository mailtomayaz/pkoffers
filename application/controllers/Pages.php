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
        $this->load->model('admin/offers_model');
        $this->load->model('admin/provinces_model');
        $this->load->model('admin/city_model');
         $this->load->model('admin/category_model');
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
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer', $data);
    }

}
