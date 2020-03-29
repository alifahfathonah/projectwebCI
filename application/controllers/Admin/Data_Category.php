<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Admin/M_data_category');
         $this->load->model('M_master');			

	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
   		    $data['data_category'] = $this->M_data_category->get_category();               	
	        $data['main_view'] = 'Admin/Data_category_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}

   public function delete_category($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_category->delete_category($id) == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Kategory berhasil dihapus');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_Category');
 	               }else{
		              $this->session->set_flashdata('notif', 'Kategory Gagal dihapus');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_Category');
		           }
            }else {
			    redirect('Landing');
            }

    }		
   public function input_category()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
        	/*var_dump($this->M_data_category->input_category());exit();*/
		          if($this->M_data_category->input_category() == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Kategory berhasil ditambah');
	                  $this->session->set_flashdata('type', 'success');
			          //redirect('Admin/Data_Category');

 	               }else{
		              $this->session->set_flashdata('notif', 'Kategory Gagal dihapus');
		              $this->session->set_flashdata('type', 'error');                
			          //redirect('Admin/Data_Category');
		           }
		           redirect('Admin/Data_Category');
            }else {
			    redirect('Landing');
            }

    }
   public function change_category()
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 3){
		          if($this->M_data_category->edit_category() == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Kategory berhasil diubah');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Admin/Data_Category');
 	               }else{
		              $this->session->set_flashdata('notif', 'Kategory Gagal diubah');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Admin/Data_Category');
		           }
            }else {
			    redirect('Landing');
            }

    }    		
    public function get_category_by_id($id)
    {
        $get_category_by_id = $this->M_data_category->get_category_by_id($id);
        echo json_encode($get_category_by_id);
    }	    
}
