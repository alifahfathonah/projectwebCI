<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Owner/M_paket');	
        $this->load->model('M_master');						
	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
   		    $data['data_upgrade'] = $this->M_paket->get_upgrade();       
	        $data['main_view'] 		= 'Owner/Paket_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}
   public function input_paket($id)
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
        	if($this->M_paket->cek_paket() == TRUE ){
			          if($this->M_paket->input_paket($id) == TRUE ){
						  $this->session->set_flashdata('notif', 'Paket sudah terbeli, silahkan unggah bukti pembayaran');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Owner/Paket/get_user_paket');
	 	               }else{
						  $this->session->set_flashdata('notif', 'Paket gagal terbeli, silahkan coba sekali lagi');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Paket');
			           }	        	  	
        	}else{
        				$this->M_paket->delete_paket() ;
			          if($this->M_paket->input_paket($id) == TRUE ){
						  $this->session->set_flashdata('notif', 'Paket sudah terbeli, silahkan unggah bukti pembayaran');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Owner/Paket/get_user_paket');
	 	               }else{
						  $this->session->set_flashdata('notif', 'Paket gagal terbeli, silahkan coba sekali lagi');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Paket');
			           }

        	}

            }else {
			    redirect('Landing');
            }

    }
   public function upload_payment()
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
					  $config['upload_path'] = 'assets/admin/images/' ;
					  $config['allowed_types'] = 'jpg|png' ;
					  $config['max_size'] = 2000 ;

					  $this->load->library('upload',$config) ;
					    	
					  if($this->upload->do_upload('bukti')){
					       if($this->M_paket->upload_payment($this->upload->data()) == TRUE ){	
							  $this->session->set_flashdata('notif', 'Bukti berhasil ter unggah, tunggu konfirmasi pembayaran');
			               $this->session->set_flashdata('type', 'success');
				        	  redirect('Owner/Paket/get_user_paket');
			 	            }else{
					  		$this->session->set_flashdata('notif', 'Bukti gagal ter unggah, coba upload sekali lagi');
					           $this->session->set_flashdata('type', 'error');                
				        	  redirect('Owner/Paket/get_user_paket');
					           }	        	  	

					  }else{
						       $this->session->set_flashdata('notif', ''.$this->upload->display_errors().'');
						       $this->session->set_flashdata('type', 'error');
				        	  redirect('Owner/Paket/get_user_paket');
					  } 				        	  

            }else {
			    redirect('Landing');
            }

    }
	public function get_user_paket()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
   		    $data['data_paket'] = $this->M_paket->get_paket();       
	        $data['main_view'] 		= 'Owner/User_paket_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}	

}
