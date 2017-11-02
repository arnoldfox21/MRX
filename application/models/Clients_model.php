<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Clients_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

      
        public function listClients() {
            $this->db->select('*');
            $this->db->from('clients');
            $this->db->join('admins','admins.admin_id = clients.user_id','LEFT');                        
            $this->db->order_by('client_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

     
        public function createClient($data) {
            $this->db->insert('clients',$data);
        }

     
        public function detailClient($client_id) {
            $this->db->select('*');
            $this->db->from('clients');
            $this->db->where('client_id',$client_id);
            $this->db->order_by('client_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

 
        public function editClient($data) {
            $this->db->where('client_id',$data['client_id']);
            $this->db->update('clients',$data);
        }           

   
        public function deleteClient($data) {
            $this->db->where('client_id',$data['client_id']);
            $this->db->delete('clients',$data);
        }

    
        public function endClient() {
            $this->db->select('*');
            $this->db->from('clients');
            $this->db->order_by('client_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }                      

    }
