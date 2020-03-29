<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_user extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET NOTIF
    public function get_user()
    {
        return $this->db->where('level !=', 3)        
                        ->get('login')
                        ->result();
    }         
    // GET NOTIF

    public function delete_user($id)
    {
        return $this->db->where('id_login', $id)
                    ->delete('login');
    }

}