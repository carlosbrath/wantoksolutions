<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Home';
		$data['page_name'] = 'Home';

		$var['content'] = $this->load->view('home_view', $data, true);
		$this->load->view('template2023', $var);

    }
    function login() {
        $data['title'] = 'Login';
		$data['page_name'] = 'Login';

		$var['content'] = $this->load->view('login_view', $data, true);
		$this->load->view('template_blank', $var);
    }
}
