<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_paket extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET NOTIF
    public function get_paket()
    {
        return $this->db->get('upgrade')
                        ->result();
    }
    public function get_paket_by_id($id)
    {
        return $this->db->where('id_upgrade',$id)
                        ->get('upgrade')
                        ->row();
    }              
    // GET NOTIF

    public function delete_paket($id)
    {
        return $this->db->where('id_upgrade', $id)
                    ->delete('upgrade');
    }
    public function input_paket()
    {
            $data = array(
                'name_paket' => $this->input->post("name_paket"),
                'num_post' => $this->input->post("num_post"),
                'length_post' => $this->input->post("length_post"),
                'price' => $this->input->post("price"),
                'expired' => $this->input->post("expired"),
                'job_inv' => $this->input->post("job_inv"),                
            );    
            $this->db->insert('upgrade', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function edit_paket()
    {
        $data = array(
                'name_paket' => $this->input->post("name_paket"),
                'num_post' => $this->input->post("num_post"),
                'length_post' => $this->input->post("length_post"),
                'price' => $this->input->post("price"),
                'expired' => $this->input->post("expired"),
                'job_inv' => $this->input->post("job_inv"),           
            );

        $this->db->where('id_upgrade',$this->input->post("id_upgrade"))
                 ->update('upgrade', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }       
}