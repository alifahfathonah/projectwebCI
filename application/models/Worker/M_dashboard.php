<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET VACANCY
    public function get_vacancy()
    {
        return $this->db->join('login', 'vacancy.id_login = login.id_login')
                        ->join('category', 'vacancy.category = category.id_category')                        
                        ->join('villages', 'vacancy.desa = villages.id')
                        ->limit(3)
                        ->get('vacancy')
                        ->result();
    }           
    // GET VACANCY

}