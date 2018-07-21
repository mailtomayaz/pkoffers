<?php
/*
 * this controller is to handle the offers
 * add, edit,delete,update
 * created by Muhammad Ayaz
 * June 21,2018
 * url: khaysoft.com
 * all rights reserverd by khaysoft 
 *  */
class Provinces extends Admin_Controller {

    function __construct() {
        parent::__construct();
       $this->load->model('provinces_model');
      // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session'); 
    }
//display list
    public function index() {
        
        $data['result']=$this->provinces_model->getList();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "provinces_list";
        $this->load->view($this->_container, $data);
    }
//add form view
    public function create() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "province_create";
        $this->load->view($this->_container, $data);
    }
//edit view 
        public function edit($id) {
       $data['result']=$this->provinces_model->getById($id);
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "province_edit";
        $this->load->view($this->_container, $data);
    }  
    //insert data to database
    public function province_add(){
     
           if ($this->input->post('name')) {
            $data['name'] = $this->input->post('name');
           $isInsert =  $this->provinces_model->insert_province($data);
         
           if($isInsert){
            $this->session->set_flashdata('message', 'Added Successfully!');
            redirect('/admin/provinces', 'refresh');
           
           }
        }
        
    }
    //update
    public function update($id){
            if ($this->input->post('name')) {
                 $data['id'] = $id;
            $data['name'] = $this->input->post('name');
           $isInsert =  $this->provinces_model->update($data);
         
           if($isInsert){
            $this->session->set_flashdata('message', 'Updated Successfully!');
            redirect('/admin/provinces', 'refresh');
           
           }
        }
    }
    
        //delete
    public function delete($id){
         
         
            $data['id'] = $id;
            $data['is_deleted'] = 1;
           $isInsert =  $this->provinces_model->update($data);
           if($isInsert){
           $this->session->set_flashdata('message', 'Deleted Successfully!');
            redirect('/admin/provinces', 'refresh');
           
          
        }
    }
          public function do_upload()
        {
             
                $config['upload_path']          = "uploads/";
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['encrypt_name'] =   TRUE;
                $this->load->library('upload', $config);
             //   $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        return false;
                       // print_r($error);
                       // $this->load->view('upload_form', $error);
                }
                else
                {
                    $imageDetailArray = $this->upload->data();
           // $image =  $imageDetailArray['file_name'];
                    $image_name =  $imageDetailArray['file_name'];
                    return $image_name;
//                        $data = array('upload_data' => $this->upload->data());
//
//                        $this->load->view('upload_success', $data);
                }
        }
}
