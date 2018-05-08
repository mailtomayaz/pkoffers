<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($page)) {
    if (isset($module)) {
        $this->load->view("$module/$page");
    } else {
        $this->load->view($page);
    }
}