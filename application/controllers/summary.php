<?php

class Summary extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        if (!$this->session->userdata('logged_in'))
        {
			redirect('login/'.$this->uri->uri_string(), 'refresh');
        }
    }

	public function index() 
	{
		$this->load->model('Funcionarios');
		
		$data['title']='Resumen Funcionarios';
		$data['summary']=$this->Funcionarios->get_funcionario_summary();
		$data['report']='Coordinadores';
		$data['link']='summary/coordinador';
		$this->load->view('summary/table',$data);
		
		//echo json_encode($this->Funcionarios->get_funcionario_summary());
	}

	public function coordinador() 	{		$this->load->model('Funcionarios');				$data['title']='Resumen Coordinadores';		$data['summary']=$this->Funcionarios->get_coordinador_summary();
		$data['report']='Funcionarios';
		$data['link']='summary';		$this->load->view('summary/table',$data);					//echo json_encode($this->Funcionarios->get_coordinador_summary());	}
	public function afiliado() 
	{
		$this->load->model('Afiliados');
		
		$data['title']='Afiliados por precinto';
		$data['header']=$this->Afiliados->get_afiliados();
		$data['summary']=$this->Afiliados->get_summary();
		$this->load->view('summary/afiliados',$data);
		
	}
	
	public function afiliados_detalle() 
	{
		$this->load->model('Afiliados');
		
		$data['title']='Afiliados por unidad';
		$data['summary']=$this->Afiliados->get_detail();
		$this->load->view('summary/afiliados_detail',$data);
		
	}
}