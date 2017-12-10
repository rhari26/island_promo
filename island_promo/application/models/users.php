<?php 

Class Users extends CI_Model {

	public function check_login($data)

	{

		$query = $this->db->query("select * from users where username = '".$data['username']."'");
		if($query->num_rows() == 1)

		{
			$result = $query->result_array();
			// print_r($result)

			// $pwd = $this->encrypt->decode($result[0]['password']);

			if($result[0]['password'] == $data['password'])

			{

				return true;

			}

			else

			{

				return false;

			}

		}

		else

		{

			return false;

		}

	}

	public function read_user_information($username)

	{

		$str = "select * from users where username = '".$username."'";

		$query = $this->db->query($str);

		if($query->num_rows() == 1)

		{

			return $query->result_array();

		}

		else

		{

			return false;

		}

	}


	public function get_user_data($id)
	 {
	 	$query = $this->db->query("select * from users where id = '".$id."'");

			$result = $query->result_array();

			return $result;
	 }


	

}
?>