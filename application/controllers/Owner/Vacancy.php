<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Owner/M_vacancy');
        $this->load->model('Worker/M_resume');	
        $this->load->model('M_master');		

	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		$data['data_prov'] = $this->M_vacancy->get_provinsi();
   		    $data['data_category'] = $this->M_vacancy->get_category();    	   		
	        $data['main_view'] = 'Owner/Vacancy_form_view';
			$this->load->view('Index',$data);

	      }else{
		      		$this->session->set_flashdata('notif', ' lengkapi profile / verifkasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
	      }

        } else {
	          redirect('Landing');
        }		
	}
	// INPUT RESUME
   public function input_vacancy()
    {

// echo $this->M_vacancy->cek_paket_posts() ;
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
        	$max = $this->M_vacancy->cek_paket_date() ;
			$maxdate=date('Y-m-d', strtotime("+".$max->length_post." days"));
	      if($this->session->userdata('status_profile') == '1' ){
			     if($this->M_vacancy->cek_paket() == TRUE ){
				     if($this->M_vacancy->cek_paket_posts() == TRUE ){
					     if($this->input->post('closing_date') <= $maxdate ){
				          if($this->M_vacancy->input_vacancy() == TRUE ){
							  $this->M_vacancy->change_status_vacancy() ;

							  //iklan premium
							  if ($this->input->post('premium') == '1') {
							  	$kuota_premium = $this->M_master->getPaketByIDLogin($this->session->userdata('id_login'))->kuota_premium;

							  	$update_premium = array(
							  		'kuota_premium' => $kuota_premium - 1
							  	);
							  	$where = array('id_login' => $this->session->userdata('id_login'));
							  	$this->M_master->updateData($where,$update_premium,'paket');
							  }

							  $this->session->unset_userdata('status_vacancy');
							  $this->session->set_userdata('status_vacancy','1');
							  $this->session->set_flashdata('notif', 'Iklan Lowongan sudah berhasil dibuat');
			                  $this->session->set_flashdata('type', 'success');
				        	  redirect('Owner/Vacancy/vacancy_result');

		 	               }else{
				              $this->session->set_flashdata('notif', 'Iklan Lowongan Gagal Dibuat');
				              $this->session->set_flashdata('type', 'error');                
				        	  redirect('Owner/Vacancy');
				           }	        	  				     
					     
					     }else{
			              $this->session->set_flashdata('notif', 'Rentan waktu pembukaan lowongan terlalu lama (tidak sesuai paket');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Vacancy');

  					     }
				     
				     }else{
			              $this->session->set_flashdata('notif', 'Jumlah lowongan anda sudah melebihi batas maksimal');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Vacancy');
				     }
			     }else{
			              $this->session->set_flashdata('notif', 'paket anda belum terkonfirmasi / belum terbayar / Anda belum mempunyai paket. tunggu konfirmasi pembayaran jika sudah upload bukti / segera bayar paket bila belum membayar');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Vacancy');
			     }
	      }else{
		      		$this->session->set_flashdata('notif', 'lengkapi profile terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
	      }

            }else {
			    redirect('Landing');
            }

    }
	// INPUT RESUME


  // GET VACANCY

	public function vacancy_result()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
	   		    $data['data_category'] = $this->M_vacancy->get_category();    	   		
	   		    $data['data_vacancy'] = $this->M_vacancy->get_vacancy(); 
		        $data['main_view'] 		= 'Owner/Vacancy_view';
				$this->load->view('Index',$data);
		      }else{
		      		$this->session->set_flashdata('notif', 'lengkpi profile / verifiksi email terlebih dahulu');
				    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
		      }

        } else {
	         redirect('Landing');
        }		
	}	
    public function get_apllied_vacancy($id)
    {
        $get_apllied_vacancy = $this->M_vacancy->get_apllied_vacancy($id);
        echo json_encode($get_apllied_vacancy);
    }
    public function get_apllied_vacancy_acc($id)
    {
        $get_apllied_vacancy_acc = $this->M_vacancy->get_apllied_vacancy_acc($id);
        echo json_encode($get_apllied_vacancy_acc);
    }	    	
	public function read($id)
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
			$this->M_vacancy->read($id) ;        	
        	redirect("Owner/Vacancy/get_applicant/$id") ;

        } else {
	         redirect('Landing');
        }		
	}	
	// GET VACANCY 



	// GET RESUME
	public function get_resume_app($id)
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
				   $data['data_resume_download'] = $this->M_vacancy->get_resume_download($id); 
				   $data['data_resume2'] = $this->M_vacancy->get_resume2(); 
		        $data['main_view'] 		= 'Owner/App_resume';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
        	}
       	
        } else {
	         redirect('Landing');
        }		
	}	

	public function get_applicant($id_apllied)
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
				   $data['data_resume_download'] = $this->M_vacancy->getAplliedByID($id_apllied); 
				   //$data['data_resume2'] = $this->M_vacancy->get_resume2(); 
				$data['id_apllied'] = $id_apllied;
		        $data['main_view'] 	= 'Owner/Applicant_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
        	}
       	
        } else {
	         redirect('Landing');
        }		
	}	
	// GET RESUME	

	// ACCPET APP	
   public function accept_app($id)
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
			          if($this->M_vacancy->status_app($id) == TRUE ){
						  $this->M_vacancy->read_worker($id) ;		
	            	  //EMAIL
							$config = [
				               'useragent' => 'CodeIgniter',
				               'protocol'  => 'smtp',
				               'mailpath'  => '/usr/sbin/sendmail',
				               'smtp_host' => 'srv91.niagahoster.com',
				               'smtp_user' => 'sdm@apsintegra.net',   
				               'smtp_pass' => 'loker123',             // Password gmail Anda.
				               'smtp_port' => 465,
				               'smtp_keepalive' => TRUE,
				               'smtp_crypto' => 'ssl',
				               'wordwrap'  => TRUE,
				               'wrapchars' => 80,
				               'mailtype'  => 'html',
				               'charset'   => 'utf-8',
				               'validate'  => TRUE,
				               'crlf'      => "\r\n",
				               'newline'   => "\r\n",
			           ];

				        // Load library email dan konfigurasinya.
				         $this->email->initialize($config);

						  $to_mail =  $this->M_vacancy->getAplliedByID($id)->email;
						  $from_email = "sdm@apsintegra.net";
						//   $from_email = $this->session->userdata('email'); jika sudah bisa saya sarankan pakai ini
						  $this->email->from($from_email, 'Loker');
						  $this->email->to($to_mail);
						  $this->email->subject('Pemberitahuan Lamaran Pekerjaan');

						  $id_pelamar = $this->M_vacancy->getAplliedByID($id)->id_login;
						  $data = array(
						  	'pelamar' => $this->M_master->getLoginByID($id_pelamar)
						  );
						  $massage = $this->load->view('Email/acclamaran_email', $data, TRUE);
						  $this->email->message($massage);

						  $this->email->set_mailtype('html');
						  $this->email->send();				  
							//EMAIL							  	          	
						  $this->session->set_flashdata('notif', 'Selamat anda telah memilih pekerja');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Owner/Vacancy/vacancy_result');
	 	               }else{
			              $this->session->set_flashdata('notif', 'Gagal memilih pekerja');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Vacancy/vacancy_result');
			           }	        	  	
	      }else{
		      		$this->session->set_flashdata('notif', 'lengkapi profil / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
	      }

            }else {
			    redirect('Landing');
            }

    }
	// ACCPET APP	

    // CLOSE VACANCY
   public function close_vacancy($id)
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
	      if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_email_ver') == '1'){
			          if($this->M_vacancy->close_vacancy($id) == TRUE ){
						  $this->session->set_flashdata('notif', 'Lowongan Pekerjaan Anda Sudah Ditutup');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Owner/Vacancy/vacancy_result');
	 	               }else{
						  $this->session->set_flashdata('notif', 'Lowongan Pekerjaan Anda Gagal Ditutup');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Vacancy/vacancy_result');
			           }	        	  	
	      }else{
		      		$this->session->set_flashdata('notif', 'lengkapi profile / verifiksi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Owner/Dashboard_owner') ;
	      }

            }else {
			    redirect('Landing');
            }

    }    
    // CLOSE VACANCY

    // DELETE RESUME			
   public function delete_vacancy($id)
    {
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
		          if($this->M_vacancy->delete_vacancy($id) == TRUE ){
			   		  $this->session->set_flashdata('notif', 'Resume berhasil dihapus');
	                  $this->session->set_flashdata('type', 'success');
			          redirect('Owner/Vacancy/vacancy_result');
 	               }else{
		              $this->session->set_flashdata('notif', 'Resume Gagal dihapus');
		              $this->session->set_flashdata('type', 'error');                
			          redirect('Owner/Vacancy/vacancy_result');
		           }
            }else {
			    redirect('Landing');
            }

    }		

    // EDIT VACANCY
    public function get_vacancy_by_id($id)
    {
        $data_vacancy_by_id = $this->M_vacancy->get_vacancy_by_id($id);
        echo json_encode($data_vacancy_by_id);
    }
   public function edit_vacancy()
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 2){
			          if($this->M_vacancy->edit_vacancy() == TRUE ){
						  // $this->M_vacancy->change_status_vacancy2() ;	
						  // $this->session->unset_userdata('status_vacancy');
						  // $this->session->set_userdata('status_vacancy','0');
						  $this->session->set_flashdata('notif', 'Iklan Lowongan sudah berhasil Diubah');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Owner/Vacancy/vacancy_result');
	 	               }else{
			              $this->session->set_flashdata('notif', 'Iklan Lowongan Gagal Dibuat');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Owner/Vacancy');
			           }	        	  	
            }else {
			    redirect('Landing');
            }

    }    
    // EDIT VACANCY
}
