<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
	parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->library('session');
		
	}

	public function index()
	{
		$this->load->view('login');
	}
}
