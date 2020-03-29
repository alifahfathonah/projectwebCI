<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accept_payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Admin/M_data_acc_payment');		
         $this->load->model('M_master');	

	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
   		    $data['data_user'] = $this->M_data_acc_payment->get_payment();               	
	        $data['main_view'] = 'Admin/Data_accpayment_view.php';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}
	   public function accept_payment($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_acc_payment->acc_payment($id) == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Pembayaran Diterima');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Accept_payment');
 	               }else{
		              $this->session->set_flashdata('notif', 'Pembayaran Gagal Diterima');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Accept_payment');
		           }
            }else {
			    redirect('Landing');
            }

    }		
	   public function reject_payment($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_acc_payment->rej_payment($id) == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Pembayaran Ditolak');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Accept_payment');
 	               }else{
		              $this->session->set_flashdata('notif', 'Pembayaran Gagal Diterima');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Accept_payment');
		           }
            }else {
			    redirect('Landing');
            }

    }	
}
