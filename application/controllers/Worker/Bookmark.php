<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmark extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Worker/M_bookmark');
        $this->load->model('M_master');							
	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
   		    $data['data_bookmark'] = $this->M_bookmark->get_bookmark();       
	        $data['main_view'] 		= 'Worker/Bookmark_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}

	//INPUT BOOKMARK
   public function input_bookmark($id)
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' ){
			          if($this->M_bookmark->input_bookmark($id) == TRUE ){
						  $this->session->set_flashdata('notif', 'Bookmark berhasil disimpan');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Worker/Bookmark');
	 	               }else{
						  $this->session->set_flashdata('notif', 'Bookmark gagal disimpan');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Bookmark');
			           }	        	  	
	      }else{
		      		$this->session->set_flashdata('notif', 'lengkapi resume / profile terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker') ;
	      }

            }else {
			    redirect('Landing');
            }

    }
	//INPUT BOOKMARK

	// DELETE BOOKMARK
   public function delete_bookmark($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
	        	if($this->session->userdata('status_profile') == '1' ){
			          if($this->M_bookmark->delete_bookmark($id) == TRUE ){
						  $this->session->set_flashdata('notif', 'Bookmark berhasil dihapus');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Worker/Bookmark');
	 	               }else{
			              $this->session->set_flashdata('notif', 'Bookmark Gagal dihapus');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Bookmark');
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
	// DELETE BOOKMARK
}
