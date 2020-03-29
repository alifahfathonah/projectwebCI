<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }
    public function user_check(){
    $query = $this->db->where('email', $this->input->post('email'))
              ->where('password', md5($this->input->post('password')))
              ->get('login');

    if($query->num_rows() == 1){
      $data_login = $query->row();
      $session = array(
        'logged_in'		=>	TRUE,
        'id_login'			=>	$data_login->id_login,
        'email'			=>	$data_login->email,
        'password'  =>  $data_login->password,    
        'level' =>  $data_login->level, 
        'name' =>  $data_login->name,                               
        'status_email_ver'	=>	$data_login->status_email_ver,
        'status_profile'  =>  $data_login->status_profile,
        'status_resume'  =>  $data_login->status_resume,
        'status_vacancy'  =>  $data_login->status_vacancy,                        
        'picture'         =>  $data_login->picture,
      );
      $this->session->set_userdata($session);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  // REGISTER
   public function cek_user(){
    $query = $this->db->where('email', $this->input->post('email'))
              ->get('login');

    if($query->num_rows() == 1){
       return FALSE;
    } else {
      return TRUE;
    }
  }
    public function create_user($token)
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
            'token' => $token,
            'date_created' => date("Y-m-d")
        );

        $this->db->insert('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
  // REGISTER


  //VERIFIKASI
  public function cek_token_email(){
    $query = $this->db->where('token', $this->uri->segment(3))
              ->get('login');

    if($query->num_rows() == 1){
       return TRUE;
    } else {
      return FALSE;
    }
  }
    public function ver_status_email()
    {
        $data = array(
            'status_email_ver' => "1" ,
        );

        $this->db->where('token', $this->uri->segment(3))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
  //VERIFIKASI

    function getLoginByID($id)
  {
    $this->db->select('*');
    $this->db->where('id_login',$id);
    $query = $this->db->get('login');
    return $query->row();

  }



}
