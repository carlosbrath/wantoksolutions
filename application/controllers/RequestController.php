<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RequestController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function domain_pricing()
    {
        $params = array(
            'currencyid' => '',
        );
        $response = $this->whmcs->domain_pricing($params);
        print_r($response);
    }
    function login(){
        $params = array(
            'email' => 'carlosbrathwaite.rad@gmail.com',
            'password2' => '12345',
        );
        
        $response = $this->whmcs->domain_whois($params);
        echo '<pre>';
        print_r($response);
    }
    function get_client_groups(){
        $params = array(
            
        );
        
        $response = $this->whmcs->get_client_groups($params);
        echo '<pre>';
        print_r($response);
    }
    function domain_whois()
    {
        $params = array(
            'domain' => 'radosolos.com',
        );
        $response = $this->whmcs->domain_whois($params);
        print_r($response);
    }
    function get_currencies()
    {
        $params = array();
        $response = $this->whmcs->get_currencies($params);
        print_r($response);
    }
    function get_activity_log()
    {
        $params = array();
        $response = $this->whmcs->get_activity_log($params);
        echo '<pre>';
        print_r($response);
    }
    function get_admin_details()
    {
        $params = array();
        $response = $this->whmcs->get_admin_details($params);
        echo '<pre>';
        print_r($response);
    }
    
    function add_client()
    {
        $params = array(
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe123@example.com',
            'address1' => '123 Main Street',
            'city' => 'Anytown',
            'state' => 'State',
            'postcode' => '12345',
            'country' => 'US',
            'phonenumber' => '800-555-1234',
            'password2' => 'password',
            'clientip' => '1.2.3.4',
        );
        $response = $this->whmcs->add_client($params);
        echo '<pre>';
        print_r($response);
    }
    function get_clients()
    {
        $params = array();
        $response = $this->whmcs->get_clients($params);
        echo '<pre>';
        print_r($response);
    }
    function get_clients_details()
    {
        $params = array(
            'email' => 'johndoe@example.com',
            'stats' => 1
        );
        $response = $this->whmcs->get_clients_details($params);
        echo '<pre>';
        print_r($response);
    }
    function get_products()
    {
        $params = array();
        $response = $this->whmcs->get_products($params);
        echo '<pre>';
        print_r($response);
    }
    function add_order()
    {
        $params = array(
            'clientid' => '1',
            'paymentmethod' => 'paypal',
            'pid' => '2'
        );
        $response = $this->whmcs->add_order($params);
        echo '<pre>';
        print_r($response);
    }
    function add_to_cart()
    {
        $data = array(
            'id'      => 'sku_345BDL',
            'qty'     => 3,
            'price'   => 45.60,
            'name'    => 'T-Shirt',
            'options' => array('Size' => 'L', 'Color' => 'Red')
        );
        $this->cart->insert($data);
        echo '<pre>';
        print_r($this->cart->contents());
    }
}
