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

        // $params =array(
            
        // );
        // $response= $this->whmcs->get_products($params);
        // $data['products']=$response['']['product'];

        $var['content'] = $this->load->view('home_view', $data, true);
        $this->load->view('template2023', $var);
    }
    function login()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = array(
                'email' => $this->input->post('wmail'),
                'password2' => $this->input->post('password'),
            );
            $response = $this->whmcs->domain_whois($params);
            echo '<pre>';
            print_r($response);
            die;

        } else {
            $data['title'] = 'Login';
            $data['page_name'] = 'Login';
            $var['content'] = $this->load->view('login_view', $data, true);
            $this->load->view('template_blank', $var);
        }
        
    }
    function about_us()
    {
        $data['title'] = 'Projects Details';
        $data['page_name'] = 'Projects Details';

        $var['content'] = $this->load->view('about_us_view', $data, true);
        $this->load->view('template2023', $var);
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
    function our_services()
    {
        $data['title'] = 'Services';
        $data['page_name'] = 'Services';

        $var['content'] = $this->load->view('our_services_view', $data, true);
        $this->load->view('template2023', $var);
    }
    function services_details($slug)
    {
        $data['title'] = 'Services Details';
        $data['page_name'] = 'Services details';

        $var['content'] = $this->load->view('services/'.$slug, $data, true);
        $this->load->view('template2023', $var);
    }
    function projects_details($slug)
    {
        $data['title'] = 'Projects Details';
        $data['page_name'] = 'Projects Details';

        $var['content'] = $this->load->view('projects/'.$slug, $data, true);
        $this->load->view('template2023', $var);
    }
}
