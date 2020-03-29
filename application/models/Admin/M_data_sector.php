<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_sector extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET NOTIF
    public function get_sector()
    {
        return $this->db->get('sector')
                        ->result();
    }       
    public function get_sector_by_id($id)
    {
        return $this->db->where('id_sector',$id)
                        ->get('sector')
                        ->row();
    }        
    // GET NOTIF

    public function delete_sector($id)
    {
        return $this->db->where('id_sector', $id)
                    ->delete('sector');
    }
    public function input_sector()
    {
            $data = array(
                'name_sector' => $this->input->post("name_sector"),
            );    
            $this->db->insert('sector', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function edit_sector()
    {
        $data = array(
                'name_sector' => $this->input->post("name_sector"),
        );

        $this->db->where('id_sector',$this->input->post("id_sector"))
                 ->update('sector', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }        
}