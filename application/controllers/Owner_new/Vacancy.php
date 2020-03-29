<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Owner/M_vacancy');		
        $this->load->model('M_master');

	}

	public function index()
	{
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		$data['data_prov'] = $this->M_vacancy->get_provinsi();
   		    $data['data_category'] = $this->M_vacancy->get_category();   

			$this->load->view('Element/Panel/head');
			$this->load->view('Element/Panel/header');
			$this->load->view('Element/Panel/navbar');
			$this->load->view('Owner_new/Vacancy_form_view', $data);
			$this->load->view('Element/Panel/footer');

	      }else{
		      		$this->session->set_flashdata('notif', ' lengkapi profile / verifkasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner_new/Dashboard_owner') ;
	      }	
	}

	public function vacancy_result()
	{
      /*if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
   		    $data['data_category'] = $this->M_vacancy->get_category();    	   		
   		    $data['data_vacancy'] = $this->M_vacancy->get_vacancy(); 
	        $data['main_view'] 		= 'Owner/Vacancy_view';
			$this->load->view('Index',$data);
	      }else{
	      		$this->session->set_flashdata('notif', 'lengkpi profile / verifiksi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
	       	redirect('Owner/Dashboard_owner') ;
	      }	*/
	      $data = array(
	      	'data_category' => $this->M_vacancy->get_category(),
	      	'data_vacancy' => $this->M_vacancy->get_vacancy(),
	      );
	    $this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Owner_new/Vacancy_view', $data);
		$this->load->view('Element/Panel/footer');
	}	
}