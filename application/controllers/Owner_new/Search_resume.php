<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_resume extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Owner/M_search_resume');
        $this->load->model('M_master');		

	}

	public function index()
	{
        /*if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_vacancy') == '1'  && $this->session->userdata('status_email_ver') == '1'){
		   		$data['data_category'] = $this->M_search_resume->get_category();    
		   		$data['data_kab'] = $this->M_search_resume->get_kabupaten2();        	
		        $data['main_view'] = 'Owner/Search_resume_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi lowongan pekerjaan / profile /Verifikasi Email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
        	}	*/	
        $data = array(
        	'data_category' => $this->M_search_resume->get_category(),
        	'data_kab' => $this->M_search_resume->get_kabupaten2()
        );
        $this->load->view('Element/Panel/head_addons');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Owner_new/Search_resume_view', $data);
		$this->load->view('Element/Panel/footer_addons');

	}
	
}
