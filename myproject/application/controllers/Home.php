<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
	{
		//==== opsi 1===
		// $data  = array(
		// 	'nama' => 'Eling Meyatmaja',
		// 	'status' => 'Pelajar'
		// );

		// opsi 2
		$data['nama']= 'Eling Meyatmaja';
		$data['status'] = 'Pelajar';

		$this->header();
		$this->load->view('index', $data);
		$this->footer();
	}

	public function controllerprofil()
	{
		echo"ini halaman profil";
	}
	public function controllercontact($value='')
	{
		echo"Halaman Contact";
	}
	public function nama($value='', $value1='')
	{
		echo "Nama Saya ".$value." saya ini loh " .$value1;
	}
	// ------------------ views ----------------------------
	public function header()
	{
		$this->load->view('header');
	}
	public function footer()
	{
		$this->load->view('footer');
	}
}
