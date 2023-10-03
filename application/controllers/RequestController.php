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
            'currencyid'=>'',
        );
        $response= $this->whmcs->domain_pricing($params);
        print_r($response);
    }
    function domain_whois() {
        $params= array(
            'domain'=>'radosolos.com',
        );
        $response= $this->whmcs->domain_whois($params);
        print_r($response);
    }
    function get_currencies() {
        $params =array(
        );
        $response= $this->whmcs->get_currencies($params);
        print_r($response);
    }
    function get_activity_log() {
        $params =array(
        );
        $response= $this->whmcs->get_activity_log($params);
        print_r($response);
    }
}