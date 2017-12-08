<?php $tmp = $this->session->userdata('logged_in');

if($tmp['id'] == "")

{

	redirect();

}

 ?>