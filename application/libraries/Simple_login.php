<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {
	
	
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	
	
	public function login($username, $password) {
		
		$query = $this->CI->db->get_where('user', array(
										'username' => $username, 
										'password' => sha1($password)
										));
										
		
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT * FROM user WHERE username = "'.$username.'"');
			$admin 	= $row->row();
			$id 	= $admin->id_user;
			$nama	= $admin->nama;
			$level	= $admin->level;
			
			$this->CI->session->set_userdata('username', $username); 
			$this->CI->session->set_userdata('akses_level', $level); 
			$this->CI->session->set_userdata('nama', $nama); 
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			
		
			
			redirect(base_url('admin/dasbor'));
		}else{
			$this->CI->session->set_flashdata('sukses','Oopss.. Username/password salah');
			redirect(base_url().'login');
		}
		return false;
	}
	
	
	public function cek_login() {
		if($this->CI->session->userdata('username') == '' && $this->CI->session->userdata('akses_level')=='') {
			$this->CI->session->set_flashdata('sukses','Oops...silakan login dulu');
			redirect(base_url('login'));
		}	
	}
	

	public function logout($redirect) {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		unset($_SESSION['admin']);
		session_destroy();
		$this->CI->session->set_flashdata('sukses','Terimakasih, Anda berhasil logout');
		redirect(base_url().'login');
	}
	
}