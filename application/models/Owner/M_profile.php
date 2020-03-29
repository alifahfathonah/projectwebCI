<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }




  // CHANGE PROFILE
    public function change_profile_owner($foto)
    {
        $data = array(
            'name' => $this->input->post('nama'),
            'phone' => $this->input->post('phone'),
            'website' => $this->input->post('website'),
            'twitter' => $this->input->post('twitter'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'description' => $this->input->post('description'),
            'num_employer' => $this->input->post('num_employer'),
            'provinsi' => $this->input->post('provinsi'),
            'kabupaten' => $this->input->post('kabupaten'),
            'kecamatan' => $this->input->post('kecamatan'),
            'sector' => $this->input->post('sector'),            
            'desa' => $this->input->post('desa'),
            'address1' => $this->input->post('address1'),                                                            
            
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
    public function change_profile_owner2()
    {
        $data = array(
            'name' => $this->input->post('nama'),
            'phone' => $this->input->post('phone'),
            'website' => $this->input->post('website'),
            'twitter' => $this->input->post('twitter'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'description' => $this->input->post('description'),
            'num_employer' => $this->input->post('num_employer'),
            'sector' => $this->input->post('sector'),
            'address1' => $this->input->post('address1'),                                                            
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function change_password_owner()
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


  // GET DROPDOWN
    public function get_provinsi()
    {
        return $this->db->get('provinces')
                        ->result();
    }
    public function get_kabupaten2()
    {
        return $this->db->get('regencies')
                        ->result();
    }    
    public function get_kecamatan2()
    {
        return $this->db->get('districts')
                        ->result();
    }    
    public function get_desa2()
    {
        return $this->db->get('villages')
                        ->result();
    }   

    public function get_kabupaten($prov)
    {
        return $this->db->where('province_id', $prov)
                        ->get('regencies')
                        ->result();
    }    
    public function get_kecamatan($kab)
    {
        return $this->db->where('regency_id', $kab)
                        ->get('districts')
                        ->result();
    }    
    public function get_desa($kec)
    {
        return $this->db->where('district_id', $kec)
                        ->get('villages')
                        ->result();
    }   
    public function get_sector()
    {
        return $this->db->get('sector')
                        ->result();
    } 

    function getSectorByID($id)
    {
        $this->db->select('*');
        $this->db->where('id_sector',$id);
        $query = $this->db->get('sector');
        return $query->row();

    }  
  // GET DROPDOWN


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
