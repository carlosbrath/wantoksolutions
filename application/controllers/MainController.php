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
    function login()
    {
        $data['title'] = 'Login';
        $data['page_name'] = 'Login';

        $var['content'] = $this->load->view('login_view', $data, true);
        $this->load->view('template_blank', $var);
    }
    function search_domain()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = array(
                'domain' => $this->input->post('query').'.com',
            );
            $response = $this->whmcs->domain_whois($params);
            if($response['result']=='success'){
                if ($response['status'] == 'available') {
                    $params = array(
                        'currencyid' => '',
                    );
                    $response = $this->whmcs->domain_pricing($params);
                    $data['pricing']= $response['pricing'];
                    $data['currency']= $response['currency'];
                } else{
                    $data['status']='unavailable';
                }
            }
            $data['title'] = 'Domain Serach';
            $data['page_name'] = 'Domain Serach';
            $data['domain_name'] = $this->input->post('query');
            $var['content'] = $this->load->view('domain_search_view', $data, true);
            $this->load->view('template2023', $var);
        } else{
            $data['title'] = 'Domain Serach';
            $data['page_name'] = 'Domain Serach';
            $var['content'] = $this->load->view('domain_search_view', $data, true);
            $this->load->view('template2023', $var);
        }
    }
}
