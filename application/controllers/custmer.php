<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custmer extends CI_Controller {

	
	public function index()
	{

		$this->load->view('custmer/header');

		$this->load->view('custmer/home');
		$this->load->view('custmer/footer');

    }
}
?>