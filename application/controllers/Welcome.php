<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class Welcome extends CI_Controller {

	public function index()
	{
		echo $this->whmcs->teste_whmcs(array('nothong to passs'));
		echo base_url();
		die;

		$this->load->view('welcome_message');
	}
	public function addClientToWHMCS() {
		$clientData = [
            'firstname' => 'Mk',
            'lastname' => 'Khan',
            'email' => 'johndoe@example.com',
            'address1' => 'House # 457-K, Street # 58, Sector I-8/3,Islamabad.',
            'city' => 'Islamabad',
            'state' => 'Pakisatan',
            'postcode' => '44090',
            'country' => 'pk',
            'phonenumber' => '03434444444',
            'password2' => 'password',
            // Add other client details as needed
        ];
		// print_r($clientData);die;
		$response= $this->Whmcs->add_client($clientData);
		print_r($response);

    }
	public function AddUser() {
		// WHMCS API Credentials
        $apiIdentifier = 'PelmDUkS0xjaKbgyX3hUh7qT6ekiDVhj';
        $apiSecret = '09ov91RnT7Cxz8ETj0JgxDR8OAWhLMl0';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://wantoksolutions.com.pg/whmcs/includes/api.php');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
			http_build_query(
				array(
					'action' => 'AddUser',
					// See https://developers.whmcs.com/api/authentication
					'username' => $apiIdentifier,
					'password' => $apiSecret,
					'firstname' => 'John',
					'lastname' => 'Doe',
					'email' => 'john.doe@example.com',
					'password2' => 'password',
					'responsetype' => 'json',
				)
			)
		);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		print_r($response);
		curl_close($ch);
	}
	function authenticating() {
		// WHMCS API Credentials
        $apiIdentifier = 'PelmDUkS0xjaKbgyX3hUh7qT6ekiDVhj';
        $apiSecret = '09ov91RnT7Cxz8ETj0JgxDR8OAWhLMl0';
		$username = "your_admin_login_username";
		$password = "your_admin_login_password";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://wantoksolutions.com.pg/whmcs/includes/api.php');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
			http_build_query(
				array(
					'action' => 'AddUser',
					// See https://developers.whmcs.com/api/authentication
					'username' => $username,
					'password' => md5($password),
					
					'responsetype' => 'json',
				)
			)
		);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		print_r($response);
		curl_close($ch);
	}	
}
