<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_category extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    // GET NOTIF
    public function get_category()
    {
        return $this->db->get('category')
                        ->result();
    }         
    public function get_category_by_id($id)
    {
        return $this->db->where('id_category',$id)
                        ->get('category')
                        ->row();
    }     
    // GET NOTIF

    public function delete_category($id)
    {
        return $this->db->where('id_category', $id)
                    ->delete('category');
    }
    public function input_category()
    {
            $data = array(
                'name_category' => $this->input->post("name_category"),
            );    
            $this->db->insert('category', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function edit_category()
    {
        $data = array(
                'name_category' => $this->input->post("name_category"),
        );

        $this->db->where('id_category',$this->input->post("id_category"))
                 ->update('category', $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }     
}