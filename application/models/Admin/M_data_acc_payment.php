<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_acc_payment extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET NOTIF
    public function get_payment()
    {
        return $this->db->join('upgrade', 'paket.id_upgrade = upgrade.id_upgrade')
                        ->join('login', 'paket.id_login = login.id_login')        
                        ->where('status', 'menunggu balasan')        
                        ->get('paket')
                        ->result();
    }         
    // GET NOTIF

    public function acc_payment($id)
    {
        $data = array(
            'status' => "terbayar" ,
        );

        $this->db->where('id_paket', $id)
            ->update('paket', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }      
    public function rej_payment($id)
    {
        $data = array(
            'status' => "ditolak" ,
        );

        $this->db->where('id_paket', $id)
            ->update('paket', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    } 
}