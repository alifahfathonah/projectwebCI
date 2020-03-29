<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET UPGRADE
    public function get_upgrade()
    {
        return $this->db->get('upgrade')
                        ->result();
    }         
    // GET UPGRADE

    //INPUT BOOKMARK
    public function input_paket($id)
    {

            $max = $this->db->where('id_upgrade', $id)
                        ->get('upgrade')
                        ->row();        
            $expired =date('Y-m-d', strtotime("+".$max->expired." days"));

            $data = array(
                'id_login' => $this->session->userdata("id_login"),
                'id_upgrade' => $id,   
                'date_created_paket' => date("Y-m-d"),  
                'date_expired_date' => $expired, 
                'kuota_premium' => $max->premium                                                                                                       
            );    
            $this->db->insert('paket', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function delete_paket()
    {
        return $this->db->where('id_login', $this->session->userdata("id_login"))
                    ->delete('paket');
    }    
   public function cek_paket(){
    $query = $this->db->where('id_login', $this->session->userdata('id_login'))
                      ->get('paket');

    if($query->num_rows() >= 1){
       return FALSE;
    } else {
      return TRUE;
    }
  }    
    public function cek_expired()
    {
        $data = array(
            'status' => 'kadaluarsa',
        );

        $this->db->where('date_expired_date <=',date('Y-m-d'))
                ->update('paket', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }       
    //INPUT BOOKMARK  
    // GET PAKET
    public function get_paket()
    {
        return $this->db->join('upgrade', 'paket.id_upgrade = upgrade.id_upgrade')
                        ->join('login', 'paket.id_login = login.id_login')        
                        ->where('paket.id_login', $this->session->userdata("id_login"))
                        ->get('paket')
                        ->row();
    } 
    public function get_paket_done()
    {
        return $this->db->join('upgrade', 'paket.id_upgrade = upgrade.id_upgrade')
                        ->join('login', 'paket.id_login = login.id_login')        
                        ->where('paket.id_login', $this->session->userdata("id_login"))
                        ->where('status', 'terbayar')                        
                        ->get('paket')
                        ->row();
    }       
    public function upload_payment($bukti)
    {        
            $data = array(
                'status' => "menunggu balasan" ,
                'date_created_paket' => date("Y-m-d"),                                                                             
                'bukti' => $bukti['file_name'] 
            );    
             $this->db->where('id_paket', $this->input->post('id_paket'))
            ->update('paket', $data);
        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }    
    // GET PAKET
}