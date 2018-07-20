<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Provinces_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

//list of all offers
    public function getList() {
        $query = $this->db->get_where('provinces', array('is_deleted' => 0));
        //$query = $this->db->query("SELECT * FROM provinces");
        return $query->result();
    }

    //insert offers into database

    public function insert_province($arrData) {

        $this->db->insert('provinces', $arrData);
        if ($this->db->affected_rows() != 1) {
            return false;
        } else {
          return  true;
        }
        // print_r($arrData);
    }
    //get offer by ID
    
   public function getById($id){
       $query = $this->db->query("SELECT * FROM provinces where id=$id");
        return $query->result();
   }
    public function update($data){

 $this->db->where('id', $data['id']);
 $this->db->update('provinces', $data);
  if ($this->db->affected_rows() != 1) {
            return false;
        } else {
          return  true;
        }
      // $query = $this->db->query("SELECT * FROM provinces where id=$data['id']");
       // return $query->result();
   }

}
