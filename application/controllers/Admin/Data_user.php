<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Admin/M_data_user');
        $this->load->model('M_master');		

	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
   		    $data['data_user'] = $this->M_data_user->get_user();               	
	        $data['main_view'] = 'Admin/Data_user_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}

   public function delete_user($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_user->delete_user($id) == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Penggunna berhasil dihapus');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_user');
 	               }else{
		              $this->session->set_flashdata('notif', 'Penggunna Gagal dihapus');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_user');
		           }
            }else {
			    redirect('Landing');
            }

    }		

}
