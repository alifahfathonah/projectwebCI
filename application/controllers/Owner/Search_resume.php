<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_resume extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Owner/M_search_resume');
        $this->load->model('M_master');			

	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_vacancy') == '1'  && $this->session->userdata('status_email_ver') == '1'){
		   		$data['data_category'] = $this->M_search_resume->get_category();    
		   		$data['data_kab'] = $this->M_search_resume->get_kabupaten2();        	
		        $data['main_view'] = 'Owner/Search_resume_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi lowongan pekerjaan / profile /Verifikasi Email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
        	}

        } else {
	          redirect('Landing');
        }		
	}
	public function get_resume_by_search()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_vacancy') == '1'  && $this->session->userdata('status_email_ver') == '1'){
        		$this->load->library('pagination') ;

        		$config['base_url'] = base_url().'Owner/Search_resume/get_resume_by_search' ;
        		$config['total_rows'] = $this->M_search_resume->get_resume_total_record() ;
        		$config['per_page'] = 3 ;
        		$config['uri_segment'] = 4;
        		$config['full_tag_open'] = "<div class='paginat'>" ;
        		$config['full_tag_close'] = "</div>" ;
        		$config['cur_tag_open'] = "<a class='active' href='#'>" ;
        		$config['cur_tag_close'] = "</a>" ;
        		$config['first_tag_open'] = "<a>" ;
        		$config['first_tag_close'] = "</a>" ;
        		$config['last_tag_open'] = "<a>" ;
        		$config['last_tag_close'] = "</a>" ;
        		$this->pagination->initialize($config) ;
        		$start = $this->uri->segment(4,0) ;

        		$rows = $this->M_search_resume->get_resume_by_search($config['per_page'],$start) ;
	   		    $data['data_category'] = $this->M_search_resume->get_category();    
	   		    $data['data_kab'] = $this->M_search_resume->get_kabupaten2();
	   		    $data['data_vacancy'] = $this->M_search_resume->get_vacancy();

	   		    $data['data_resume'] = $rows ;   
	   		    $data['pagination'] = $this->pagination->create_links() ;   
	   		    $data['start'] = $start ;   
	   		    $data['main_view'] 		= 'Owner/Get_resume_search_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi lowongan pekerjaan / profile /Verifikasi Email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
        	}

        } else {
	          redirect('Landing');
        }		
	}

// Invete Worker
   public function invite_worker()
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_vacancy') == '1'  && $this->session->userdata('status_email_ver') == '1'){
        		if($this->M_search_resume->cek_max_job_inv() == TRUE){
	        		if($this->M_search_resume->cek_inv() == TRUE){
				          if($this->M_search_resume->invite_worker() == TRUE ){
					  $to_mail = $this->input->post('email') ;
					  $from_email = "dafa27890@gmail.com";
					//   $from_email = $this->session->userdata('email'); jika sudah bisa saya sarankan pakai ini
					  $this->email->from($from_email, 'Loker');
					  $this->email->to($to_mail);
					  $this->email->subject('Lamaran Pekerjaan Loker Loker');
					  $this->email->message('<h1>Selamat, Lamaran pekerjaan anda telah diterima </h1>');
					  $this->email->set_mailtype('html');
					  $this->email->send()	;								  
							  $this->session->set_flashdata('notif', 'Pekerjan berhasil diinvite, tunggu kabar selanjutnya');
			                  $this->session->set_flashdata('type', 'success');
				        	  redirect('Owner/Search_resume');
		 	               }else{
							  $this->session->set_flashdata('notif', 'Pekerjan gagal diinvite');
				              $this->session->set_flashdata('type', 'error');                
				        	  redirect('Owner/Search_resume');
				           }	
	        		}else{
							  $this->session->set_flashdata('notif', 'Anda Sudah Mengundang Pekerja Ini');
				              $this->session->set_flashdata('type', 'error');                
				        	  redirect('Owner/Search_resume');
	        		}
        		}else{
        			$this->session->set_flashdata('notif', 'Kuota undangan pekerja anda telah habis, silahkan perbarui paket');
				              $this->session->set_flashdata('type', 'error');                
				        	  redirect('Owner/Search_resume');
        		}
        	  	
	      }else{
			    $this->session->set_flashdata('notif', 'Lengkapi lowongan pekerjaan / profile /Verifikasi Email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
	      }

            }else {
			    redirect('Landing');
            }

    }
// Invite Worker
     public function get_resume_id($id)
    {
        $get_resume_id = $this->M_search_resume->get_resume_id($id);
        echo json_encode($get_resume_id);
    }




// Data Job Inv
    public function data_job_inv()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_vacancy') == '1'  && $this->session->userdata('status_email_ver') == '1'){
		   		$data['data_job_inv'] = $this->M_search_resume->data_job_inv();        	
		        $data['main_view'] = 'Owner/Job_inv_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi lowongan pekerjaan / profile /Verifikasi Email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
        	}

        } else {
	          redirect('Landing');
        }		
		
	}
}
