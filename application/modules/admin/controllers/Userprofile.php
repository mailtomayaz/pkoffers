<?php

class Userprofile extends Admin_Controller {

    function __construct() {
       parent::__construct();
       $this->load->helper(array('form', 'url'));
        $this->load->library(array('ion_auth', 'form_validation', 'session'));
    }

    public function index() {
        $user = $this->ion_auth->user()->row();

        $data['user'] = $user;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "user_profile";
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

}
