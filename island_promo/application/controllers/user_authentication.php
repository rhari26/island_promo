<?php
session_start();
class User_Authentication extends CI_Controller {



	public function __construct() {

	parent::__construct();

	$this->load->model('users');

	$this->load->model('application');

	$this->load->helper('form');

	// $this->load->library('session');

	$this->load->helper('url');

	$this->load->library('encrypt');

	}



	public function login_process()

	{

		$username = $this->input->post('username');

		$password = $this->input->post('password');

		$data = array(

			'username' => $username,

			'password' => $password

			);

		$result = $this->users->check_login($data);
		if($result == true)

		{

			$user_info = $this->users->read_user_information($username);

			if($user_info !== false)

			{

				$session_data = array(

					'id' => $user_info[0]['id'],
					'admin' => $user_info[0]['admin']);

				$this->session->set_userdata('logged_in', $session_data);

				// $this->load->view("user_auth/dashboard");

				redirect('user_authentication/dashboard');

			}

			else

			{

				redirect();

			}

		}

		else

		{
			// echo $result."ssssssssss";
			redirect();

		}

	}

	public function create_user()

	{

		$name = $this->input->post('name');

		$username = $this->input->post('username');

		$password = $this->input->post('password');

		$pwd_encyt = $this->encrypt->encode($password);




		$data = array(

			"username" => $username,

			"password" => $pwd_encyt,

			"name" => $name,

			'created_at' => date('Y-m-d H:i:s')

			);

		$user = $this->users->insert_user($data);

		// $this->load->view('user_auth/register_user');



	}

	public function dashboard()

	{
		$user = $this->session->userdata('logged_in');
		$data['campaigns'] = $this->application->get_dashboard_campaign($user['id']);
		$data['clients'] = $this->application->get_dashboard_client($user['id']);
		$data['todays_camp'] = $this->application->get_today_campaign($user['id']);

		$this->load->view("user_auth/dashboard", $data);

	}

	public function client()

	{
		$user = $this->session->userdata('logged_in');

		$data['clients'] = $this->application->get_clients($user['id']);

		$this->load->view("disp_pages/client", $data);

	}

	public function user()

	{
		$user = $this->session->userdata('logged_in');

		$data['users'] = $this->application->get_users();

		$this->load->view("disp_pages/user", $data);

	}

	public function package()

	{
		$user = $this->session->userdata('logged_in');

		$data['packages'] = $this->application->get_packages($user['id']);


		$this->load->view("disp_pages/package", $data);

	}

	public function month_summary()

	{
		$user = $this->session->userdata('logged_in');

		$data['clients'] = $this->application->get_clients($user['id']);

		$this->load->view("month_summary", $data);

	}

	public function client_summary()

	{
		$user = $this->session->userdata('logged_in');

		$data['clients'] = $this->application->get_clients($user['id']);

		$this->load->view("client_summary", $data);

	}

	public function campaign()

	{
		$user = $this->session->userdata('logged_in');

		$data['campaigns'] = $this->application->get_campaign($user['id']);

		$this->load->view("disp_pages/campaign", $data);

	}

	public function add_campaign()

	{
		$user = $this->session->userdata('logged_in');
		$data['clients'] = $this->application->get_clients($user['id']);

		$this->load->view("user_auth/add_campaign", $data);

	}

	public function add_client()

	{
		$data['employes'] = $this->application->get_users();

		$this->load->view("user_auth/add_client", $data);

	}

	public function add_package()

	{

		$this->load->view("user_auth/add_package");

	}

	public function add_user()

	{

		$this->load->view("user_auth/add_user");

	}

	public function invoice()

	{
		$id = $this->uri->segment('3');

		$data['campaign'] = $this->application->get_campaign_data($id);

		$this->load->view("invoice", $data);

	}

	public function logout()

	{

		$this->session->unset_userdata('logged_in');

		redirect();

	}

 }
 ?>
