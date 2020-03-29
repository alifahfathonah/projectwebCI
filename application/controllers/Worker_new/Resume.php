<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Worker/M_resume');	
         $this->load->model('M_master');				
	}

	public function index()
	{
        /*$id_login = $this->session->userdata('id_login') ;
        $sql ="SELECT * FROM login WHERE id_login=$id_login AND status_resume='0' ";
        $query = $this->db->query($sql);
        if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
	        if($query->num_rows() > 0){        
				$data = array(
					'data_prov' => $this->M_resume->get_provinsi(),
					'data_category' => $this->M_resume->get_category()
				);

				$this->load->view('Element/Panel/head_addons');
				$this->load->view('Element/Panel/header');
				$this->load->view('Element/Panel/navbar');
				$this->load->view('Worker_new/Resume_view', $data);
				$this->load->view('Element/Panel/footer_addons');

	        }else{
			    $this->session->set_flashdata('notif', 'Resume sudah ada, anda hanya bisa membuat 1');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');
  
	        }	      
	      }else{
				    $this->session->set_flashdata('notif', 'Lengkapi profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker'); 
	      }		*/
	      $data = array(
					'data_prov' => $this->M_resume->get_provinsi(),
					'data_category' => $this->M_resume->get_category(),
					'resume' => $this->M_resume->get_resume_download()
				);

				$this->load->view('Element/Panel/head_addons');
				$this->load->view('Element/Panel/header');
				$this->load->view('Element/Panel/navbar');
				$this->load->view('Worker_new/Resume_view', $data);
				$this->load->view('Element/Panel/footer_addons');

	}
	public function resume_result()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		    $data['data_resume'] = $this->M_resume->get_resume(); 
		        $data['main_view'] 		= 'Worker/Resume_result_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');
        	}
       	
        } else {
	         redirect('Landing');
        }		
	}	
	public function Resume_result_edit()
	{
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){

	   		    $data['resume'] = $this->M_resume->get_resume_download();         	
	   		    $data['data_resume2'] = $this->M_resume->get_resume2();    		      		
		   		$data['data_category'] = $this->M_resume->get_category(); 

				$this->load->view('Element/Panel/head_addons');
				$this->load->view('Element/Panel/header');
				$this->load->view('Element/Panel/navbar');
				$this->load->view('Worker_new/Resume_result_edit', $data);
				$this->load->view('Element/Panel/footer_addons');
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}  		
	}

	public function Resume_result_detail()
	{
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){

	   		    $data['resume'] = $this->M_resume->get_resume_download();         	
	   		    $data['data_resume2'] = $this->M_resume->get_resume2();    		      		
		   		$data['data_category'] = $this->M_resume->get_category(); 

				$this->load->view('Element/Panel/head_addons');
				$this->load->view('Element/Panel/header');
				$this->load->view('Element/Panel/navbar');
				$this->load->view('Worker_new/Resume_detail', $data);
				$this->load->view('Element/Panel/footer_addons');
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}  		
	}		
		

	public function Resume_result_download()
	{

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		    $data['data_resume_download'] = $this->M_resume->get_resume_download(); 
		        $data['main_view'] = 'Worker/Resume_result_download';   		     
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}         	
        } else {
	         redirect('Landing');
        }		
	}	
	public function Resume_download()
	{
    	/*if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1'){
    		$this->load->helper('pdf_helper');
   		    $data['data_resume_download'] = $this->M_resume->get_resume_download(); 
			$this->load->view('Worker/Resume_download',$data);
    	}else{
		    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
		    $this->session->set_flashdata('type', 'error');                
	       	redirect('Worker/Dashboard_worker');        		
    	} */ 

    	$this->load->helper('pdf_helper');
   		$data['data_resume_download'] = $this->M_resume->get_resume_download(); 
		$this->load->view('Worker/Resume_download',$data); 	
		
	}		

// DROPDOWN
	public function get_kabupaten($id_prov)
	{
			$data_kabupaten = $this->M_resume->get_kabupaten($id_prov);
			echo json_encode($data_kabupaten);
	}	

	public function get_kecamatan($id_kab)
	{
		$data_kecamatan = $this->M_resume->get_kecamatan($id_kab);
		echo json_encode($data_kecamatan);
	}

	public function get_desa($id_kec)
	{
		$data_desa = $this->M_resume->get_desa($id_kec);
		echo json_encode($data_desa);
	}
// DROPDOWN


	// INPUT RESUME
   public function input_resume()
    {
	      /*$id_login = $this->session->userdata('id_login') ;
    	  $sql ="SELECT * FROM login WHERE id_login=$id_login AND status_resume='0' ";
	      $query = $this->db->query($sql); 

        if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
		      if($query->num_rows() > 0){        	
			          if($this->M_resume->input_resume() == TRUE ){
						  $this->M_resume->change_status_resume() ;
						  $this->session->unset_userdata('status_resume');
						  $this->session->set_userdata('status_resume','1');						  
						  $this->session->set_flashdata('notif', 'Resume sudah berhasil dibuat');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Worker/Resume/Resume_result');
	 	               }else{
			              $this->session->set_flashdata('notif', 'Resume Gagal Dibuat');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Resume');
			           }	      
		      }else{
				    $this->session->set_flashdata('notif', 'Resume sudah ada, anda hanya bisa membuat 1');
			        $this->session->set_flashdata('type', 'error');                
			        $data['main_view'] 		= 'Worker/Dashboard_worker';
			        	  redirect('Worker/Dashboard_worker');
		      }	      	  	

        	}else{
				    $this->session->set_flashdata('notif', 'Lengkapi profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');        		
        	}  */ 

        	$data = array(
        		'id_login' => $this->session->userdata("id_login"),
                'name_resume' => $this->input->post('name_resume'),         
                'date_created' => date("Y-m-d"),                       
                'profile' => $this->input->post('profile'),
                'gender' => $this->input->post('gender'),
                'birth_year' => $this->input->post('birth_year'),
                'married' => $this->input->post('married'),
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kecamatan' => $this->input->post('kecamatan'),
                'desa' => $this->input->post('desa'),  
                'location' => $this->input->post('location'),
                'last_education' => $this->input->post('last_education'),
                'history_education' => $this->input->post('history_education'),
                'skill' => $this->input->post('skill'),  
                'time_exp' => $this->input->post('time_exp'),  
                'work_exp' => $this->input->post('work_exp')    
        	);
        	$this->db->insert('resume', $data);

        	//input resume_category tabel
        	$id_resume = $this->M_master->getResumeByIDLogin($this->session->userdata("id_login"))->id_resume;
        	$work_category = $this->input->post('work_category');
        	foreach ($work_category as $k) {
        		$data = array(
        			'id_resume' => $id_resume,
        			'id_category' => $k
        		);
        		$this->db->insert('resume_category', $data);
        	}

        	//change status resume
        	$data = array(
            'status_resume' => "1" ,
        	);
        	$this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);
            /*change session status resume*/
            $this->session->unset_userdata('status_resume');
		 	$this->session->set_userdata('status_resume','1');

		 	$this->session->set_flashdata('notif', 'Resume sudah berhasil dibuat');
		    $this->session->set_flashdata('type', 'success');
        	redirect('Worker_new/Dashboard_worker');

    }
	// INPUT RESUME

	// EDIT RESUME
   public function edit_resume()
    {
    	if($this->session->userdata('status_profile') == '1'){
	          if($this->M_resume->delete_resume() == TRUE && $this->M_resume->input_resume() == TRUE){
		   		  $this->session->set_flashdata('notif', 'Resume sudah berhasil dirubah');
                  $this->session->set_flashdata('type', 'success');
	        	  redirect('Worker_new/Resume/Resume_result_edit');
	               }else{
	              $this->session->set_flashdata('notif', 'Resume gagal dirubah');
	              $this->session->set_flashdata('type', 'error');                
	        	  redirect('Worker_new/Resume/Resume_result_edit');
	           }	      
    	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi profile terlebih dahulu');
		    $this->session->set_flashdata('type', 'error');                
	       	redirect('Worker_new/Dashboard_worker');        		
    	} 

    }

    	function exeEditResume()
	{
		if ($this->session->userdata('status_profile') == '1') {

			$data = array(
                'name_resume' => $this->input->post('name_resume'),                    
                'profile' => $this->input->post('profile'),
                'gender' => $this->input->post('gender'),
                'birth_year' => $this->input->post('birth_year'),
                'married' => $this->input->post('married'),
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kecamatan' => $this->input->post('kecamatan'),
               /* 'desa' => $this->input->post('desa'), */ 
                'location' => $this->input->post('location'),
                'last_education' => $this->input->post('last_education'),
                'history_education' => $this->input->post('history_education'),
                'skill' => $this->input->post('skill'),  
                'time_exp' => $this->input->post('time_exp'),  
                'work_exp' => $this->input->post('work_exp'),                                              
            );  
			
			$where = array('id_resume' => $this->input->post('id_resume'));
			$this->M_master->updateData($where,$data,'resume');
			/*if ($this->M_master->updateData($where,$data,'resume') == TRUE) {*/
				
				$this->M_resume->delete_resume_category($this->input->post('id_resume'));
				$work_category = $this->input->post('work_category');
	        	foreach ($work_category as $k) {
	        		$data = array(
	        			'id_resume' => $this->input->post('id_resume'),
	        			'id_category' => $k
	        		);
	        		$this->db->insert('resume_category', $data);
	        	}

				$this->session->set_flashdata('notif', 'Resume sudah berhasil dirubah');
	            $this->session->set_flashdata('type', 'success');
		       	redirect('Worker_new/Resume/Resume_result_edit');
			/*} else {
				$this->session->set_flashdata('notif', 'Resume gagal dirubah');
	             $this->session->set_flashdata('type', 'error');                
	        	 redirect('Worker_new/Dashboard_worker');
			}*/
		} else {
			$this->session->set_flashdata('notif', 'Lengkapi profile terlebih dahulu');
		    $this->session->set_flashdata('type', 'error');                
	       	redirect('Worker_new/Dashboard_worker');   
		} // if session user id
	}

	// EDIT RESUME

    // DELETE RESUME			
   public function delete_resume()
    {
    	$id_resume = $this->M_master->getResumeByIDLogin($this->session->userdata('id_login'))->id_resume;
    	if($this->session->userdata('status_profile') == '1' ){
	          if($this->M_resume->delete_resume_category($id_resume) == TRUE && $this->M_resume->delete_resume() == TRUE ){
				  $this->M_resume->change_status_resume2() ;		        			          	
				  $this->session->unset_userdata('status_resume');
				  $this->session->set_userdata('status_resume','0');
				  $this->session->set_flashdata('notif', 'Resume berhasil dihapus');
                  $this->session->set_flashdata('type', 'success');
	        	  redirect('Worker_new/Dashboard_worker');
	               }else{
	              $this->session->set_flashdata('notif', 'Resume Gagal dihapus');
	              $this->session->set_flashdata('type', 'error');                
	        	  redirect('Worker_new/Dashboard_worker');
	           }

    	}else{
		    $this->session->set_flashdata('notif', 'Lengkapi profile terlebih dahulu');
		    $this->session->set_flashdata('type', 'error');                
	       	redirect('Worker_new/Dashboard_worker');        		
    	} 

    }

}
