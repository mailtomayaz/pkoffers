<?php
/*
 * this controller is to handle the offers
 * add, edit,delete,update
 * created by Muhammad Ayaz
 * June 21,2018
 * url: khaysoft.com
 * all rights reserverd by khaysoft 
 *  */

class Offers extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('offers_model');
        $this->load->model('provinces_model');
        $this->load->model('city_model');
         $this->load->model('category_model');
        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library(array('ion_auth', 'form_validation', 'session'));
        //$this->load->library('form_validation');
    }

//display list of offers
    public function index() {

        $user_id = '';
        if (!$this->ion_auth->is_admin()) {
            $user = $this->ion_auth->user()->row();
            $user_id = $user->id;
        }
        $data['provinces_list'] = $this->provinces_model->getList();
        $data['cities_list'] = $this->city_model->getList();
          $data['category_list'] = $this->category_model->getList();
        $data['result'] = $this->offers_model->getListOffers($user_id);
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "offers_list";
        $this->load->view($this->_container, $data);
    }

//add form view
    public function create() {
        //get cities
        $data['provinces_list'] = $this->provinces_model->getList();
        $data['cities_list'] = $this->city_model->getList();
          $data['category_list'] = $this->category_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "offers_create";
        $this->load->view($this->_container, $data);
    }

//edit view of offers
    public function edit($id) {
        $data['provinces_list'] = $this->provinces_model->getList();
        $data['cities_list'] = $this->city_model->getList();
           $data['category_list'] = $this->category_model->getList();
        $data['result'] = $this->offers_model->getOfferById($id);
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "offers_edit";
        $this->load->view($this->_container, $data);
    }

    //insert offers data to database
    public function offer_add() {
        $user_id = '';
        if (!$this->ion_auth->is_admin()) {
            $user = $this->ion_auth->user()->row();
            $user_id = $user->id;
        }
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/admin/offers/create', 'refresh');
        } else {
            if ($this->input->post('province_id')) {
                $data['province_id'] = $this->input->post('province_id');
                $data['city_id'] = $this->input->post('city_id');
                $data['name'] = $this->input->post('name');
                $data['phone'] = $this->input->post('phone');
                $data['description'] = $this->input->post('description');
                $data['address'] = $this->input->post('address');
                $data['category_id'] = $this->input->post('category_id');
                $my_date = date("Y-m-d H:i:s");
                $data['date_created'] = $my_date;
                $data['date_updated'] = $my_date;
                $data['user_id'] = $user_id;
                $data['is_active'] = $this->input->post('is_active');
                $imgName = $this->do_upload();
                if ($imgName) {
                    $data['image'] = $imgName;
                }
                $isInsert = $this->offers_model->insert_offer($data);
                if ($isInsert) {
                    $this->session->set_flashdata('message', 'Added Successfully!');
                    redirect('/admin/offers', 'refresh');
                }
            }
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

    //delete
    public function delete($id) {


        $data['id'] = $id;
        $data['is_deleted'] = 1;
        $isInsert = $this->offers_model->update($data);
        if ($isInsert) {
            $this->session->set_flashdata('message', 'Deleted Successfully!');
            redirect('/admin/offers', 'refresh');
        }
    }

    //update
    public function update($id) {
        $user_id = '';
        if (!$this->ion_auth->is_admin()) {
            $user = $this->ion_auth->user()->row();
            $user_id = $user->id;
        }
          $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/admin/offers/edit/'.$id, 'refresh');
        }else{
        if ($this->input->post('name')) {
            $data['id'] = $id;
            if ($this->input->post('province_id')) {
                $data['province_id'] = $this->input->post('province_id');
                $data['city_id'] = $this->input->post('city_id');
                $data['name'] = $this->input->post('name');
                $data['phone'] = $this->input->post('phone');
                $data['description'] = $this->input->post('description');
                $data['address'] = $this->input->post('address');
                $data['category_id'] = $this->input->post('category_id');
                $my_date = date("Y-m-d H:i:s");
                //$data['date_created'] = $my_date;
                $data['date_updated'] = $my_date;
                $data['user_id'] = $user_id;
                $data['is_active'] = $this->input->post('is_active');

                //$this->ion_auth->remove_from_group('', $id);
                //$this->ion_auth->add_to_group($group_id, $id);
                //$this->ion_auth->update($id, $data);
                if (isset($_FILES['userfile']['tmp_name'])) {
                    $imgName = $this->do_upload();
                    if ($imgName) {
                        $data['image'] = $imgName;
                    }
                }
                $isInsert = $this->offers_model->update($data);
                if ($isInsert) {
                    $this->session->set_flashdata('message', 'Record Updated Successfully!');
                    redirect('/admin/offers', 'refresh');
                }
            }
        }
        }
    }

}
