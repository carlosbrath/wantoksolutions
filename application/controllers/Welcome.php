<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class Welcome extends CI_Controller {

	public function index()
	{
		phpinfo();
		$this->load->view('welcome_message');
	}
	public function addClientToWHMCS() {
        // WHMCS API URL
        $apiUrl = 'https://wantoksolutions.com.pg/whmcs/includes/api.php';
        
        // WHMCS API Credentials
        $apiIdentifier = 'PelmDUkS0xjaKbgyX3hUh7qT6ekiDVhj';
        $apiSecret = '09ov91RnT7Cxz8ETj0JgxDR8OAWhLMl0';
        
        // Client Data
        $clientData = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'johndoe@example.com',
            // Add other client details as needed
        ];
    
        // Prepare API request parameters
        $requestData = [
            'identifier' => $apiIdentifier,
            'secret' => $apiSecret,
            'action' => 'AddClient', // WHMCS API action for adding a client
            'firstname' => $clientData['firstname'],
            'lastname' => $clientData['lastname'],
            'email' => $clientData['email'],
            // Add other client data here
        ];

        echo '<pre>';
        print_r($requestData);die;
        // Make an HTTP POST request to WHMCS API
        $client = new Client();
        $response = $client->post($apiUrl, ['form_params' => $requestData]);
    
        // Process the API response
        $responseData = json_decode($response->getBody(), true);
        // $responseData = '';
    
    
        if ($responseData && $responseData['result'] == 'success') {
            // Client successfully added to WHMCS
            echo 'Client added successfully.';
        } else {
            // Handle API error
            echo 'Error adding client: ' . $responseData['message'];
        }
    }
}
