<?php

Class Application extends CI_Model {

 public function insert_campaign($data){

  $this->db->insert('campaign',$data);

  $last_id = $this->db->insert_id();

  return $last_id;

 }

 public function insert_camp_date($data){

  $this->db->insert('camp_dates',$data);

 }

 public function insert_client($data){

  $this->db->insert('clients',$data);

 }

 public function insert_package($data){

  $this->db->insert('packages',$data);

 }

 public function insert_user($data){

  $this->db->insert('users',$data);

 }

 public function update_client($id, $data)
 {
  $this->db->where('id', $id);
  $this->db->update('clients',$data);
 }

 public function update_campaign($id, $data)
 {
  $this->db->where('id', $id);
  $this->db->update('campaign',$data);
 }

 public function update_package($id, $data)
 {
  $this->db->where('id', $id);
  $this->db->update('packages',$data);
 }

 public function update_user($id, $data)
 {
  $this->db->where('id', $id);
  $this->db->update('users',$data);
 }

 public function get_packages($id)
 {
 	$user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from packages order by id desc");
 	}
 	else
 	{
 		$query = $this->db->query("select * from packages where id ='".$id."' order by id desc");
 	}

		$result = $query->result_array();

		return $result;
 }

 public function get_users()
 {
 	$query = $this->db->query("select * from users where admin = '0' order by id desc");

		$result = $query->result_array();

		return $result;
 }

 public function get_clients($id)
 {
 	$user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from clients order by id desc");
 	}
 	else
 	{
 		$query = $this->db->query("select * from clients where user_id = '".$id."' order by id desc");
 	}

		$result = $query->result_array();

		return $result;
 }

 public function get_campaign($id)
 {
 	$user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from campaign order by id desc");
 	}
 	else
 	{
 		$query = $this->db->query("select * from campaign where user_id = '".$id."' order by id desc");
 	}

		$result = $query->result_array();

		return $result;
 }

 public function get_todays_campaign($id)
 {
 	$user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from campaign where id in(select campaign_id from camp_dates where camp_date = CURDATE()) order by id desc");
 	}
 	else
 	{
 		$query = $this->db->query("select * from campaign where id in(select campaign_id from camp_dates where camp_date = CURDATE()) and user_id = '".$id."' order by id desc");
 	}

		$result = $query->result_array();

		return $result;
 }

 public function get_today_campaign($id)
 {
 	$user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from campaign where id in(select `campaign_id` from `camp_dates` where camp_date = CURDATE()) order by id desc limit 10");
 	}
 	else
 	{
 		$query = $this->db->query("select * from campaign where id in(select `campaign_id` from `camp_dates` where camp_date = CURDATE() and id = '"+$id+"') order by id desc limit 10");
 	}

		$result = $query->result_array();

		return $result;
 }

 public function get_package_data($id)
 {
 	$query = $this->db->query("select * from packages where id ='".$id."'");

		$result = $query->result_array();

		return $result;
 }

 public function get_client_data($id)
 {
 	$query = $this->db->query("select * from clients where id = '".$id."'");

		$result = $query->result_array();

		return $result;
 }

 public function get_user_data($id)
 {
 	$query = $this->db->query("select * from users where id = '".$id."' and username != 'admin'");

		$result = $query->result_array();

		return $result;
 }

 public function get_campaign_data($id)
 {
 	$query = $this->db->query("select * from campaign where id = '".$id."'");

		$result = $query->result_array();

		return $result;
 }

 public function get_camp_date($id)
 {
 	$query = $this->db->query("select * from camp_dates where campaign_id = '".$id."'");

		$result = $query->result_array();

		return $result;
 }

 public function disp_camp_date($id)
 {
 	$query = $this->db->query("select * from camp_dates where campaign_id = '".$id."'");

		$result = $query->result_array();
		$str = "";
		foreach($result as $date)
		{
			$str = $date['camp_date'].", ".$str;
		}
		 $str = rtrim($str, ',');

		 return $str;
 }

 public function get_months()
 {
 	$query = $this->db->query("select * from months");

		$result = $query->result_array();

		return $result;
 }

 public function month_filter($data)
 {
 	if($data['year'] !="")

	{

		$this->db->where('year', $data['year']);

	}

	if($data['month'] !="")

	{

		$this->db->where('month', $data['month']);

	}


	$this->db->distinct();

	return $this->db->get('campaign')->result_array();


 }

 public function client_filter($data)
 {
 	if($data['year'] !="")

	{

		$this->db->where('year', $data['year']);

	}

	if($data['month'] !="")

	{

		$this->db->where('month', $data['month']);

	}


	if($data['client'] !="")

	{

		$this->db->where('client_id', $data['client']);

	}

	$this->db->distinct();

	return $this->db->get('campaign')->result_array();


 }

 public function get_dashboard_campaign($id)

	{

  $user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from campaign order by id desc limit 5");
 	}
 	else
 	{
 		$query = $this->db->query("select * from campaign where id = '".$id."' order by id desc limit 5");
 	}

		$result = $query->result_array();

		return $result;

	}

	public function get_dashboard_client($id)

	{

  $user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from clients order by id desc limit 5");
 	}
 	else
 	{
 		$query = $this->db->query("select * from clients where user_id = '".$id."' order by id desc limit 5");
 	}

		$result = $query->result_array();

		return $result;

	}
}
?>
