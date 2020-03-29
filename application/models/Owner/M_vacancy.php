<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_vacancy extends CI_Model{

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
  // GET DROPDOWN

// CEK PAKET
    public function cek_paket()
    {
        $query =  $this->db->join('upgrade', 'paket.id_upgrade = upgrade.id_upgrade')
                        ->join('login', 'paket.id_login = login.id_login')        
                        ->where('paket.id_login', $this->session->userdata("id_login"))
                        ->where('status', 'terbayar')
                        ->get('paket') ;
            if($query->num_rows() > 0){
                return TRUE ;
            }else{
                return FALSE ;
            }

    }     
    public function cek_paket_posts()
    {
        $max_post =  $this->db->join('upgrade', 'paket.id_upgrade = upgrade.id_upgrade')
                        ->join('login', 'paket.id_login = login.id_login')        
                        ->select('num_post')
                        ->where('paket.id_login', $this->session->userdata("id_login"))
                        ->where('status', 'terbayar')
                        ->from('paket') 
                        ->get()->result() ;
        $max = 0 ;
        foreach ($max_post as $d ) {
            $max += $d->num_post ;
        }

        $query = $this->db->where('id_login', $this->session->userdata("id_login"))
                        ->get('vacancy') ;
            if($query->num_rows() >= $max){
                return FALSE ;
            }else{
                return TRUE ;
            }
    }    
    public function cek_paket_date()
    {
        return $this->db->join('upgrade', 'paket.id_upgrade = upgrade.id_upgrade')
                        ->join('login', 'paket.id_login = login.id_login')        
                        ->where('paket.id_login', $this->session->userdata("id_login"))
                        ->where('status', 'terbayar')
                        ->get('paket')->row() ;

    }  
    public function cek_closing_date()
    {
        $data = array(
            'status' => 'ditutup',
        );

        $this->db->where('closing_date <=',date('Y-m-d'))
            ->update('vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }                 
// CEK PAKET


  // INPUT VACANCY

    public function input_vacancy()
    {
            
            if ($this->input->post('premium') == '1') {
                $premium = 'yes';
                $open_date = date("Y-m-d");
                $exp_headline = date('Y-m-d', strtotime('+14 days', strtotime($open_date))); 
            } else {
                $premium = 'no';
                $exp_headline = Null;
            }

            $data = array(
                'id_login' => $this->session->userdata("id_login"),
                'title' => $this->input->post('title'),         
                'open_date' => date("Y-m-d"),                       
                'description' => $this->input->post('description'),
                'closing_date' => $this->input->post('closing_date'),
                'education' => $this->input->post('education'),
                'responsibility' => $this->input->post('responsibility'), 
                'req_exp' => $this->input->post('req_exp'),                
                'category' => $this->input->post('category'),
                'skill' => $this->input->post('skill'),
                'req_qualification' => $this->input->post('req_qualification'),
                'insentif' => $this->input->post('insentif'),  
                'position' => $this->input->post('position'),
                'salary' => $this->input->post('salary'),
                'work_time' => $this->input->post('work_time'),
                'tipe_worker' => $this->input->post('tipe_worker'),  
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kecamatan' => $this->input->post('kecamatan'),
                'desa' => $this->input->post('desa'),
                'premium' => $premium,
                'exp_headline' => $exp_headline

            );    
           
            $this->db->insert('vacancy', $data);
            // var_dump($this->input->post('desa'));exit();

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
  // INPUT VACANCY

  // CHANGE STATUS
    public function read($id)
    {
        $data = array(
            'read_owner' => 1 ,
        );

        $this->db->where('id_apllied_vacancy', $id)
            ->update('apllied_vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function read_worker($id)
    {
        $data = array(
            'read_worker' => 1 ,
        );

        $this->db->where('id_apllied_vacancy', $id)
            ->update('apllied_vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }         
    public function change_status_vacancy()
    {
        $data = array(
            'status_vacancy' => "1" ,
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function change_status_vacancy2()
    {
        $data = array(
            'status_vacancy' => "0" ,
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }  
    public function close_vacancy($id)
    {
        $data = array(
            'status' => "ditutup" ,
        );

        $this->db->where('id_vacancy', $id)
            ->update('vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }      
    // CHANGE STATUS

    // GET VACANCY
    public function get_vacancy()
    {
        return $this->db->join('login', 'vacancy.id_login = login.id_login')
                        ->join('villages', 'vacancy.desa = villages.id')
                        ->where('vacancy.id_login', $this->session->userdata("id_login"))
                        ->order_by('vacancy.status','ASC')
                        ->get('vacancy')
                        ->result();
    }

   /* public function get_vacancy(){
      $this->db->select('
         vacancy.*, login.*
      ');
      $this->db->join('login', 'vacancy.id_login = login.id_login');
      $this->db->join('villages', 'vacancy.desa = villages.id');
         $this->db->from('vacancy');
      $this->db->where('vacancy.id_login', $this->session->userdata("id_login"));
      $this->db->order_by('vacancy.status','ASC');
      $query = $this->db->get();
      return $query->result();
  }*/

    public function get_apllied_vacancy_total()
    {
        return $this->db->join('vacancy', 'apllied_vacancy.id_vacancy = vacancy.id_vacancy') 
                        ->join('login', 'vacancy.id_login = vacancy.id_login')  
                        ->where('vacancy.id_login', $this->session->userdata('id_login'))
                        ->where('login.id_login', 'apllied_vacancy.id_login')
                        ->from('apllied_vacancy')
                        ->count_all_results();
    }  

     /*code by saulia*/
     public function get_apllied_vacancy_perusahaan()
    {
          $this->db->select('
                apllied_vacancy.*, vacancy.*, apllied_vacancy.id_login as id_pelamar, vacancy.id_login as id_owner
          ');
          $this->db->join('vacancy', 'apllied_vacancy.id_vacancy = vacancy.id_vacancy');
          $this->db->from('apllied_vacancy');
          $this->db->where('vacancy.id_login',$this->session->userdata("id_login"));
          $query = $this->db->get();
          return $query->result();
    
    }      
    public function get_apllied_vacancy($id)
    {
        return $this->db->join('login', 'apllied_vacancy.id_login = login.id_login')  
                        ->where('apllied_vacancy.id_vacancy', $id)
                        ->where('status_app', 'belum ada kabar')                                        
                        ->get('apllied_vacancy')
                        ->result();
    }      
    public function get_apllied_vacancy_acc($id)
    {
        return $this->db->join('login', 'apllied_vacancy.id_login = login.id_login')  
                        ->where('apllied_vacancy.id_vacancy', $id)
                        ->where('status_app', 'diterima')                                        
                        ->get('apllied_vacancy')
                        ->result();
    } 
         
    // GET VACANCY

  // GET RESUME
 
    public function get_resume2()
    {
        return $this->db->join('category', 'resume.work_category = category.id_category')
                        ->where('id_login',$this->uri->segment(4))
                        ->get('resume')
                        ->result();
    }  

    public function get_category_resume($id_login)
    {
        return $this->db->join('category', 'resume.work_category = category.id_category')
                        ->where('id_login',$id_login)
                        ->get('resume')
                        ->result();
    }    
    public function get_resume_download($id)
    {
        return $this->db->join('login', 'resume.id_login = login.id_login')
                        ->join('provinces', 'resume.provinsi = provinces.id')       
                        ->join('regencies', 'resume.kabupaten = regencies.id')
                        ->join('districts', 'resume.kecamatan = districts.id')
                        ->join('villages', 'resume.desa = villages.id')
                        ->where('resume.id_login', $id)
                        ->get('resume')
                        ->first_row();
    }  

    public function getAplliedByID($id)
    {
        return $this->db->select('
                apllied_vacancy.*, vacancy.*, apllied_vacancy.id_login as id_pelamar, vacancy.id_login as id_owner, login.*')
                        ->join('login', 'apllied_vacancy.id_login = login.id_login')
                        ->join('vacancy', 'apllied_vacancy.id_vacancy = vacancy.id_vacancy')
                        ->where('apllied_vacancy.id_apllied_vacancy', $id)
                        ->get('apllied_vacancy')
                        ->row();
    }    

  // GET RESUME    

 // DELETE VACANCY
    public function delete_vacancy($id)
    {
        return $this->db->where('id_vacancy', $id)
                    ->delete('vacancy');
    }
  // DELETE VACANCY


  // EDIT VACANCY
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
    public function edit_vacancy()
    {        
            $data = array(
                'title' => $this->input->post('title'),         
                'open_date' => date("Y-m-d"),                       
                'description' => $this->input->post('description'),
                'closing_date' => $this->input->post('closing_date'),
                'education' => $this->input->post('education'),
                'req_exp' => $this->input->post('req_exp'),                
                'category' => $this->input->post('category'),
                'skill' => $this->input->post('skill'),
                'req_qualification' => $this->input->post('req_qualification'),
                'insentif' => $this->input->post('insentif'),  
                'position' => $this->input->post('position'),
                'salary' => $this->input->post('salary'),
                'work_time' => $this->input->post('work_time'),
                'tipe_worker' => $this->input->post('tipe_worker'),  
            );    
             $this->db->where('id_vacancy', $this->input->post('id_vacancy'))
            ->update('vacancy', $data);
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }  


    // ACCEPT APP
    public function status_vacancy($id)
    {
        $data = array(
            'status' => "ditutup" ,
        );

        $this->db->where('id_vacancy', $id)
            ->update('vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }  
    public function status_app($id)
    {
        $data = array(
            'status_app' => "diterima" ,
        );

        $this->db->where('id_apllied_vacancy', $id)
            ->update('apllied_vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }      
 
    // ACCEPT APP

}