<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Worker_profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Worker/M_profile');		
        $this->load->model('M_master');
	}

	public function index()
	{
	    $data = array(
	    	'data_profil' => $this->M_profile->get_user_by_id()
	    );
	    $this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Worker_new/ProfilWorker_view', $data);
		$this->load->view('Element/Panel/footer');	
	}


	 public function change_profile_worker()
	  {
	    	

	  	if(empty($_FILES['foto']['error']) != 0)
	    	{
		    	$config['upload_path'] = 'assets/admin/images/' ;
		    	$config['allowed_types'] = 'jpg|png' ;
		    	$config['max_size'] = 2000 ;

		    	$this->load->library('upload',$config) ;
		    	
		    	if($this->upload->do_upload('foto')){
			        if($this->M_profile->change_profile_worker($this->upload->data()) == TRUE){
					  $this->M_profile->change_status_profile() ;		
					  $this->session->unset_userdata('status_profile');
					  $this->session->set_userdata('status_profile','1');					          	
			          $this->session->set_flashdata('notif', 'Data profil anda berhasil disimpan, jika foto profil belum update, cobalah logout dan login kembali');
			          $this->session->set_flashdata('type', 'success');
				  	  redirect('Worker_new/Worker_profil');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker_new/Worker_profil');
			        }	
		    	}else{
			          $this->session->set_flashdata('notif', ''.$this->upload->display_errors().'');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker_new/Worker_profil');
		    	}    
	    	}else{
			        if($this->M_profile->change_profile_worker2() == TRUE){
					  $this->M_profile->change_status_profile() ;
					  $this->session->unset_userdata('status_profile');
					  $this->session->set_userdata('status_profile','1');					  		        	
			          $this->session->set_flashdata('notif', 'Data profil anda berhasil disimpan');
			          $this->session->set_flashdata('type', 'success');
				  	  redirect('Worker_new/Worker_profil');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker_new/Worker_profil');
			        }	
	    	}

	   }


}