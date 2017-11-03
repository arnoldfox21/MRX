<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Galleries_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        public function listGalleries() {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->join('admins','admins.admin_id = galleries.user_id','LEFT');                        
            $this->db->order_by('gallery_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function listGalleriesPub() {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->join('admins','admins.admin_id = galleries.user_id','LEFT');
            $this->db->where(array('status' => 'publish'));                        
            $this->db->order_by('gallery_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        } 

        public function listGalleriesUser(){
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->where(array('position' => 'footer'));
            $this->db->order_by('gallery_id', 'DESC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function listGalleriesPubHome() {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->join('admins','admins.admin_id = galleries.user_id','LEFT');
            $this->db->where(array('status' => 'publish','position' => 'slider'));                        
            $this->db->order_by('gallery_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        
        public function listGalleryPubProfile() {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->join('admins','admins.admin_id = galleries.user_id','LEFT');
            $this->db->where(array('status' => 'publish','position' => 'profil'));                        
            $this->db->order_by('gallery_id','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }

       
        public function listGalleryPubPrice() {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->join('admins','admins.admin_id = galleries.user_id','LEFT');
            $this->db->where(array('status' => 'publish','position' => 'harga'));                        
            $this->db->order_by('gallery_id','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

  
        public function listGalleryPubFooter() {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->join('admins','admins.admin_id = galleries.user_id','LEFT');
            $this->db->where(array('status' => 'publish','position' => 'footer'));                        
            $this->db->order_by('gallery_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }                                


        public function createGallery($data) {
            $this->db->insert('galleries',$data);
        }

     
        public function detailGallery($gallery_id) {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->where('gallery_id',$gallery_id);
            $this->db->order_by('gallery_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

   
        public function editGallery($data) {
            $this->db->where('gallery_id',$data['gallery_id']);
            $this->db->update('galleries',$data);
        }           

 
        public function deleteGallery($data) {
            $this->db->where('gallery_id',$data['gallery_id']);
            $this->db->delete('galleries',$data);
        }        


        public function endGallery() {
            $this->db->select('*');
            $this->db->from('galleries');
            $this->db->order_by('gallery_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }              

    }
