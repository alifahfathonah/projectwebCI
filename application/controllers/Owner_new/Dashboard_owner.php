<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_owner extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Owner/M_vacancy','M_vacancy');		
        $this->load->model('Owner/M_paket','M_paket');	
        $this->load->model('M_login');
        $this->load->model('M_master');						

	}


	public function index() {

		$this->M_vacancy->cek_closing_date() ;     
    	$this->M_paket->cek_expired() ;  

    	$data = array(
    		'data_paket' => $this->M_paket->get_paket_done()
    	);
        $this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Owner_new/BerandaOwner_view', $data);
		$this->load->view('Element/Panel/footer');
	}

	public function jobApplication() {

    	$data = array(
    		'applied_vacancy' => $this->M_vacancy->get_apllied_vacancy_perusahaan()
    	);
        $this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Owner_new/JobApplication_view', $data);
		$this->load->view('Element/Panel/footer');
	}

	public function jobInvitation() {

    	$data = array(
    		'applied_vacancy' => $this->M_vacancy->get_apllied_vacancy_perusahaan()
    	);
        $this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Owner_new/JobInvitation_view', $data);
		$this->load->view('Element/Panel/footer');
	}



}

