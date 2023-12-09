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
        $params = array();
        $response = $this->whmcs->get_products($params);
        echo $response;
    }
}