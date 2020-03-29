<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Worker_profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Worker/M_profile');		
        $this->load->model('M_master');	
	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
	        $data['main_view'] 		= 'Worker/ProfilWorker_view';
   		    $data['data_profil'] = $this->M_profile->get_user_by_id();
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}
// CHANGE PROFILE
	  public function change_profile_worker()
	  {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
	    	if(empty($_FILES['foto']['error']) != 0)
	    	{
		    	$config['upload_path'] = 'assets/admin/images/' ;
		    	$config['allowed_types'] = 'jpg|png|jpeg' ;
		    	$config['max_size'] = 2000 ;

		    	$this->load->library('upload',$config) ;
		    	
		    	if($this->upload->do_upload('foto')){
			        if($this->M_profile->change_profile_worker($this->upload->data()) == TRUE){
					  $this->M_profile->change_status_profile() ;		
					  $this->session->unset_userdata('status_profile');
					  $this->session->set_userdata('status_profile','1');					          	
			          $this->session->set_flashdata('notif', 'Data profil anda berhasil disimpan, jika foto profil belum update, cobalah logout dan login kembali');
			          $this->session->set_flashdata('type', 'success');
				  	  redirect('Worker/Worker_profil');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker/Worker_profil');
			        }	
		    	}else{
			          $this->session->set_flashdata('notif', ''.$this->upload->display_errors().'');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker/Worker_profil');
		    	}    
	    	}else{
			        if($this->M_profile->change_profile_worker2() == TRUE){
					  $this->M_profile->change_status_profile() ;
					  $this->session->unset_userdata('status_profile');
					  $this->session->set_userdata('status_profile','1');					  		        	
			          $this->session->set_flashdata('notif', 'Data profil anda berhasil disimpan');
			          $this->session->set_flashdata('type', 'success');
				  	  redirect('Worker/Worker_profil');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker/Worker_profil');
			        }	
	    	}
	    } else {
	          redirect('Landing');
	      }
	   }


	  public function change_password_worker()
	  {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
	    	if($this->input->post('password') == $this->input->post('ver_password') ){
		    	if(md5($this->input->post('old_password')) ==  $this->session->userdata('password') ){
			        if($this->M_profile->change_password_worker() == TRUE){
			          $this->session->set_flashdata('notif', 'Password profil anda berhasil diubah');
			          $this->session->set_flashdata('type', 'success');
			          redirect('Worker/Dashboard_worker');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker/Worker_profil');
			        }	
		    	}else{
			          $this->session->set_flashdata('notif', 'Password lama tidak valid');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker/Worker_profil');
		    	}    		    		
	    	}else{
			          $this->session->set_flashdata('notif', 'Coba cek lagi verifikasi passowrd anda');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Worker/Worker_profil');
	    	}    	   
	    } else {
	          redirect('Landing');
	      }
	   }

   
//	  
}
