<?php
session_start();
class Edit extends CI_Controller {



	public function __construct() {

	parent::__construct();

	$this->load->model('users');

	$this->load->model('application');

	$this->load->helper('form');

	// $this->load->library('session');

	$this->load->helper('url');

	$this->load->library('encrypt');

	}

	public function edit_client()
	{
		$data['id'] = $this->uri->segment('3');
		$data['client'] = $this->application->get_client_data($data['id']);

		$this->load->view('edit_pages/client', $data);
	}

	public function edit_campaign()
	{
		$data['id'] = $this->uri->segment('3');
		$data['campaign'] = $this->application->get_campaign_data($data['id']);
		$data['months'] = $this->application->get_months();

		$this->load->view('edit_pages/campaign', $data);
	}
}
?>