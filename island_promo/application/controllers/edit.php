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

			$user = $this->session->userdata('logged_in');

			$data = array('year' => $year,
																	'client_id' => $client,
																	'month' => $month,
																	'po_no' => $po_no,
																	'amount' => $amount,
																	'subject' => $subject,
																	'camp_date' => $camp_date);

			$this->application->update_campaign($id, $data);

			redirect('user_authentication/campaign');
		}

		public function update_client()
		{
			$id = $this->uri->segment('3');

			$client_name = $this->input->post('client_name');

			$comp_name = $this->input->post('comp_name');

			$email = $this->input->post('email');

			$address = $this->input->post('address');

			$user = $this->session->userdata('logged_in');

			$data = array('client_name' => $client_name,
																	'comp_name' => $comp_name,
																	'email' => $email,
																	'address' => $address);

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
}
?>
