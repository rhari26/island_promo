<?php

Class Application extends CI_Model {

 public function insert_campaign($data){

  $this->db->insert('campaign',$data);

 }

 public function insert_client($data){

  $this->db->insert('clients',$data);

 }

 public function insert_package($data){

  $this->db->insert('packages',$data);

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

 public function get_clients($id)
 {
 	$user = $this->users->get_user_data($id);
 	if($user[0]['admin'] == true)
 	{
 		$query = $this->db->query("select * from clients order by id desc");
 	}
 	else
 	{
 		$query = $this->db->query("select * from clients where id = '".$id."' order by id desc");
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
 		$query = $this->db->query("select * from campaign where id = '".$id."' order by id desc");
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

 public function get_campaign_data($id)
 {
 	$query = $this->db->query("select * from campaign where id = '".$id."'");

		$result = $query->result_array();

		return $result;
 }

 public function get_months()
 {
 	$query = $this->db->query("select * from months");

		$result = $query->result_array();

		return $result;
 }
}
?>
