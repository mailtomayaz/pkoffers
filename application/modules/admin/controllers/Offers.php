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
      // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
    }
//display list of offers
    public function index() {
        
        $data['result']=$this->offers_model->getListOffers();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "offers_list";
        $this->load->view($this->_container, $data);
    }
//add form view
    public function create() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "offers_create";
        $this->load->view($this->_container, $data);
    }
//edit view of offers
        public function edit($id) {
       $data['result']=$this->offers_model->getOfferById($id);
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "offers_edit";
        $this->load->view($this->_container, $data);
    }  
    //insert offers data to database
    public function offer_add(){
     
           if ($this->input->post('province_id')) {
            $data['province_id'] = $this->input->post('province_id');
            $data['city_id'] = $this->input->post('city_id');
            $data['name'] = $this->input->post('name');
            $data['phone'] = $this->input->post('phone');
            $data['description'] = $this->input->post('description');
            $data['address'] = $this->input->post('address');
            //$this->ion_auth->remove_from_group('', $id);
            //$this->ion_auth->add_to_group($group_id, $id);
            //$this->ion_auth->update($id, $data);
            $imgName = $this->do_upload();
            if($imgName){
              $data['image'] = $imgName;
            }
           $isInsert =  $this->offers_model->insert_offer($data);
           if($isInsert){
            redirect('/admin/offers', 'refresh');
           }
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
