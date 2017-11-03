<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login {
	
	
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	
	
	public function login($username, $password) {
		
		$query = $this->CI->db->get_where('admins', array(
										'username' => $username, 
										'password' => sha1($password)
										));
		
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT * FROM admins WHERE username = "'.$username.'"');
			$user 	= $row->row();
			$id 	= $user->admin_id;
			$name	= $user->username;
			
			$this->CI->session->set_userdata('username', $username); 
			$this->CI->session->set_userdata('name', $name); 
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			redirect(base_url().'admin/dashboard');

		
		}else{
			$this->CI->session->set_flashdata('sukses','Oopss.. Username/password salah');
			redirect(base_url().'admin/login');
		}
		return false;
	}
	
	
	public function cek_login() {
		if($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses','Oops...silakan login dulu');
			redirect(base_url('admin/login'));
		}	
	}
	
	
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		$this->CI->session->unset_userdata('name');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		session_destroy();
		$this->CI->session->set_flashdata('sukses','Terimakasih, Anda berhasil logout');
		redirect(base_url().'admin/login');
	}
	
}