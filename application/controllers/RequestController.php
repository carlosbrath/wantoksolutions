<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RequestController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function domain_pricing() {
        $response= $this->whmcs->whmcs_domain_pricing();
        print_r($response);
    }
}