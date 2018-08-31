<?php
/**
 * Name:    offer search Model
 * Author:  Muhammad Ayaz
 *           mailtomayaz@gmail.com
 * Created:  31.08.2018
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer_search_model extends CI_Model
{
     function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function getCitiesByProviceId($id){
        
          $query = $this->db->get_where('cities', array('province_id'=>$id));
          return $query->result();
    }
	
}
