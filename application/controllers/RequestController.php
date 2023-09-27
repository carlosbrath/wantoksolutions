<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RequestController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function domain_pricing() {
        $params= array(
            'domainid'=>'1',
            'domain'=>'radosolos',
        );
        $response= $this->whmcs->whmcs_domain_pricing();
        print_r($response);
    }
    function domain_register() {
        $params= array(
            'domainid'=>'1',
            'domain'=>'radosolos',
        );
        $response= $this->whmcs->domain_register($params);
        print_r($response);
    }
}