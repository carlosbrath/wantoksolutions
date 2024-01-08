<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

    }
    function get_products()
    {
        $params= $this->input->post();
        $response = $this->whmcs->get_products($params);
        echo json_encode($response);
    }
    function domain_pricing()
    {
        $params= $this->input->post();
        $response = $this->whmcs->domain_pricing($params);
        echo json_encode($response);
    }
    
}