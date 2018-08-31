<?php
/*
 * this controller is to handle the offers
 * add, edit,delete,update
 * created by Muhammad Ayaz
 * August 31,2018
 * url: khaysoft.com
 * email: mailtomayaz@gmail.com
 * all rights reserverd by khaysoft 
 *  */
class Categories extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('provinces_model');
        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
          $this->load->library(array('ion_auth', 'form_validation', 'session'));
            if (!$this->ion_auth->logged_in()) {
               redirect(base_url().'index.php/auth/index', 'refresh');
          }
    }

//display list
    public function index() {

        $data['result'] = $this->category_model->getList();
        $data['province'] = $this->provinces_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "category_list";
        $this->load->view($this->_container, $data);
    }

//add form view
    public function add() {
        $data['province'] = $this->provinces_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "category_add";
        $this->load->view($this->_container, $data);
    }

//edit view 
    public function edit($id) {
        //$data['province']=$this->provinces_model->getById($id);
        $data['category'] = $this->category_model->getById($id);
        //$data['province_list'] = $this->provinces_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "category_edit";
        $this->load->view($this->_container, $data);
    }

    //insert data to database
    public function category_add() {

        if ($this->input->post('name')) {
            // $data['name'] = $this->input->post('name');
            //$data['province_id'] = $this->input->post('province');
            $name_list = $this->input->post('name');
            $arr_name = explode(',', $name_list);
            if (!empty($arr_name)) {
                foreach ($arr_name as $city) {
                    $data['name'] = $city;
                    $isInsert = $this->category_model->insert($data);
                }
            } else {
                // echo "Only one";
            }

            if ($isInsert) {
                $this->session->set_flashdata('message', 'Record Added Successfully!');
                redirect('/admin/categories', 'refresh');
            }
        }
    }

    //update
    public function update($id) {
        if ($this->input->post('name')) {
            $data['id'] = $id;
           // $data['province_id'] = $this->input->post('province_id');
            $data['name'] = $this->input->post('name');
            $isInsert = $this->category_model->update($data);

            if ($isInsert) {
                $this->session->set_flashdata('message', 'Record Updated Successfully!');
                redirect('/admin/categories', 'refresh');
            }
        }
    }

    //delete
    public function delete($id) {


        $data['id'] = $id;
        $data['is_deleted'] = 1;
        $isInsert = $this->category_model->update($data);
        if ($isInsert) {
            $this->session->set_flashdata('message', 'Deleted Successfully!');
            redirect('/admin/categories', 'refresh');
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
