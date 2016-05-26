<?php

class helper extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('admin/products');
        }else{
        	$this->load->view('admin/login');	
        }
	}

}