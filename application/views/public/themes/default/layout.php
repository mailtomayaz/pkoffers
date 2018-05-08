<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $this->load->view($this->config->item('ci_my_admin_template_dir_public') . 'header');
    $this->load->view($this->config->item('ci_my_admin_template_dir_public') . 'content');
    $this->load->view($this->config->item('ci_my_admin_template_dir_public') . 'footer');
  //  $this->load->view($this->config->item('ci_my_admin_template_dir_public') . 'header');