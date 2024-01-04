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
        // $params = array();
        // $url = api_url('get_products');
        // $response =$this->send_request($url, $params);
        // dd($response);
        $var['content'] = $this->load->view('home_view', $data, true);
        $this->load->view('template2023', $var);
    }
    function login()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = array(
                'email' => $this->input->post('email'),
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
    function signup()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = array();
            // echo '<pre>';print_r($_POST);die;
            if (!empty($this->input->post('first_name'))) {
				$data['first_name'] = $this->input->post('first_name');
			}
            if (!empty($this->input->post('last_name'))) {
				$data['last_name'] = $this->input->post('last_name');
			}
            if (!empty($this->input->post('email'))) {
				$data['email'] = $this->input->post('email');
			}
            if (!empty($this->input->post('password'))) {
				$data['password'] = $this->input->post('password');
			}
            $params = array(
                'firstname' => $this->input->post('firstName'),
                'lastname' => $this->input->post('lastName'),
                'email' => $this->input->post('email'),
                'address1' => '123 Main Street',
                'city' => 'Anytown',
                'state' => 'State',
                'postcode' => '12345',
                'country' => 'US',
                'phonenumber' => '800-555-1234',
                'password2' => 'password',
                'clientip' => '1.2.3.4',
            );
            $clientid= '';
            if ($_SERVER['HTTP_HOST'] == "localhost"){
                $response = $this->whmcs->add_client($params);
                if($response['result']=="success"){
                    $clientid=$response['clientid'];
                }
            }
            $data['clientid'] = $clientid;
            // echo '<pre>';print_r($data);die;
            $is_Submitted = $this->common_model->insert_array('users', $data);
            if($is_Submitted){
                $this->session->set_flashdata([
                    'title' => 'Thank You!',
                    'flash_message' => 'Our Agent will contact you shortly.',
                ]);
                redirect(base_url('login'));
            }
            echo $is_Submitted;
            die;
        } else {
            $data['title'] = 'Signup';
            $data['page_name'] = 'Signup';
            $var['content'] = $this->load->view('signup_view', $data, true);
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
    function getin_touch()
    {
        $data['title'] = 'Get In Touch';
        $data['page_name'] = 'Get In Touch';

        $var['content'] = $this->load->view('get-intouch', $data, true);
        $this->load->view('template2023', $var);
    }
    function search_domain()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = array(
                'domain' => $this->input->post('query') . '.com',
            );
            $response = $this->whmcs->domain_whois($params);
            if ($response['result'] == 'success') {
                if ($response['status'] == 'available') {
                    $params = array(
                        'currencyid' => '',
                    );
                    $response = $this->whmcs->domain_pricing($params);
                    $data['pricing'] = $response['pricing'];
                    $data['currency'] = $response['currency'];
                } else {
                    $data['status'] = 'unavailable';
                }
            }
            $data['title'] = 'Domain Serach';
            $data['page_name'] = 'Domain Serach';
            $data['domain_name'] = $this->input->post('query');
            $var['content'] = $this->load->view('domain_search_view', $data, true);
            $this->load->view('template2023', $var);
        } else {
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

        $var['content'] = $this->load->view('services/' . $slug, $data, true);
        $this->load->view('template2023', $var);
    }
    function projects_details($slug)
    {
        $data['title'] = 'Projects Details';
        $data['page_name'] = 'Projects Details';

        $var['content'] = $this->load->view('projects/' . $slug, $data, true);
        $this->load->view('template2023', $var);
    }
}
