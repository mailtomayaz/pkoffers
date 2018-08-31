<?php

/*
 * this controller is to handle the offers
 * add, edit,delete,update
 * created by Muhammad Ayaz
 * June 21,2018
 * url: khaysoft.com
 * all rights reserverd by khaysoft 
 *  */

class Cities extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('city_model');
        $this->load->model('provinces_model');
        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
          $this->load->library(array('ion_auth', 'form_validation', 'session'));
        $this->load->library('session');
          if (!$this->ion_auth->logged_in()) {
               redirect(base_url().'index.php/auth/index', 'refresh');
          }
    }

//display list
    public function index() {

        $data['result'] = $this->city_model->getList();
        $data['province'] = $this->provinces_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "cities_list";
        $this->load->view($this->_container, $data);
    }

//add form view
    public function add() {
        $data['province'] = $this->provinces_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "city_add";
        $this->load->view($this->_container, $data);
    }

//edit view 
    public function edit($id) {
        //$data['province']=$this->provinces_model->getById($id);
        $data['city'] = $this->city_model->getById($id);
        $data['province_list'] = $this->provinces_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "city_edit";
        $this->load->view($this->_container, $data);
    }

    //insert data to database
    public function city_add() {

        if ($this->input->post('name')) {
            // $data['name'] = $this->input->post('name');
            $data['province_id'] = $this->input->post('province');
            $name_list = $this->input->post('name');
            $arr_name = explode(',', $name_list);
            if (!empty($arr_name)) {
                foreach ($arr_name as $city) {
                    $data['name'] = $city;
                    $isInsert = $this->city_model->insert($data);
                }
            } else {
                // echo "Only one";
            }

            if ($isInsert) {
                $this->session->set_flashdata('message', 'Record Added Successfully!');
                redirect('/admin/cities', 'refresh');
            }
        }
    }

    //update
    public function update($id) {
        if ($this->input->post('name')) {
            $data['id'] = $id;
            $data['province_id'] = $this->input->post('province_id');
            $data['name'] = $this->input->post('name');
            $isInsert = $this->city_model->update($data);

            if ($isInsert) {
                $this->session->set_flashdata('message', 'Record Updated Successfully!');
                redirect('/admin/cities', 'refresh');
            }
        }
    }

    //delete
    public function delete($id) {


        $data['id'] = $id;
        $data['is_deleted'] = 1;
        $isInsert = $this->provinces_model->update($data);
        if ($isInsert) {
            $this->session->set_flashdata('message', 'Deleted Successfully!');
            redirect('/admin/provinces', 'refresh');
        }
    }

    public function do_upload() {

        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        //   $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            return false;
            // print_r($error);
            // $this->load->view('upload_form', $error);
        } else {
            $imageDetailArray = $this->upload->data();
            // $image =  $imageDetailArray['file_name'];
            $image_name = $imageDetailArray['file_name'];
            return $image_name;
//                        $data = array('upload_data' => $this->upload->data());
//
//                        $this->load->view('upload_success', $data);
        }
    }

}
