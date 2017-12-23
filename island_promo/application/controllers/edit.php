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
$data['employes'] = $this->application->get_users();

$this->load->view('edit_pages/client', $data);
}

public function edit_campaign()
{
$data['id'] = $this->uri->segment('3');
$user = $this->session->userdata('logged_in');
$data['campaign'] = $this->application->get_campaign_data($data['id']);
$data['months'] = $this->application->get_months();

$data['camp_dates'] = $this->application->get_camp_date($data['id']);
$data['clients'] = $this->application->get_clients($user['id']);

$this->load->view('edit_pages/campaign', $data);
}

public function edit_user()
{
$data['id'] = $this->uri->segment('3');
$data['user'] = $this->application->get_user_data($data['id']);

$this->load->view('edit_pages/user', $data);
}

public function edit_package()
{
$data['id'] = $this->uri->segment('3');
$data['package'] = $this->application->get_package_data($data['id']);
$data['months'] = $this->application->get_months();

$this->load->view('edit_pages/package', $data);
}

public function update_campaign()
{
$id = $this->uri->segment('3');

$year = $this->input->post('year');

$client = $this->input->post('client');

$month = $this->input->post('month');

$po_no = $this->input->post('po_no');

$amount = $this->input->post('amount');

$subject = $this->input->post('subject');

$camp_date = $this->input->post('camp_date');

$img = $this->input->post('userfile');

$sender = $this->input->post('sender');

$user = $this->session->userdata('logged_in');

$filename = time()."_".$year;

$campaign_data = $this->application->get_campaign_data($id);



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
	'sender' => $sender);

		if($this->upload->do_upload('userfile'))
		{
		$img = $this->upload->data();

		$data['file'] = $img['file_name'];

		if($campaign_data[0]['file'] != ""){
		$path = base_url()."/uploads/".$campaign_data[0]['file'];
		unlink($path); }
		}
        else
        {
        	$data['file'] = $campaign_data[0]['file'];
        }

$this->application->update_campaign($id, $data);

$dataSet =array();
$this->db->delete('camp_dates', array('campaign_id' => $id));
for($i=0;$i<sizeof($camp_date);$i++)
{
	if($camp_date[$i] != "")
	{
		$dataset = array('campaign_id' => $id,
						 'camp_date' => $camp_date[$i]);
		$this->application->insert_camp_date($dataset);
	}
}

redirect('user_authentication/campaign');
}

public function update_client()
{
$id = $this->uri->segment('3');

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
	'user_id' => $employe);

$this->application->update_client($id, $data);

redirect('user_authentication/client');
}

public function update_package()
{
$id = $this->uri->segment('3');

$name = $this->input->post('name');

$desc = $this->input->post('description');

$amount = $this->input->post('amount');

$user = $this->session->userdata('logged_in');

$data = array('name' => $name,
'description' => $desc,
'amount' => $amount);

$this->application->update_package($id, $data);

redirect('user_authentication/package');
}

public function update_user(){

	$id = $this->uri->segment('3');

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
															'password' => $password);


$this->application->update_user($id,$data);

redirect('user_authentication/user');
}
}
?>
