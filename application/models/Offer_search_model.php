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
    
      public function getOffers($limit,$start,$arrData){
        $this->db->limit($limit,$start);
          $query = $this->db->get_where('offers', array('province_id'=>$arrData['province_id'],'category_id'=>$arrData['category_id'],'city_id'=>$arrData['city_id']));
         //echo $this->db->last_query(); 
          return $query->result();
    }
       public function getOffersWithDate($limit,$start,$arrData){
        $this->db->limit($limit,$start);
        //check for start date only start date mension
/*echo "<pre>";
        print_r($arrData);
        echo "</pre>";*/
       
        if(!empty($arrData['dateFrom']) && empty($arrData['dateTo'])){
//echo "only start date mention ";
          $mysqlFormat = date('Y-m-d H:i:s', strtotime($arrData['dateFrom']));
         $this->db->where('province_id', $arrData['province_id']);
         $this->db->where('category_id', $arrData['category_id']);
         $this->db->where('city_id', $arrData['city_id']);;
         $this->db->where('offer_start_date >=',$mysqlFormat);
         $query =$this->db->get('offers');
         //echo $this->db->last_query();
        return $query->result();
        }
        //check for offer end date only end date mention
        if(empty($arrData['dateFrom']) && !empty($arrData['dateTo'])){
             $mysqlFormat = date('Y-m-d H:i:s', strtotime($arrData['dateTo']));
              $mysqlFormatCurrentDate = date('Y-m-d H:i:s', strtotime(date('Y-m-d')));
             //date("Y/m/d")
         $this->db->where('province_id', $arrData['province_id']);
         $this->db->where('category_id', $arrData['category_id']);
         $this->db->where('city_id', $arrData['city_id']);;
         $this->db->where('offer_end_date <=',$mysqlFormat);
         $this->db->where('offer_start_date >=',$mysqlFormatCurrentDate);
         $query =$this->db->get('offers');
         //echo $this->db->last_query();
        return $query->result();
        }
          //if both dates mention 
          if(!empty($arrData['dateFrom']) && !empty($arrData['dateTo'])){
           // echo "both date mention ";
         // $query = $this->db->get_where('offers', array('province_id'=>$arrData['province_id'],'category_id'=>$arrData['category_id'],'city_id'=>$arrData['city_id']));
         $this->db->where('province_id', $arrData['province_id']);
         $this->db->where('category_id', $arrData['category_id']);
         $this->db->where('city_id', $arrData['city_id']);;
         $this->db->where('offer_start_date >=',$arrData['dateFrom']);
         $this->db->where('offer_end_date <=', $arrData['dateTo']);
         $query =$this->db->get('offers');
         return $query->result();
          }
          
         
         // return $query->result();
    }

           public function getAllOffersWithDate($arrData){
        //$this->db->limit($limit,$start);
        //check for start date only start date mension
/*echo "<pre>";
        print_r($arrData);
        echo "</pre>";*/
       
        if(!empty($arrData['dateFrom']) && empty($arrData['dateTo'])){
//echo "only start date mention ";
          $mysqlFormat = date('Y-m-d H:i:s', strtotime($arrData['dateFrom']));
         $this->db->where('province_id', $arrData['province_id']);
         $this->db->where('category_id', $arrData['category_id']);
         $this->db->where('city_id', $arrData['city_id']);;
         $this->db->where('offer_start_date >=',$mysqlFormat);
         $query =$this->db->get('offers');
         //echo $this->db->last_query();
        return $query->result();
        }
        //check for offer end date only end date mention
        if(empty($arrData['dateFrom']) && !empty($arrData['dateTo'])){
             $mysqlFormat = date('Y-m-d H:i:s', strtotime($arrData['dateTo']));
              $mysqlFormatCurrentDate = date('Y-m-d H:i:s', strtotime(date('Y-m-d')));
             //date("Y/m/d")
         $this->db->where('province_id', $arrData['province_id']);
         $this->db->where('category_id', $arrData['category_id']);
         $this->db->where('city_id', $arrData['city_id']);;
         $this->db->where('offer_end_date <=',$mysqlFormat);
         $this->db->where('offer_start_date >=',$mysqlFormatCurrentDate);
         $query =$this->db->get('offers');
         //echo $this->db->last_query();
        return $query->result();
        }
          //if both dates mention 
          if(!empty($arrData['dateFrom']) && !empty($arrData['dateTo'])){
           // echo "both date mention ";
         // $query = $this->db->get_where('offers', array('province_id'=>$arrData['province_id'],'category_id'=>$arrData['category_id'],'city_id'=>$arrData['city_id']));
         $this->db->where('province_id', $arrData['province_id']);
         $this->db->where('category_id', $arrData['category_id']);
         $this->db->where('city_id', $arrData['city_id']);;
         $this->db->where('offer_start_date >=',$arrData['dateFrom']);
         $this->db->where('offer_end_date <=', $arrData['dateTo']);
         $query =$this->db->get('offers');
         return $query->result();
          }
          
         
         // return $query->result();
    }
   public function getAllOffers($arrData){
        //$this->db->limit($limit);
          $query = $this->db->get_where('offers', array('province_id'=>$arrData['province_id'],'category_id'=>$arrData['category_id'],'city_id'=>$arrData['city_id']));
         // $this->db->last_query(); 
          return $query->result();
    }
       public function getOfferById($id){
        
          $query = $this->db->get_where('offers', array('id'=>$id));
          return $query->result();
    }
	
}
