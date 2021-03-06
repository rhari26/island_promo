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

// list($fname, $ext) = explode(".", $img);

$filename = time()."_".$year;

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
'sender' => $sender,
'user_id' => $user['id']);


if($this->upload->do_upload('userfile'))
{
$img = $this->upload->data();

$data['file'] = $img['file_name'];
}

$last_id = $this->application->insert_campaign($data);

$dataSet =array();

for($i=0;$i<sizeof($camp_date);$i++)
{
	if($camp_date[$i] != "")
	{
		$dataset = array('campaign_id' => $last_id,
						 'camp_date' => $camp_date[$i]);
		$this->application->insert_camp_date($dataset);
	}
}
redirect('user_authentication/campaign');
}

public function add_client(){

$client_name = $this->input->post('client_name');

$comp_name = $this->input->post('comp_name');

$email = $this->input->post('email');

$address = $this->input->post('address');

$discount = $this->input->post('discount');

$employe = $this->input->post('employe');

$user = $this->session->userdata('logged_in');

$data = array('client_name' => $client_name,
'comp_name' => $comp_name,
'email' => $email,
'address' => $address,
'discount' => $discount,
'user_id'=> $employe,
'created_by' => $user['id']);


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

$admin = $this->input->post('admin');

$user = $this->session->userdata('logged_in');


$data = array('name' => $name,
		'phone' => $phone,
		'email' => $email,
		'address' => $address,
		'nic' => $nic,
		'login' => $login,
		'username' => $username,
		'admin' => $admin,
		'password' => $password);
	$valid_username = $this->users->check_username($username);

	if($login == 1)
	{
		if($valid_username == 1){
			$this->application->insert_user($data);
			redirect('user_authentication/user');
		}
		else
		{
			redirect('user_authentication/add_user');
		}
	}
	elseif($login == 0)
	{
		$this->application->insert_user($data);
		redirect('user_authentication/user');
	}
	
		
	
}

public function month_summary()
{
	$year = $this->input->post('year');

	$month = $this->input->post('month');

	$user = $this->session->userdata('logged_in');

	$filter = array('year' => $year,
					'month' => $month);

	$data['campaigns'] = $this->application->month_filter($filter);

	$data['clients'] = $this->application->get_clients($user['id']);
	// print_r($data);
	$this->load->view('month_summary', $data);

}

public function client_summary()
{
	$year = $this->input->post('year');

	$month = $this->input->post('month');

	$client = $this->input->post('client');

	$user = $this->session->userdata('logged_in');

	$filter = array('year' => $year,
					'month' => $month,
					'client'=> $client);

	$data['campaigns'] = $this->application->client_filter($filter);

	$data['clients'] = $this->application->get_clients($user['id']);
	// print_r($data);
	$this->load->view('client_summary', $data);

}

public function payment_status()
{
	$id = $this->uri->segment('3');

	$campaign = $this->application->get_campaign_data($id);

	if($campaign[0]['payment'] == 1)
	{
		$data['payment'] = 0;
	}
	else if($campaign[0]['payment'] == 0)
	{
		$data['payment'] = 1;
	}

	$this->application->update_campaign($id, $data);

	redirect("user_authentication/month_summary");
}


public function send_invoice()
{
	$id = $this->uri->segment('3');

	$data['campaign'] = $this->application->get_campaign_data($id);

	$data['camp_dates'] = $this->application->get_camp_date($id);

	$this->load->helper('pdf_helper');

	$this->load->view('send_invoice', $data);
}

}
?>
