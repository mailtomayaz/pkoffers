<?php

class Users extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('ion_auth'));
        $group = 'admin';

        if (!$this->ion_auth->in_group($group)) {
            $this->session->set_flashdata('message', 'You must be an administrator to view the users page.');
            redirect('admin/dashboard');
        }
    }

    public function index() {
        $users = $this->ion_auth->users()->result();
//        echo "<pre>";
//        print_r($users);
//die('test');
        $data['users'] = $users;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "users_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        //die('test');
       // print_r($this->input->post());
        if ($this->input->post('username')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $group_id = array($this->input->post('group_id'));

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'username' => $this->input->post('username'),
                'phone' => $this->input->post('phone'),
            );

            $user = $this->ion_auth->register($email, $password, $email, $additional_data, $group_id);

            if (!$user) {
                $errors = $this->ion_auth->errors();
                echo $errors;
                die('done');
            } else {
                redirect('/admin/users', 'refresh');
            }
        }

        $data['groups'] = $this->ion_auth->groups()->result();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "users_create";
        $this->load->view($this->_container, $data);
    }

    public function add_user() {
        //get groups
$groups = $this->ion_auth->groups()->result();
$data['groups'] = $groups;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "user_add";
        $this->load->view($this->_container, $data);
    }

    public function edit_user($id) {
        $users = $this->ion_auth->user($id)->row();

        $data['userdata'] = $users;
        $groups = $this->ion_auth->groups()->result();
        $data['groups'] = $groups;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "user_edit";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        //print_r($this->input->post());
        if ($this->input->post('first_name')) {
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
             $data['company'] = $this->input->post('company');
            $group_id = $this->input->post('group_id');

            $this->ion_auth->remove_from_group('', $id);
            $this->ion_auth->add_to_group($group_id, $id);

            $this->ion_auth->update($id, $data);

            redirect('/admin/users', 'refresh');
        }

        $this->load->helper('ui');

        $data['groups'] = $this->ion_auth->groups()->result();
        $data['user'] = $this->ion_auth->user($id)->row();
        $data['user_group'] = $this->ion_auth->get_users_groups($id)->row();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "users_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->ion_auth->delete_user($id);

        redirect('/admin/users', 'refresh');
    }
    public function user_profile(){
        
        die('test');
    }
    
    public function change_password_form($id){
        $data['user_id']= $id;
         $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "change_password_form";
        $this->load->view($this->_container, $data);
          
    }
    public function change_password(){
        //print_r($this->input->post());
        $user_info = $this->ion_auth->user($this->input->post('user_id'))->row();
        if ($this->input->post('user_id')) {
            $old_pass = $this->input->post('old_password');
            $new_pass = $this->input->post('new_password');
          $res =  $this->ion_auth->change_password($user_info->email,$old_pass,$new_pass);
          //print_r($this->ion_auth->errors());
          if($res){
              $this->session->set_flashdata('message', 'Password Changed Successfully!');
                    redirect('/admin/users', 'refresh');
         }else{
                $this->session->set_flashdata('message',$this->ion_auth->errors());
                    redirect('/admin/users', 'refresh');
         }
          echo $res;
          print_r($res);
         }
          
    }

}
