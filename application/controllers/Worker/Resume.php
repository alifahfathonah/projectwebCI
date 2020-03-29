<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Worker/M_resume');
        $this->load->model('M_master');					
	}

	public function index()
	{
        $id_login = $this->session->userdata('id_login') ;
        $sql ="SELECT * FROM login WHERE id_login=$id_login AND status_resume='0' ";
        $query = $this->db->query($sql);
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
	        if($query->num_rows() > 0){        	
	   		    $data['data_prov'] = $this->M_resume->get_provinsi();
	   		    $data['data_category'] = $this->M_resume->get_category();        	   		            	
		        $data['main_view'] 		= 'Worker/Resume_view';
				$this->load->view('Index',$data);        
	        }else{
			    $this->session->set_flashdata('notif', 'Resume sudah ada, anda hanya bisa membuat 1');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');
  
	        }	      
	      }else{
				    $this->session->set_flashdata('notif', 'Lengkapi profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker'); 
	      }
        } else {
	         redirect('Landing');
        }		
	}
	public function resume_result()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		    $data['data_resume'] = $this->M_resume->get_resume(); 
		        $data['main_view'] 		= 'Worker/Resume_result_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');
        	}
       	
        } else {
	         redirect('Landing');
        }		
	}	
	public function Resume_result_edit()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		    $data['data_resume'] = $this->M_resume->get_resume_download();         	
	   		    $data['data_resume2'] = $this->M_resume->get_resume2();    		      		
		   		$data['data_category'] = $this->M_resume->get_category();      		           	              	 
		        $data['main_view'] 		= 'Worker/Resume_result_edit';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}         	
        } else {
	         redirect('Landing');
        }		
	}	

	public function Resume_result_download()
	{

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		    $data['data_resume_download'] = $this->M_resume->get_resume_download(); 
		        $data['main_view'] = 'Worker/Resume_result_download';   		     
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}         	
        } else {
	         redirect('Landing');
        }		
	}	
	public function Resume_download()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1'){
	    		$this->load->helper('pdf_helper');
	   		    $data['data_resume_download'] = $this->M_resume->get_resume_download(); 
				$this->load->view('Worker/Resume_download',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}         	

        } else {
	         redirect('Landing');
        }		
	}		

// DROPDOWN
	public function get_kabupaten($id_prov)
	{
        if($this->session->userdata('logged_in') == TRUE){
			$data_kabupaten = $this->M_resume->get_kabupaten($id_prov);
			echo json_encode($data_kabupaten);

		} else {
			    redirect('Landing');
		}
	}	
	public function get_kecamatan($id_kab)
	{
        if($this->session->userdata('logged_in') == TRUE){
			$data_kecamatan = $this->M_resume->get_kecamatan($id_kab);
			echo json_encode($data_kecamatan);

		} else {
			    redirect('Landing');
	}
	}
	public function get_desa($id_kec)
	{
        if($this->session->userdata('logged_in') == TRUE){
			$data_desa = $this->M_resume->get_desa($id_kec);
			echo json_encode($data_desa);

		} else {
			    redirect('Landing');
		}
	}
// DROPDOWN


	// INPUT RESUME
   public function input_resume()
    {
	      $id_login = $this->session->userdata('id_login') ;
    	  $sql ="SELECT * FROM login WHERE id_login=$id_login AND status_resume='0' ";
	      $query = $this->db->query($sql); 

      	  if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
		      if($query->num_rows() > 0){        	
			          if($this->M_resume->input_resume() == TRUE ){
						  $this->M_resume->change_status_resume() ;
						  $this->session->unset_userdata('status_resume');
						  $this->session->set_userdata('status_resume','1');						  
						  $this->session->set_flashdata('notif', 'Resume sudah berhasil dibuat');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Worker/Resume/Resume_result');
	 	               }else{
			              $this->session->set_flashdata('notif', 'Resume Gagal Dibuat');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Resume');
			           }	      
		      }else{
				    $this->session->set_flashdata('notif', 'Resume sudah ada, anda hanya bisa membuat 1');
			        $this->session->set_flashdata('type', 'error');                
			        $data['main_view'] 		= 'Worker/Dashboard_worker';
			        	  redirect('Worker/Dashboard_worker');
		      }	      	  	

        	}else{
				    $this->session->set_flashdata('notif', 'Lengkapi profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}         	
		      
            }else {
			    redirect('Landing');
            }

    }
	// INPUT RESUME

	// EDIT RESUME
   public function edit_resume()
    {

      	  if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1'){
			          if($this->M_resume->delete_resume() == TRUE && $this->M_resume->input_resume() == TRUE){
				   		  $this->session->set_flashdata('notif', 'Resume sudah berhasil dirubah');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Worker/Resume/Resume_result_edit');
	 	               }else{
			              $this->session->set_flashdata('notif', 'Resume gagal dirubah');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Resume/Resume_result_edit');
			           }	      
        	}else{
				    $this->session->set_flashdata('notif', 'Lengkapi profile terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	} 

            }else {
			    redirect('Landing');
            }

    }

	// EDIT RESUME

    // DELETE RESUME			
   public function delete_resume()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
	        	if($this->session->userdata('status_profile') == '1' ){
			          if($this->M_resume->delete_resume() == TRUE ){
						  $this->M_resume->change_status_resume2() ;		        			          	
						  $this->session->unset_userdata('status_resume');
						  $this->session->set_userdata('status_resume','0');
						  $this->session->set_flashdata('notif', 'Resume berhasil dihapus');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Worker/Resume');
	 	               }else{
			              $this->session->set_flashdata('notif', 'Resume Gagal dihapus');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Resume/Resume_result');
			           }

	        	}else{
				    $this->session->set_flashdata('notif', 'Lengkapi profile terlebih dahulu');
				    $this->session->set_flashdata('type', 'error');                
			       	redirect('Worker/Dashboard_worker');        		
	        	}         	
            }else {
			    redirect('Landing');
            }

    }

}
