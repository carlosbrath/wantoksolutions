<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserPortal extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        user_auth();
    }
    function index() {
        $var='';
        $this->load->view('userPortal/index', $var);
    }
}