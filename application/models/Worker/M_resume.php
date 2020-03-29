<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_resume extends CI_Model{

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

  // INPUT RESUME
    public function input_resume()
    {
        $caegory_list = $this->input->post('work_category') ;
        foreach ($caegory_list as $cat ) {
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
                'work_exp' => $this->input->post('work_exp'), 
                'work_category' => $cat                                                 
            );    
            $this->db->insert('resume', $data);
        }

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
  // INPUT RESUME

  // CHANGE STATUS
    public function change_status_resume()
    {
        $data = array(
            'status_resume' => "1" ,
        );

        $this->db->where('id_login', $this->session->userdata("id_login"))
            ->update('login', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function change_status_resume2()
    {
        $data = array(
            'status_resume' => "0" ,
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


  // GET RESUME
    public function get_resume()
    {
        return $this->db->where('id_login', $this->session->userdata("id_login"))
                        ->get('resume')
                        ->first_row();
    }   
    public function get_resume2()
    {
        return $this->db->where('id_login', $this->session->userdata("id_login"))
                        ->get('resume')
                        ->result();
    }    
   /* public function get_resume_download()
    {
        return $this->db->join('login', 'resume.id_login = login.id_login')
                        ->join('provinces', 'resume.provinsi = provinces.id')       
                        ->join('regencies', 'resume.kabupaten = regencies.id')
                        ->join('districts', 'resume.kecamatan = districts.id')
                        ->join('villages', 'resume.desa = villages.id')
                        ->where('resume.id_login', $this->session->userdata("id_login"))
                        ->get('resume')
                        ->first_row();
    }*/

 /*    function get_resume_download()
  {
    $this->db->select('*');
    $this->db->where('id_login',$this->session->userdata("id_login"));
    $query = $this->db->get('resume');
    return $query->row();

  }  */  

  public function get_resume_download(){
      $this->db->select('
         id_resume AS resumeID, resume.*, login.name AS nama_kandidat, login.*, provinces.id AS id_provinsi, provinces.*, regencies.id AS id_kabupaten, regencies.*, districts.id AS id_districts, districts.*, villages.*
      ');
      $this->db->join('login', 'resume.id_login = login.id_login');
      $this->db->join('provinces', 'resume.provinsi = provinces.id');
      $this->db->join('regencies', 'resume.kabupaten = regencies.id');
      $this->db->join('districts', 'resume.kecamatan = districts.id');
      $this->db->join('villages', 'resume.desa = villages.id');
      $this->db->from('resume');
      $this->db->where('resume.id_login',$this->session->userdata("id_login"));
      $query = $this->db->get();
      return $query->row();
  }

  public function getResumeByLoginID($id_login)
    {
        return $this->db->join('login', 'resume.id_login = login.id_login')
                        ->join('provinces', 'resume.provinsi = provinces.id')       
                        ->join('regencies', 'resume.kabupaten = regencies.id')
                        ->join('districts', 'resume.kecamatan = districts.id')
                        ->join('villages', 'resume.desa = villages.id')
                        ->where('resume.id_login', $id_login)
                        ->get('resume')
                        ->first_row();
    }

  public function get_resume_edit(){
      $this->db->select('
         resume.*, login.name AS nama_kandidat, login.*, provinces.id AS id_provinsi, provinces.*, regencies.id AS id_kabupaten, regencies.*, districts.id AS id_districts, districts.*, villages.id AS id_villages, villages.*
      ');
      $this->db->join('login', 'resume.id_login = login.id_login');
      $this->db->join('provinces', 'resume.provinsi = provinces.id');
      $this->db->join('regencies', 'resume.kabupaten = regencies.id');
      $this->db->join('districts', 'resume.kecamatan = districts.id');
      $this->db->join('villages', 'resume.desa = villages.id');
      $this->db->from('resume');
      $this->db->where('resume.id_login',$this->session->userdata("id_login"));
      $query = $this->db->get();
      return $query->row();
  }
    

  // GET RESUME


 // EDIT RESUME 
    public function edit_resume()
    {
        $caegory_list = $this->input->post('work_category') ;    
        $id_resume  = $this->input->post('id_resume') ;             
        foreach ($caegory_list as $cat ) {  
            $data = array(
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
                'work_exp' => $this->input->post('work_exp'), 
                'work_category' => $cat                                                 
            );    
             $this->db->where('id_resume', $id_resume)
            ->update('resume', $data);
            $id_resume++ ;
        }
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }  
 // EDIT RESUME

 // DELETE RESUME
    public function delete_resume()
    {
        return $this->db->where('id_login', $this->session->userdata('id_login'))
                    ->delete('resume');
    }
    public function delete_resume_category($id_resume)
    {
        
        return $this->db->where('id_resume', $id_resume)
                    ->delete('resume_category');
    }
  // DELETE RESUME


}
  


