<?php
session_start();
class User_Authentication extends CI_Controller {



	public function __construct() {

	parent::__construct();

	$this->load->model('users');

	// $this->load->model('application');

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

					'id' => $user_info[0]['id']);

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
			echo $result."ssssssssss";
			// redirect();

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

		$this->load->view("user_auth/dashboard");

	}

	public function client()

	{

		$this->load->view("disp_pages/client");

	}

	public function package()

	{

		$this->load->view("disp_pages/package");

	}

	public function campaign()

	{

		$this->load->view("disp_pages/campaign");

	}

	public function add_campaign()

	{

		$this->load->view("user_auth/add_campaign");

	}

	public function add_client()

	{

		$this->load->view("user_auth/add_client");

	}

	public function add_package()

	{

		$this->load->view("user_auth/add_package");

	}

 }
 ?>
