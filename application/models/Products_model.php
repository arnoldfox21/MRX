<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Products_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        
        public function listProducts() {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('admins','admins.admin_id = products.user_id','LEFT');                        
            $this->db->order_by('product_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

       
        public function listProductsPub() {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where(array('status' => 'publish'));                           
            $this->db->join('admins','admins.admin_id = products.user_id','LEFT');                        
            $this->db->order_by('product_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }        

       
        public function createProduct($data) {
            $this->db->insert('products',$data);
        }

   
        public function detailProduct($product_id) {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('product_id',$product_id);
            $this->db->order_by('product_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

   
        public function readProduct($slugProduct) {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('slug_product',$slugProduct);
            $query = $this->db->get();
            return $query->row_array();
        }         

 
        public function editProduct($data) {
            $this->db->where('product_id',$data['product_id']);
            $this->db->update('products',$data);
        }           

     
        public function deleteProduct($data) {
            $this->db->where('product_id',$data['product_id']);
            $this->db->delete('products',$data);
        } 

      
        public function endProduct() {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->order_by('product_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }  

        
        public function perPageProducts($limit,$start) {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where(array('status' => 'publish'));               
            $this->db->order_by('product_id','ASC');
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query->result_array();
        }

      
        public function totalProducts() {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where(array('status' => 'publish'));                
            $this->db->order_by('product_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }                           

    }
