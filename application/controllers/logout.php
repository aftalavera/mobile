<?php


class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    
    public function index()
    {
    	
    	$this->session->unset_userdata('logged_in');
    	redirect('/', 'refresh');
    }
	
	
}
	

