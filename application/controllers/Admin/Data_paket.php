<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_paket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Admin/M_data_paket');		
        $this->load->model('M_master');

	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
   		    $data['data_paket'] = $this->M_data_paket->get_paket();               	
	        $data['main_view'] = 'Admin/Data_paket_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}

   public function delete_paket($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_paket->delete_paket($id) == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Paket berhasil dihapus');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_paket');
 	               }else{
		              $this->session->set_flashdata('notif', 'Paket Gagal dihapus');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_paket');
		           }
            }else {
			    redirect('Landing');
            }

    }		
   public function input_paket()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_paket->input_paket() == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Paket berhasil ditambah');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_paket');
 	               }else{
		              $this->session->set_flashdata('notif', 'Paket Gagal ditambah');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_paket');
		           }
            }else {
			    redirect('Landing');
            }

    }
   public function change_paket()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_paket->edit_paket() == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Paket berhasil diubah');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_paket');
 	               }else{
		              $this->session->set_flashdata('notif', 'Paket Gagal diubah');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_paket');
		           }
            }else {
			    redirect('Landing');
            }

    } 
    public function get_paket_by_id($id)
    {
        $get_paket_by_id = $this->M_data_paket->get_paket_by_id($id);
        echo json_encode($get_paket_by_id);
    }       		
}
