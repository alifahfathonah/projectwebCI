<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_worker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Owner/M_vacancy','M_vacancy');		
        $this->load->model('Owner/M_paket','M_paket');		
        $this->load->model('M_master');					        		
	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	$this->M_vacancy->cek_closing_date() ;     
        	$this->M_paket->cek_expired() ;   
        	$data['main_view'] 		= 'Worker/BerandaWorker_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}

}
