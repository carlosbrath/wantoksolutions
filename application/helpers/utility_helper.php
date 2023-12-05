<?php
function asset_url(){
   return base_url().'assets/';
}
function user_auth()
{
	$CIH = &get_instance();

	$user_id = $CIH->session->userdata('user_id');

	if ($user_id == '') {
		redirect("login");
	}
}