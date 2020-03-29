<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner_profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Owner/M_profile');	
        $this->load->model('M_master');		
	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
   		    $data['data_profil'] = $this->M_profile->get_user_by_id();       
	   		$data['data_prov'] = $this->M_profile->get_provinsi();   		     	        	
   		    $data['data_category'] = $this->M_profile->get_sector();    
	   		$data['data_kab'] = $this->M_profile->get_kabupaten2();
	   		$data['data_kec'] = $this->M_profile->get_kecamatan2();
	   		$data['data_desa'] = $this->M_profile->get_desa2();   		         	        	
	        $data['main_view'] 		= 'Owner/ProfilOwner_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}
// CHANGE PROFILE
	  public function change_profile_owner()
	  {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	    	if(empty($_FILES['foto']['error']) != 0)
	    	{
		    	$config['upload_path'] = 'assets/admin/images/' ;
		    	$config['allowed_types'] = 'jpg|png' ;
		    	$config['max_size'] = 2000 ;

		    	$this->load->library('upload',$config) ;
		    	
		    	if($this->upload->do_upload('foto')){
			        if($this->M_profile->change_profile_owner($this->upload->data()) == TRUE){
					  $this->M_profile->change_status_profile() ;		
					  $this->session->unset_userdata('status_profile');
					  $this->session->set_userdata('status_profile','1');					          	
			          $this->session->set_flashdata('notif', 'Data profil anda berhasil disimpan');
			          $this->session->set_flashdata('type', 'success');
				  	  redirect('Owner/Owner_profil');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Owner/Owner_profil');
			        }	
		    	}else{
			          $this->session->set_flashdata('notif', ''.$this->upload->display_errors().'');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Owner/Owner_profil');
		    	}    
	    	}else{
			        if($this->M_profile->change_profile_owner2() == TRUE){
					  $this->M_profile->change_status_profile() ;
					  $this->session->unset_userdata('status_profile');
					  $this->session->set_userdata('status_profile','1');
					  $this->session->set_flashdata('notif', 'Data profil anda berhasil disimpan');
			          $this->session->set_flashdata('type', 'success');
				  	  redirect('Owner/Owner_profil');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Owner/Owner_profil');
			        }	
	    	}
	    } else {
	          redirect('Landing');
	      }
	   }


	  public function change_password_owner()
	  {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	    	if($this->input->post('password') == $this->input->post('ver_password') ){
		    	if(md5($this->input->post('old_password')) ==  $this->session->userdata('password') ){
			        if($this->M_profile->change_password_owner() == TRUE){
			          $this->session->set_flashdata('notif', 'Password profil anda berhasil diubah');
			          $this->session->set_flashdata('type', 'success');
			          redirect('Owner/Dashboard_owner');
			        } else {
			          $this->session->set_flashdata('notif', 'Profil anda gagal tersimpan / coba submit ulang');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Owner/Owner_profil');
			        }	
		    	}else{
			          $this->session->set_flashdata('notif', 'Password lama tidak valid');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Owner/Owner_profil');
		    	}    		    		
	    	}else{
			          $this->session->set_flashdata('notif', 'Coba cek lagi verifikasi passowrd anda');
			          $this->session->set_flashdata('type', 'error');
				  	  redirect('Owner/Owner_profil');
	    	}    	   
	    } else {
	          redirect('Landing');
	      }
	   }

   
//	  
}
