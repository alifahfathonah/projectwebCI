<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('M_login');
         $this->load->model('M_master');		
	}
      public function randomString($length = 100) {
	      $str = "";
	      $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	      $max = count($characters) - 1;
	      for ($i = 0; $i < $length; $i++) {
	        $rand = mt_rand(0, $max);
	        $str .= $characters[$rand];
	      }
	      return $str ;
      }
  //LOGIN
	  public function do_login()
	  {
	    if($this->session->userdata('logged_in') == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');  					
			  	  redirect('Worker/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}		    
			} else {
	        if($this->M_login->user_check() == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Worker/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}	        	
	        } else {
	          $this->session->set_flashdata('notif', 'Usernamae atau password salah!, cek kembali username dan password anda');
	          $this->session->set_flashdata('type', 'error');
	          redirect('Landing');
	        }
	      }
	   }

	   //login new
	   /* public function do_login()
	  {
	    if($this->session->userdata('logged_in') == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');  					
			  	  redirect('Worker_new/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner_new/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}		    
			} else {
	        if($this->M_login->user_check() == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Worker_new/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner_new/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}	        	
	        } else {
	          $this->session->set_flashdata('notif', 'Usernamae atau password salah!, cek kembali username dan password anda');
	          $this->session->set_flashdata('type', 'error');
	          redirect('Landing');
	        }
	      }
	   }
*/

	  public function logout(){
	    if($this->session->userdata('logged_in') == TRUE){
				$this->session->sess_destroy();		

		          redirect('Landing');
	    }
	  }	   
// LOGIN


// REGISTER 
   public function create_user()
    {

            if($this->M_login->cek_user() == TRUE ){
	            if($this->input->post('password') == $this->input->post('password_ver') ){
	            	  //EMAIL

	            	$config = [
		               'useragent' => 'CodeIgniter',
		               'protocol'  => 'smtp',
		               'mailpath'  => '/usr/sbin/sendmail',
		               'smtp_host' => 'srv91.niagahoster.com',
		               'smtp_user' => 'sdm@apsintegra.net',   // Ganti dengan email gmail Anda.
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

			        $token = $this->randomString();
			        $data = array(
			        	'token' => $token
			        );
			        $to_mail = $this->input->post('email') ;
			        $from_email = "sdm@apsintegra.net";
			        $this->email->from($from_email, 'noreply');
			        $this->email->to($to_mail);
			        $this->email->subject('Verifikasi Email Anda');

			        $massage = $this->load->view('Email/email', $data, TRUE);
			        $this->email->message($massage);
			        $this->email->set_mailtype('html');
	            	  //EMAIL	 
		            if($this->email->send()){	            	
		            	if($this->M_login->create_user($token) == TRUE ){
			         		  $this->session->set_flashdata('notif', 'Selamat anda berhasil terdaftar, periksa email anda dan lakukan verifikasi');
			                  $this->session->set_flashdata('type', 'success');
				        	  redirect('Landing');
 		                }else{
		                  $this->session->set_flashdata('notif', 'gagal mendaftar');
		                  $this->session->set_flashdata('type', 'error');                
			        	  redirect('Landing');
		                }

				          }else{
				          	//var_dump($this->email->print_debugger());exit();
				              $this->session->set_flashdata('notif', 'Failed Send Mail');
				              $this->session->set_flashdata('type', 'error');
				     		 redirect('Landing');
				          }
	            }else{
	                  $this->session->set_flashdata('notif', 'Password satu dengan yang lain tidak sama, mohon cek kembali password anda');
	                  $this->session->set_flashdata('type', 'error');                
		        	  redirect('Landing');
	            }
            }else {
                $this->session->set_flashdata('notif', 'Email sudah terdaftar');
                $this->session->set_flashdata('type', 'error');
	        	  redirect('Landing');
            }

    }
	  public function ver_email()
	  {

	        if($this->M_login->cek_token_email() == TRUE){
		        if($this->M_login->ver_status_email() == TRUE){
						  $this->session->unset_userdata('status_resume');
						  $this->session->set_userdata('status_email_ver','1');		        	
		        	$this->session->set_flashdata('notif', 'Selamat, akun Anda sudah terverifikasi. silahkan login');
			        $this->session->set_flashdata('type', 'success');
				   	redirect('Landing');
		        } else {
		          $this->session->set_flashdata('notif', 'gagal ubah status ver email');
		          $this->session->set_flashdata('type', 'error');
		          redirect('Landing');
		        }	        	

	        } else {
	          $this->session->set_flashdata('notif', 'Token salah, silakan lakukan registrasi ulang');
	          $this->session->set_flashdata('type', 'error');
	          redirect('Landing');
	        }
	   }    
// REGISTER

	public function emailPass()
	{
		$this->load->view('Element/Landing/head');
		$this->load->view('Element/Landing/navbar');
		$this->load->view('emailPassword_view');
		$this->load->view('Element/Landing/footer');

	}

   public function sendEmailPass()
	{
		//validasi email
		$email = $this->input->post('email');
		$where = array( 'email' => $email);
		$cek = $this->M_master->cekData("login",$where)->num_rows();
	    if ($cek > 0) {
	    	//echo "email terdaftar";
	    	//send link via email
    		$config = [
	               'useragent' => 'CodeIgniter',
	               'protocol'  => 'smtp',
	               'mailpath'  => '/usr/sbin/sendmail',
	               'smtp_host' => 'srv91.niagahoster.com',
	               'smtp_user' => 'sdm@apsintegra.net',   // Ganti dengan email gmail Anda.
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

	        //update token
	        $pengguna = $this->M_master->getLoginByEmail($email);
	        $data = array(
	        	'token' => $this->randomString()
	        );
	        $where = array('id_login' => $pengguna->id_login);
			$this->M_master->updateData($where,$data,'login');

			///send email
	        $data = array(
	        	'pengguna' => $this->M_master->getLoginByEmail($email),
	        );
	        $to_mail = $this->input->post('email') ;
	        $from_email = "sdm@apsintegra.net";
	        $this->email->from($from_email, 'noreply');
	        $this->email->to($to_mail);
	        $this->email->subject('Reset Password');
	        $massage = $this->load->view('Email/linkResetPass_email', $data, TRUE);
	        $this->email->message($massage);
	        $this->email->set_mailtype('html');
	        if ($this->email->send()) {
	        	$this->session->set_flashdata('notif', 'Link reset password telah dikirim. Silahkan cek email Anda');
		        $this->session->set_flashdata('type', 'success');
	        } else {
	        	$this->session->set_flashdata('notif', 'Gagal kirim email');
   				$this->session->set_flashdata('type', 'error');
	        }
	        redirect('Auth/emailPass');
	    } else {
	    	$this->session->set_flashdata('notif', 'Tidak ada pengguna terdaftar dengan alamat email tersebut.');
	        $this->session->set_flashdata('type', 'error');
	        redirect('Auth/emailPass');
	    }

	}

	public function resetPass()
	{	

		if($this->M_login->cek_token_email() == TRUE){ 
			$this->load->view('Element/Landing/head');
			$this->load->view('Element/Landing/navbar');
			$this->load->view('resetPassword_view');
			$this->load->view('Element/Landing/footer');
		 } else {
		 	$this->session->set_flashdata('notif', 'Token tidak berlaku');
   			$this->session->set_flashdata('type', 'error');
	        redirect('Auth/emailPass');
		 }
	}

	/*public function resetPass()
	{	
		$this->load->view('Element/Landing/head');
		$this->load->view('Element/Landing/navbar');
		$this->load->view('resetPassword_view');
		$this->load->view('Element/Landing/footer');
	}*/

	public function updatePass()
	{	
		$pass_baru = $this->input->post('pass_baru');
		$konfirmasi_pass = $this->input->post('konfirmasi_pass');

		if ($pass_baru == $konfirmasi_pass) {
			$data = array(
				'password' => md5($pass_baru)
			);
			$id_login = $this->M_master->getLoginByToken($this->input->post('token'))->id_login;
			$where = array('id_login' => $id_login);
			$this->M_master->updateData($where,$data,'login');

			//update token again
			$data = array(
				'token' => ''
			);
			$where = array('id_login' => $id_login);
			$this->M_master->updateData($where,$data,'login');
			//notif sukses update
			$this->session->set_flashdata('notif', 'Reset Password Berhasil. Silahkan login dengan password baru Anda');
		    $this->session->set_flashdata('type', 'success');
		    redirect('Landing');
		} else {
			$this->session->set_flashdata('notif', 'Password yang dimasukan tidak sama');
	        $this->session->set_flashdata('type', 'error');
	        redirect('Auth/resetPass/'.$this->input->post('token'));
		}
	}

}
