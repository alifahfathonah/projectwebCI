<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getCategoryByID($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id_category',$id);
	    $query = $this->db->get('category');
	    return $query->row();

	  }

	   function getResumeByIDLogin($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id_login',$id);
	    $query = $this->db->get('resume');
	    return $query->row();
	  }

	  function getResumeCategoryByResumeID($id)
	  {
	    $this->db->select('*');
		$this->db->where('id_resume', $id);
		$query = $this->db->get('resume_category');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	  }


	function getLoginByID($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id_login',$id);
	    $query = $this->db->get('login');
	    return $query->row();

	  }

	  function getPaketByIDLogin($id_login)
	  {
	    $this->db->select('*');
	    $this->db->where('id_login',$id_login);
	    $query = $this->db->get('paket');
	    return $query->row();

	  }

	  function getProvincesByID($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id',$id);
	    $query = $this->db->get('provinces');
	    return $query->row();

	  }

	  function getRegenciesByID($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id',$id);
	    $query = $this->db->get('regencies');
	    return $query->row();

	  }

	  function getLoginByEmail($email)
	  {
	    $this->db->select('*');
	    $this->db->where('email',$email);
	    $query = $this->db->get('login');
	    return $query->row();

	  }

	  function getLoginByToken($token)
	  {
	    $this->db->select('*');
	    $this->db->where('token',$token);
	    $query = $this->db->get('login');
	    return $query->row();

	  }

	 function cekData($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function updateData($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}		

}