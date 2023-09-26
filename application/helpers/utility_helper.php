<?php
function asset_url(){
   return base_url().'assets/';
}
function getSiteURL()
{
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$domainName = $_SERVER['HTTP_HOST'] . '/';
	return $protocol . $domainName;
}