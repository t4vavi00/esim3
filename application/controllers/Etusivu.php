<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etusivu extends CI_Controller {

	public function index() {

		$data['sivunsisalto']='etusivu/index';
		$this->load->view('menu/sisalto', $data);
	}







}


