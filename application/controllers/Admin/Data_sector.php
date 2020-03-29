<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_sector extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Admin/M_data_sector');
        $this->load->model('M_master');		

	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
   		    $data['data_sector'] = $this->M_data_sector->get_sector();               	
	        $data['main_view'] = 'Admin/Data_sector_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}

   public function delete_sector($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_sector->delete_sector($id) == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Bidang Usaha berhasil dihapus');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_sector');
 	               }else{
		              $this->session->set_flashdata('notif', 'Bidang Usaha Gagal dihapus');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_sector');
		           }
            }else {
			    redirect('Landing');
            }

    }		
   public function input_sector()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_sector->input_sector() == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Bidang Usaha berhasil ditambah');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_sector');
 	               }else{
		              $this->session->set_flashdata('notif', 'Bidang Usaha Gagal dihapus');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_sector');
		           }
            }else {
			    redirect('Landing');
            }

    }
   public function change_sector()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_sector->edit_sector() == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Bidang Usaha berhasil diubah');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_sector');
 	               }else{
		              $this->session->set_flashdata('notif', 'Bidang Usaha Gagal diubah');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_sector');
		           }
            }else {
			    redirect('Landing');
            }

    }    		
    public function get_sector_by_id($id)
    {
        $get_sector_by_id = $this->M_data_sector->get_sector_by_id($id);
        echo json_encode($get_sector_by_id);
    }    		
}
