<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_inv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Worker/M_jobinv');	
        $this->load->model('M_master');						
	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
			$this->M_jobinv->read()      ;  	
   		    $data['data_jobinv'] = $this->M_jobinv->get_inv();       
	        $data['main_view'] 		= 'Worker/Job_inv_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}
   public function accept_inv($id_jobinv,$id_login,$id_vacancy)
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
			          if($this->M_jobinv->acc_inv($id_jobinv) == TRUE ){
				          if($this->M_jobinv->input_applied($id_login,$id_vacancy) == TRUE ){
							  $this->session->set_flashdata('notif', 'Selamat, Anda sudah menerima lowongan pekerjaan');
			                  $this->session->set_flashdata('type', 'success');
				        	  redirect('Worker/Job_inv');
		 	               }else{
							  $this->session->set_flashdata('notif', 'Anda gagal meneerima lowongan pekerjaan, coba ulangi lagi');
				              $this->session->set_flashdata('type', 'error');                
				        	  redirect('Worker/Job_inv');
				           }	        	  	
	 	               }else{
							  $this->session->set_flashdata('notif', 'gagal menerima lowongan pekerjaan, coba ulangi lagi');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Job_inv');
			           }	        		
	      }else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker') ;
	      }

            }else {
			    redirect('Landing');
            }

    }   
   public function reject_inv($id_jobinv)
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
			          if($this->M_jobinv->reject_inv($id_jobinv) == TRUE ){
							  $this->session->set_flashdata('notif', 'Anda telah menolak tawaran ini');
			                  $this->session->set_flashdata('type', 'success');
				        	  redirect('Worker/Job_inv');
		 	               }else{
							  $this->session->set_flashdata('notif', 'Anda gagal menolak tawaran ini');
				              $this->session->set_flashdata('type', 'error');                
				        	  redirect('Worker/Job_inv');
				           }	        	  	
	        		
	      }else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker') ;
	      }

            }else {
			    redirect('Landing');
            }

    }
}
