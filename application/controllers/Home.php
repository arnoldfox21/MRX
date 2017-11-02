<?php
	
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
	public function index() {

		$site  		= $this->mConfig->list_config();
		$galleries  = $this->mGalleries->listGalleriesPubHome();
		$blogs  	= $this->mBlogs->listBlogslimit(4);
		$products  	= $this->mProducts->listProductsPub();
		$clients  	= $this->mClients->listClients();
		
		$data = array(	'title'		=> 'Home - '.$site['nameweb'],
						'site'		=> $site,
						'galleries'	=> $galleries,
						'blogs'		=> $blogs,
						'products'	=> $products,
						'clients'	=> $clients,
						'isi'		=> 'front/home/list');
		$this->load->view('front/layout/wrapper',$data);
	}
}