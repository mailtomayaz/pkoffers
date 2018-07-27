<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
         $this->load->library(array('ion_auth', 'form_validation', 'session'));
    }

//list of all offers
    public function getListOffers($user_id='') {
//        $query = $this->db->query("SELECT * FROM offers;");
//        return $query->result();
       if($user_id){
           $query = $this->db->get_where('offers', array('is_deleted' => 0,'user_id'=>$user_id));
       }
        else{
         $query = $this->db->get_where('offers', array('is_deleted' => 0));
        }
        //$query = $this->db->query("SELECT * FROM provinces");
        return $query->result();
    }

    //insert offers into database

    public function insert_offer($arrData) {

        $this->db->insert('offers', $arrData);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
           return true;
        }
        // print_r($arrData);
    }
    //get offer by ID
    
   public function getOfferById($id){
       $query = $this->db->query("SELECT * FROM offers where id=$id");
        return $query->result();
   }
   
       public function update($data) {

        $this->db->where('id', $data['id']);
        $this->db->update('offers', $data);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
            return true;
        }
        // $query = $this->db->query("SELECT * FROM provinces where id=$data['id']");
        // return $query->result();
    }

}
