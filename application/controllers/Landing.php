<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Worker/M_search');						
		
	}
	public function index()
	{
			
	   		    $data['data_category'] = $this->M_search->get_category();    
	   		    $data['data_kab'] = $this->M_search->get_kabupaten2();
	   		    $data['headline_premium'] = $this->M_search->getHeadlinePremium();
				$this->load->view('Landing', $data);

	}


	public function search()
	{
        		$this->load->library('pagination') ;
				// $this->session->sess_destroy();		

        		$config['base_url'] = base_url().'Landing/search' ;
        		$config['total_rows'] = $this->M_search->get_vacancy_total_record() ;
        		$config['per_page'] = 6 ;
        		$config['uri_segment'] = 3;
				$choice = $config["total_rows"] / $config["per_page"];
				$config["num_links"] = floor($choice);

				$config['first_link']       = 'First';
				$config['last_link']        = 'Last';
				$config['next_link']        = 'Next';
				$config['prev_link']        = 'Prev';
				$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
				$config['full_tag_close']   = '</ul></nav></div>';
				$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
				$config['num_tag_close']    = '</span></li>';
				$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
				$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
				$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
				$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['prev_tagl_close']  = '</span>Next</li>';
				$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
				$config['first_tagl_close'] = '</span></li>';
				$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['last_tagl_close']  = '</span></li>';


				$this->pagination->initialize($config) ;
				$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        		// $start = $this->uri->segment(3,0) ;

        		$rows = $this->M_search->get_vacancy_by_search($config['per_page'],$data['page']) ;
	   		    $data['cek_daftar'] = $this->M_search->cek_vacancy_applied();

	   		    $data['data_category'] = $this->M_search->get_category();    
	   		    $data['data_kab'] = $this->M_search->get_kabupaten2();
	   		    $data['data_vacancy'] = $rows ;   
	   		    $data['pagination'] = $this->pagination->create_links() ;   
	   		    $data['start'] = $start ;   	
	   		    $data['headline_premium'] = $this->M_search->getHeadlinePremium();   		
				   $this->load->view('Landingview',$data);	

	}
	public function get_vacancy_by_id($id)
	{
   		    $data['get_vacancy_by_id'] = $this->M_search->get_vacancy_by_id($id);
			$this->load->view('Vacancy_by_id_view',$data);	
	
	}  	

}
