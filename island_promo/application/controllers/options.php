<?php
session_start();
class Options extends CI_Controller {



	public function __construct() {

	parent::__construct();

	$this->load->model('users');

	$this->load->model('application');

	$this->load->helper('form');

	// $this->load->library('session');

	$this->load->helper('url');

	$this->load->library('encrypt');

	}

   public function add_campaign(){

    $year = $this->input->post('year');

  		$client = $this->input->post('client');

    $batch = $this->input->post('batch');

    $po_no = $this->input->post('po_no');

    $amount = $this->input->post('amount');

    $subject = $this->input->post('subject');

    $camp_date = $this->input->post('camp_date');

    $user = $this->session->userdata('logged_in');

    $data = array('year' => $year,
                  'client_id' => $client,
                  'batch_id' => $batch,
                  'po_no' => $po_no,
                  'amount' => $amount,
                  'subject' => $subject,
                  'camp_date' => $camp_date,
                  'user_id' => $user['id']);


   $this->application->insert_campaign($data);

   // redirect
  }

  public function add_client(){

   $client_name = $this->input->post('client_name');

   $comp_name = $this->input->post('comp_name');

   $email = $this->input->post('email');

   $address = $this->input->post('address');

   $user = $this->session->userdata('logged_in');

   $data = array('client_name' => $client_name,
                 'comp_name' => $comp_name,
                 'email' => $email,
                 'address' => $address,
                 'user_id' => $user['id']);


  $this->application->insert_client($data);

  // redirect
 }

 public function add_package(){

  $name = $this->input->post('name');

  $desc = $this->input->post('description');

  $amount = $this->input->post('amount');

  $user = $this->session->userdata('logged_in');

  $data = array('name' => $name,
                'description' => $desc,
                'amount' => $amount,
                'user_id' => $user['id']);


 $this->application->insert_package($data);

 // redirect
}

}
?>
