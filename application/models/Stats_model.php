<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	
	public function admins() {
		$query = $this->db->get('admins');
		return $query->num_rows();	
	}

	
	public function blogs() {
		$query = $this->db->get('blogs');
		return $query->num_rows();	
	}


	public function products() {
		$query = $this->db->get('products');
		return $query->num_rows();	
	}


	public function clients() {
		$query = $this->db->get('clients');
		return $query->num_rows();	
	}	

	
	public function downloads() {
		$query = $this->db->get('downloads');
		return $query->num_rows();	
	}


	public function contacts() {
		$query = $this->db->get('contacts');
		return $query->num_rows();	
	}					


	public function galleries() {
		$query = $this->db->get('galleries');
		return $query->num_rows();	
	}	

	public function galleriesPublish() {
		$query = $this->db->get_where('galleries',array('status' => 'publish'));
		return $query->num_rows();	
	}				

}