<?php
function asset_url(){
   return base_url().'assets/';
}
function api_url($url){
	return 'http://localhost/wantoksolutions/api/ApiController/'.$url;
	// return 'https://wantoksolutions.com.pg/api/ApiController/'.$url;
 }
function user_auth()
{
	$CIH = &get_instance();

	$user_id = $CIH->session->userdata('user_id');

	if ($user_id == '') {
		redirect("login");
	}
}