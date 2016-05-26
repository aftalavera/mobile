<?php


class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_validate');

 	    if($this->form_validation->run() == FALSE)
	    {
			//Field validation failed.&nbsp; User redirected to login page
			$data['uri_string']=$this->uri->uri_string();
			$this->load->view('login',$data);
	    }
	    else
	    {
			//Go to private area
		    	$this->session->set_userdata('logged_in','yes');
			redirect(str_replace('login','',$this->uri->uri_string()),'refresh');
	    }
	}

	public function validate($password)
	{
			$email=$this->input->post('email');
	
		if (($email == 'user@test.com' && $password == 'password'))
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('validate','Invalid password');
			return FALSE;
		}
	}
	
	
}
	

