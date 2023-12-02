<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserPortal extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function index() {
        echo '<pre>';print_r($this->session->userdata());die;
    }
}