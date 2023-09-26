<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use GuzzleHttp\Client;

class MainController extends CI_Controller
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
}
