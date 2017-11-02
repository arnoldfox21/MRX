<?php
	
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	

	public function inbox() {

		$site  = $this->mConfig->list_config();
		$contacts = $this->mContacts->listContacts();
		
		$data = array(	'title'		=> 'Inbox - '.$site['nameweb'],
						'contacts'	=> $contacts,
						'isi'		=> 'admin/contacts/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	
	public function delete($message_id) {
		$data = array('message_id'	=> $message_id);
		$this->mContacts->deleteMessage($data);		
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/contacts/inbox'));
	}	
}