<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Price_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

      
        public function listPrice() {
            $this->db->select('*');
            $this->db->from('price');
            $this->db->join('admins','admins.admin_id = price.user_id','LEFT');                        
            $this->db->order_by('price_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

       
        public function createPrice($data) {
            $this->db->insert('price',$data);
        }

       
        public function detailPrice($price_id) {
            $this->db->select('*');
            $this->db->from('price');
            $this->db->where('price_id',$price_id);
            $this->db->order_by('price_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

    
        public function editPrice($data) {
            $this->db->where('price_id',$data['price_id']);
            $this->db->update('price',$data);
        }           

       
        public function deletePrice($data) {
            $this->db->where('price_id',$data['price_id']);
            $this->db->delete('price',$data);
        }

   
        public function endPrice() {
            $this->db->select('*');
            $this->db->from('price');
            $this->db->order_by('price_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

        public function perPagePrice($limit,$start) {
            $this->db->select('*');
            $this->db->from('price');
            $this->db->where(array('status' => 'publish'));                
            $this->db->order_by('price_id','ASC');
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query->result_array();
        }

      
        public function totalPrice() {
            $this->db->select('*');
            $this->db->from('price');
            $this->db->where(array('status' => 'publish'));                
            $this->db->order_by('price_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }                             

    }
