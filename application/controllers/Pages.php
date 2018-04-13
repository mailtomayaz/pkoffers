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
    }

    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

}
