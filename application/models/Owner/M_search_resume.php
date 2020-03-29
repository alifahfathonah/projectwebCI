<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_search_resume extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }
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
    public function get_category()
    {
        return $this->db->get('category')
                        ->result();
    }   
    public function get_vacancy()
    {
        return $this->db->where('status', "dibuka")  
                        ->where('id_login',$this->session->userdata('id_login'))
                        ->get('vacancy')
                        ->result();
    }     
    public function get_resume_id($id)
    {
        return $this->db->where('id_login', $id)
                        ->get('resume')
                        ->result();
    }       
  // GET DROPDOWN

    public function get_resume_by_search($limit,$start)
    {
        if($this->input->post('title') != NULL && $this->session->userdata('title') == NULL){
            $this->db->where('title',$thisis->input->post('title'));
          }elseif($this->input->post('title') != NULL && $this->session->userdata('title') != NULL){
            $this->session->unset_userdata('title');
            $this->session->set_userdata('title',$this->input->post('title'));
          }  
          if($this->input->post('kabupaten') != NULL && $this->session->userdata('kabupaten') == NULL){
            $this->session->set_userdata('kabupaten',$this->input->post('kabupaten'));
          }elseif($this->input->post('kabupaten') != NULL && $this->session->userdata('kabupaten') != NULL){
            $this->session->unset_userdata('kabupaten');
            $this->session->set_userdata('kabupaten',$this->input->post('kabupaten'));
          }  
          if($this->input->post('category') != NULL && $this->session->userdata('category') == NULL){
            $this->session->set_userdata('category',$this->input->post('category'));
          }elseif($this->input->post('category') != NULL && $this->session->userdata('category') != NULL){
            $this->session->unset_userdata('category');
            $this->session->set_userdata('category',$this->input->post('category'));
          } 
          if($this->input->post('education') != NULL && $this->session->userdata('education') == NULL){
            $this->session->set_userdata('education',$this->input->post('education'));
          }elseif($this->input->post('education') != NULL && $this->session->userdata('education') != NULL){
            $this->session->unset_userdata('education');
            $this->session->set_userdata('education',$this->input->post('education'));
          }
         $this->db->limit($limit,$start) ;
        $this->db->join('login', 'resume.id_login = login.id_login');
        $this->db->join('category', 'resume.work_category = category.id_category')   ;                     
        $this->db->join('provinces', 'resume.provinsi = provinces.id')       ;
        $this->db->join('regencies', 'resume.kabupaten = regencies.id');
        if( $this->session->userdata('category') != NULL) {
            $this->db->where('work_category', $this->session->userdata('category') );
        }                
        if($this->session->userdata('kabupaten') != NULL) {
            $this->db->where('resume.kabupaten', $this->session->userdata('kabupaten') );
        }                
        if($this->session->userdata('education')  != NULL) {
            $this->db->where('last_education', $this->session->userdata('education') );
        }
        if( $this->session->userdata('title') != NULL) {
            $this->db->like('name_resume', $this->session->userdata('title') );
            $this->db->or_like('login.name', $this->session->userdata('title') );

        }                                                  
        $this->db->group_by('resume.id_login');                         
        $query = $this->db->get('resume');
        return $query->result();
    }    
    public function get_resume_total_record()
    {
        $query = $this->db->join('login', 'resume.id_login = login.id_login');
        $this->db->join('category', 'resume.work_category = category.id_category');                        
        $this->db->join('provinces', 'resume.provinsi = provinces.id')    ;   
        $this->db->join('regencies', 'resume.kabupaten = regencies.id');
        $this->db->join('districts', 'resume.kecamatan = districts.id');
        $this->db->join('villages', 'resume.desa = villages.id')  ;   
        if( $this->session->userdata('category') != NULL) {
            $this->db->where('work_category', $this->session->userdata('category') );
        }                
        if($this->session->userdata('kabupaten') != NULL) {
            $this->db->where('resume.kabupaten', $this->session->userdata('kabupaten') );
        }                
        if($this->session->userdata('education')  != NULL) {
            $this->db->where('last_education', $this->session->userdata('education') );
        }
        if( $this->session->userdata('title') != NULL) {
            $this->db->like('name_resume', $this->session->userdata('title') );
            $this->db->or_like('login.name', $this->session->userdata('title') );

        }                             
        $query = $this->db->from('resume');
        return  $query->count_all_results();        
    }    

//INVITER
    public function cek_max_job_inv()
    {
        $max_post =  $this->db->join('upgrade', 'paket.id_upgrade = upgrade.id_upgrade')
                        ->join('login', 'paket.id_login = login.id_login')        
                        ->select('job_inv')
                        ->where('paket.id_login', $this->session->userdata("id_login"))
                        ->where('status', 'terbayar')
                        ->from('paket') 
                        ->get()->result() ;
        $max = 0 ;
        foreach ($max_post as $d ) {
            $max += $d->job_inv ;
        }

        $query = $this->db->where('id_owner', $this->session->userdata("id_login"))
                        ->get('job_inv') ;
            if($query->num_rows() >= $max){
                return FALSE ;
            }else{
                return TRUE ;
            }
    }    
    public function invite_worker()
    {
            $data = array(
                'id_worker' => $this->input->post("id_login"),
                'id_vacancy' => $this->input->post("id_vacancy"),
                'message' => $this->input->post("message"),
                'id_owner' => $this->session->userdata("id_login"),                                                
                'date_created_inv' => date("Y-m-d"),                                                
            );    
            $this->db->insert('job_inv', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    } 
   public function cek_inv(){
    $query = $this->db->where('id_worker', $this->input->post('id_login'))
                      ->where('id_vacancy', $this->input->post('id_vacancy'))                            
                     ->get('job_inv');

    if($query->num_rows() == 1){
       return FALSE;
    } else {
      return TRUE;
    }
  }    
    public function data_job_inv()
        {
            return $this->db->join('vacancy', 'job_inv.id_vacancy = vacancy.id_vacancy')
                            ->join('login', 'job_inv.id_worker = login.id_login')
                            ->where('job_inv.id_owner', $this->session->userdata("id_login"))
                            ->get('job_inv')
                            ->result();
        }                          
}