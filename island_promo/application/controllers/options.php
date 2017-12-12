<?php
session_start();
class Options extends CI_Controller {



		public function __construct() {

		parent::__construct();

		$this->load->model('users');

		$this->load->model('application');

		$this->load->helper('form');

		// $this->load->library('session');

		// $this->load->helper('url');

		$this->load->library('encrypt');

		// $this->load->library('upload');

		}

	   public function add_campaign(){

	    $year = $this->input->post('year');

	  		$client = $this->input->post('client');

	    $month = $this->input->post('month');

	    $po_no = $this->input->post('po_no');

	    $amount = $this->input->post('amount');

	    $subject = $this->input->post('subject');

	    $camp_date = $this->input->post('camp_date');

	    $sender = $this->input->post('sender');

	    $user = $this->session->userdata('logged_in');

	    $filename = time().$month;

	     $config['upload_path']   = './uploads/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size']      = 2048000;
         $config['file_name'] = $filename;

        $this->load->library('upload', $config);

        $data = array('year' => $year,
	                  'client_id' => $client,
	                  'month' => $month,
	                  'po_no' => $po_no,
	                  'amount' => $amount,
	                  'subject' => $subject,
	                  'camp_date' => $camp_date,
	                  'sender' => $sender,
	                  'user_id' => $user['id']);


        if($this->upload->do_upload('userfile'))
        {
        	$img = $this->upload->data();

        	$data['file'] = $filename;
        }

        $this->application->insert_campaign($data);


	   // redirect('user_authentication/campaign');
	  }

	  public function add_client(){

	   $client_name = $this->input->post('client_name');

	   $comp_name = $this->input->post('comp_name');

	   $email = $this->input->post('email');

	   $address = $this->input->post('address');

	   $discount = $this->input->post('discount');

	   $user = $this->session->userdata('logged_in');

	   $data = array('client_name' => $client_name,
	                 'comp_name' => $comp_name,
	                 'email' => $email,
	                 'address' => $address,
	                 'discount' => $discount,
	                 'user_id' => $user['id']);


	  $this->application->insert_client($data);

	  redirect('user_authentication/client');
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

	 redirect('user_authentication/package');
	}


	public function add_user(){

		$name = $this->input->post('name');

		$phone = $this->input->post('phone');

		$email = $this->input->post('email');

		$address = $this->input->post('address');

		$nic = $this->input->post('nic');

		$username = $this->input->post('username');

		$password = $this->input->post('password');

		$login = $this->input->post('login');

		$user = $this->session->userdata('logged_in');

		$data = array('name' => $name,
																'phone' => $phone,
																'email' => $email,
																'address' => $address,
																'nic' => $nic,
																'login' => $login,
																'username' => $username,
																'password' => $password,
																'user_id' => $user['id']);


	$this->application->insert_user($data);

	redirect('user_authentication/user');
}


}
?>
