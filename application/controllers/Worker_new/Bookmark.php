<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmark extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Worker/M_bookmark');
        $this->load->model('M_master');						
	}

	public function index()
	{
		
		$data = array(
			'data_bookmark' => $this->M_bookmark->get_bookmark()
		);

		$this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Worker_new/Bookmark_view', $data);
		$this->load->view('Element/Panel/footer');		
	}

		//INPUT BOOKMARK
   public function input_bookmark($id)
    {
      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' ){
          if($this->M_bookmark->input_bookmark($id) == TRUE ){
			  $this->session->set_flashdata('notif', 'Bookmark berhasil disimpan');
              $this->session->set_flashdata('type', 'success');
        	  redirect('Worker_new/Bookmark');
          }else{
			  $this->session->set_flashdata('notif', 'Bookmark gagal disimpan');
              $this->session->set_flashdata('type', 'error');                
        	  redirect('Worker_new/Bookmark');
           }	        	  	
      }else{
	      		$this->session->set_flashdata('notif', 'lengkapi resume / profile terlebih dahulu');
		    $this->session->set_flashdata('type', 'error');                
	       	redirect('Worker_new/Dashboard_worker') ;
      	}
    }
	//INPUT BOOKMARK

	// DELETE BOOKMARK
   public function delete_bookmark($id)
    {
    	if($this->session->userdata('status_profile') == '1' ){
	          if($this->M_bookmark->delete_bookmark($id) == TRUE ){
				  $this->session->set_flashdata('notif', 'Bookmark berhasil dihapus');
                  $this->session->set_flashdata('type', 'success');
	        	  redirect('Worker_new/Bookmark');
	               }else{
	              $this->session->set_flashdata('notif', 'Bookmark Gagal dihapus');
	              $this->session->set_flashdata('type', 'error');                
	        	  redirect('Worker_new/Bookmark');
	           }

    	}else{
		    $this->session->set_flashdata('notif', 'Lengkapi profile terlebih dahulu');
		    $this->session->set_flashdata('type', 'error');                
	       	redirect('Worker_new/Dashboard_worker');        		
    	}  

    }

}