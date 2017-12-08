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
}
?>
