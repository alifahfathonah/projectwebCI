<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

  // CHANGE PROFILE
    public function change_profile_worker($foto)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'website' => $this->input->post('website'),
            'twitter' => $this->input->post('twitter'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'picture' => $foto['file_name'] 
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function change_profile_worker2()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'website' => $this->input->post('website'),
            'twitter' => $this->input->post('twitter'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function change_password_worker()
    {
        $data = array(
            'password' =>  md5($this->input->post('password')),
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    

  // CHANGE PROFILE


  // CHANGE STATUS
    public function change_status_profile()
    {
        $data = array(
            'status_profile' => "1" ,
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
  // CHANGE STATUS



    public function get_user_by_id()
    {
        return $this->db->where('id_login', $this->session->userdata('id_login'))
            ->get('login')
            ->row();
    }	

}
