<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_search extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET VACANCY
    public function read()
    {
        $data = array(
            'read_worker' => 0,
        );

        $this->db->where('id_login', $this->session->userdata('id_login'))
            ->update('apllied_vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    public function get_vacancy_by_search($limit,$start)
    {
        if($this->input->post('title') != NULL && $this->session->userdata('title') == NULL){
            $this->session->set_userdata('title',$this->input->post('title'));
          }elseif($this->input->post('title') != NULL && $this->session->userdata('title') != NULL){
            $this->session->unset_userdata('title');
            $this->session->set_userdata('title',$this->input->post('title'));
          }  
          if($this->input->post('tipe_worker') != NULL && $this->session->userdata('tipe_worker') == NULL){
            $this->session->set_userdata('tipe_worker',$this->input->post('tipe_worker'));
          }elseif($this->input->post('tipe_worker') != NULL && $this->session->userdata('tipe_worker') != NULL){
            $this->session->unset_userdata('tipe_worker');
            $this->session->set_userdata('tipe_worker',$this->input->post('tipe_worker'));
          }  
          if($this->input->post('category') != NULL && $this->session->userdata('category') == NULL){
            $this->session->set_userdata('category',$this->input->post('category'));
          }elseif($this->input->post('category') != NULL && $this->session->userdata('category') != NULL){
            $this->session->unset_userdata('category');
            $this->session->set_userdata('category',$this->input->post('category'));
          }  
          if($this->input->post('kabupaten') != NULL && $this->session->userdata('kabupaten') == NULL){
            $this->session->set_userdata('kabupaten',$this->input->post('kabupaten'));
          }elseif($this->input->post('kabupaten') != NULL && $this->session->userdata('kabupaten') != NULL){
            $this->session->unset_userdata('kabupaten');
            $this->session->set_userdata('kabupaten',$this->input->post('kabupaten'));
          }  
          if($this->input->post('education') != NULL && $this->session->userdata('education') == NULL){
            $this->session->set_userdata('education',$this->input->post('education'));
          }elseif($this->input->post('education') != NULL && $this->session->userdata('education') != NULL){
            $this->session->unset_userdata('education');
            $this->session->set_userdata('education',$this->input->post('education'));
          }  
          if($this->input->post('salary') != NULL && $this->session->userdata('salary') == NULL){
            $this->session->set_userdata('salary',$this->input->post('salary'));
          }elseif($this->input->post('salary') != NULL && $this->session->userdata('salary') != NULL){
            $this->session->unset_userdata('salary');
            $this->session->set_userdata('salary',$this->input->post('salary'));
          }  


         $this->db->limit($limit,$start) ;
         $this->db->select('vacancy.description AS vacancydescription, vacancy.provinsi AS id_provinsi, vacancy.*, login.*, regencies.*, category.*');
         $this->db->join('login', 'vacancy.id_login = login.id_login');
         $this->db->join('category', 'vacancy.category = category.id_category') ;                       
         $this->db->join('regencies', 'vacancy.kabupaten = regencies.id');
         $this->db->where('status', 'dibuka')    ;
         if($this->session->userdata('tipe_worker') != NULL) {
            $this->db->where('tipe_worker', $this->session->userdata('tipe_worker') );
        }                
        if($this->session->userdata('category') != NULL) {
            $this->db->where('category', $this->session->userdata('category') );
        }                
        if( $this->session->userdata('vacancy.kabupaten') != NULL) {
            $this->db->where('vacancy.kabupaten', $this->session->userdata('vacancy.kabupaten') );
        }                
        if($this->session->userdata('education') != NULL) {
            $this->db->where('education', $this->session->userdata('education') );
        }                
        if($this->session->userdata('salary') != NULL) {
            $this->db->where('salary', $this->session->userdata('salary') );
        }                
        if($this->session->userdata('title') != NULL) {
          $this->db->like('title', $this->session->userdata('title') );
          $this->db->or_like('login.name', $this->session->userdata('title') );
}   
        $this->db->order_by('premium', 'ASC');  
         $query = $this->db->get('vacancy');
         return  $query->result();
    }   
    public function get_vacancy_by_search_land()
    {
        return $this->db->limit(3)
                        ->join('login', 'vacancy.id_login = login.id_login')
                        ->join('category', 'vacancy.category = category.id_category')                        
                        ->join('regencies', 'vacancy.kabupaten = regencies.id')
                        ->where('status', 'dibuka')    
                        ->get('vacancy')
                        ->result();
    }         
    public function get_vacancy_total_record()
    {

        if($this->input->post('title') != NULL && $this->session->userdata('title') == NULL){
            $this->session->set_userdata('title',$this->input->post('title'));
          }elseif($this->input->post('title') != NULL && $this->session->userdata('title') != NULL){
            $this->session->unset_userdata('title');
            $this->session->set_userdata('title',$this->input->post('title'));
          }  
          if($this->input->post('tipe_worker') != NULL && $this->session->userdata('tipe_worker') == NULL){
            $this->session->set_userdata('tipe_worker',$this->input->post('tipe_worker'));
          }elseif($this->input->post('tipe_worker') != NULL && $this->session->userdata('tipe_worker') != NULL){
            $this->session->unset_userdata('tipe_worker');
            $this->session->set_userdata('tipe_worker',$this->input->post('tipe_worker'));
          }  
          if($this->input->post('category') != NULL && $this->session->userdata('category') == NULL){
            $this->session->set_userdata('category',$this->input->post('category'));
          }elseif($this->input->post('category') != NULL && $this->session->userdata('category') != NULL){
            $this->session->unset_userdata('category');
            $this->session->set_userdata('category',$this->input->post('category'));
          }  
          if($this->input->post('kabupaten') != NULL && $this->session->userdata('kabupaten') == NULL){
            $this->session->set_userdata('kabupaten',$this->input->post('kabupaten'));
          }elseif($this->input->post('kabupaten') != NULL && $this->session->userdata('kabupaten') != NULL){
            $this->session->unset_userdata('kabupaten');
            $this->session->set_userdata('kabupaten',$this->input->post('kabupaten'));
          }  
          if($this->input->post('education') != NULL && $this->session->userdata('education') == NULL){
            $this->session->set_userdata('education',$this->input->post('education'));
          }elseif($this->input->post('education') != NULL && $this->session->userdata('education') != NULL){
            $this->session->unset_userdata('education');
            $this->session->set_userdata('education',$this->input->post('education'));
          }  
          if($this->input->post('salary') != NULL && $this->session->userdata('salary') == NULL){
            $this->session->set_userdata('salary',$this->input->post('salary'));
          }elseif($this->input->post('salary') != NULL && $this->session->userdata('salary') != NULL){
            $this->session->unset_userdata('salary');
            $this->session->set_userdata('salary',$this->input->post('salary'));
          }  


         $this->db->join('login', 'vacancy.id_login = login.id_login') ;
         $this->db->join('category', 'vacancy.category = category.id_category')  ;                      
         $this->db->join('regencies', 'vacancy.kabupaten = regencies.id');
         $this->db->where('status', 'dibuka')       ;                   

         if($this->session->userdata('tipe_worker') != NULL) {
          $this->db->where('tipe_worker', $this->session->userdata('tipe_worker') );
      }                
      if($this->session->userdata('category') != NULL) {
          $this->db->where('category', $this->session->userdata('category') );
      }                
      if( $this->session->userdata('vacancy.kabupaten') != NULL) {
          $this->db->where('vacancy.kabupaten', $this->session->userdata('vacancy.kabupaten') );
      }                
      if($this->session->userdata('education') != NULL) {
          $this->db->where('education', $this->session->userdata('education') );
      }                
      if($this->session->userdata('salary') != NULL) {
          $this->db->where('salary', $this->session->userdata('salary') );
      }                
      if($this->session->userdata('title') != NULL) {
        $this->db->like('title', $this->session->userdata('title') );
        $this->db->or_like('login.name', $this->session->userdata('title') );
      }   
                 

                        $query = $this->db->from('vacancy');
                    return  $query->count_all_results();
        

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

   /* function get_vacancy_by_id($id)
  {
    $this->db->select('*');
    $this->db->where('id_vacancy',$id);
    $query = $this->db->get('vacancy');
    return $query->row();

  } */
                              
    // GET VACANCY
  // GET DROPDOWN
    public function get_kabupaten2()
    {
        return $this->db->get('regencies')
                        ->result();
    }     
 
    public function get_category()
    {
        return $this->db->get('category')
                        ->result();
    }   
  // GET DROPDOWN

    // VACANCY APPLIED
    public function input_vacancy_applied()
    {
            $data = array(
                'id_login' => $this->session->userdata("id_login"),
                'id_vacancy' => $this->input->post('id_vacancy'),
                'reason' => $this->input->post('reason'),
                'date_created_app' => date("Y-m-d"),                                                
            );    
            $this->db->insert('apllied_vacancy', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }   

   public function cek_vacancy_applied(){
    $query = $this->db->where('id_login', $this->session->userdata('id_login'))
                      ->where('id_vacancy', $this->uri->segment(4))  
                      ->get('apllied_vacancy');

    if($query->num_rows() >= 1){
       return FALSE;
    } else {
      return TRUE;
    }
  }         
    public function get_vacancy_applied()
    {
        return $this->db->select('
                apllied_vacancy.*, vacancy.*, apllied_vacancy.id_login as id_pelamar, vacancy.id_login as id_owner')
                        ->join('vacancy', 'apllied_vacancy.id_vacancy = vacancy.id_vacancy')
                        ->where('apllied_vacancy.id_login', $this->session->userdata('id_login')) 
                        ->order_by('apllied_vacancy.status_app', 'DESC')
                        ->get('apllied_vacancy')
                        ->result();
    }  

      function getHeadlinePremium()
    {
      $this->db->select('vacancy.*, vacancy.id_login AS id_owner, vacancy.description AS deskripsi_iklan, login.name AS nama_perusahaan, login.*, provinces.*, regencies.*, districts.*, category.*');
      $this->db->join('login', 'vacancy.id_login = login.id_login');
      $this->db->join('provinces', 'vacancy.provinsi = provinces.id');       
      $this->db->join('regencies', 'vacancy.kabupaten = regencies.id');
      $this->db->join('districts', 'vacancy.kecamatan = districts.id');
      $this->db->join('category', 'vacancy.category = category.id_category');
      $this->db->where('premium', 'yes');
      $this->db->where('exp_headline >=', date("Y-m-d"));
      $this->db->order_by('open_date', 'DESC');
      $query = $this->db->get('vacancy');
      if($query->num_rows()>0)
      {
        return $query->result();
      } else{
        return $query->result();
      }
    }
           
}