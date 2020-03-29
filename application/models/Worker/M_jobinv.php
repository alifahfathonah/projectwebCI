<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jobinv extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET VACANCY
        public function get_inv()
        {
            return $this->db->join('vacancy', 'job_inv.id_vacancy = vacancy.id_vacancy')
                            ->join('login', 'job_inv.id_owner = login.id_login')
                            ->where('job_inv.id_worker', $this->session->userdata('id_login'))
                            ->get('job_inv')
                            ->result();
        }     
    public function get_vacancy_by_id($id)
    {
        return $this->db->join('login', 'vacancy.id_login = login.id_login')
                        ->join('provinces', 'vacancy.provinsi = provinces.id')       
                        ->join('regencies', 'vacancy.kabupaten = regencies.id')
                        ->join('districts', 'vacancy.kecamatan = districts.id')
                        ->join('category', 'vacancy.category = category.id_category')                        
                        ->join('villages', 'vacancy.desa = villages.id')
                        ->where('id_vacancy', $id)
                        ->get('vacancy')
                        ->row();
    }  
             
    // GET VACANCY

    public function read()
    {
        $data = array(
            'read_worker' => 1,
        );

        $this->db->where('id_worker', $this->session->userdata('id_login'))
            ->update('job_inv', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function acc_inv($id_inv)
    {
        $data = array(
            'status_inv' => "diterima" ,
        );

        $this->db->where('id_jobinv', $id_inv)
            ->update('job_inv', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function reject_inv($id_inv)
    {
        $data = array(
            'status_inv' => "ditolak" ,
        );

        $this->db->where('id_jobinv', $id_inv)
            ->update('job_inv', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function input_applied($id_login,$id_vacancy)
    {
            $data = array(
                'id_login' => $id_login,
                'id_vacancy' => $id_vacancy,
                'date_created_app' => date("Y-m-d"),   
                'status_app' => 'diterima'                                        
            );    
            $this->db->insert('apllied_vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }        
}