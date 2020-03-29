<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bookmark extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET BOOKMARK
    public function get_bookmark()
    {
        return $this->db->join('vacancy', 'bookmark.id_vacancy = vacancy.id_vacancy')
                        ->join('regencies', 'vacancy.kabupaten = regencies.id')
                        ->join('login', 'vacancy.id_login = login.id_login')         
                        ->join('category', 'vacancy.category = category.id_category')
                        ->where('bookmark.id_login', $this->session->userdata("id_login"))
                        ->order_by('vacancy.status', 'ASC')
                        ->get('bookmark')
                        ->result();
    }               
    // GET BOOKMARK

    //INPUT BOOKMARK
    public function input_bookmark($id)
    {
            $data = array(
                'id_login' => $this->session->userdata("id_login"),
                'id_vacancy' => $id,   
                'date_created' => date("Y-m-d"),                                             
            );    
            $this->db->insert('bookmark', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    //INPUT BOOKMARK    

     // DELETE RESUME
        public function delete_bookmark($id)
        {
             $this->db->where('id_bookmark',$id)
                            ->delete('bookmark');
            if($this->db->affected_rows() > 0){
                return TRUE;
            } else {
                return FALSE;
            }                        
        }
      // DELETE RESUME    
}