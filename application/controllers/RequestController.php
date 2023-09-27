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
            'domain'=>'radosolos',
        );
        $response= $this->whmcs->whmcs_domain_pricing();
        print_r($response);
    }
    function domain_whois() {
        $params= array(
            'domain'=>'radosolos.com',
        );
        $response= $this->whmcs->domain_whois($params);
        print_r($response);
    }
}