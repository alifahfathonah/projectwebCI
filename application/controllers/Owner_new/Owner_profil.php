<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner_profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Owner/M_profile');
        $this->load->model('M_master');		
	}

	public function index()
	{


   		$data = array(
   			'data_profil' => $this->M_profile->get_user_by_id(),
   			'data_prov' => $this->M_profile->get_provinsi(),
   			'data_sector' => $this->M_profile->get_sector(),
   			'data_kab' => $this->M_profile->get_kabupaten2(),
   			'data_kec' => $this->M_profile->get_kecamatan2(),
   			'data_desa' => $this->M_profile->get_desa2()
   		);
   		$this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Owner_new/ProfilOwner_view', $data);
		$this->load->view('Element/Panel/footer');
	}
}