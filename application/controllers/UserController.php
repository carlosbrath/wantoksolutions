<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function login()
    {
        $this->form_validation->set_rules('user_name', 'user_name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
        // echo '<pre>';print_r($_POST);die;
        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Login';
            $data['page_name'] = 'Login';
            $var['content'] = $this->load->view('login_view', $data, true);
            $this->load->view('template_blank', $var);
        } else {
        // echo '<pre>';print_r($_POST);die;

            $username = $this->input->post('user_name');
			$password = $this->input->post('password');
			$remember = $this->input->post('remember_me');
            $query = $this->common_model->login($username, $password);
            // echo '<pre>';print_r($query->num_rows());die;
            if ($query->num_rows() > 0) {
				$row = $query->row();
				$this->session->set_userdata('user_id', $row->user_id);
				$this->session->set_userdata('first_name', $row->first_name);
				$this->session->set_userdata('last_name', $row->last_name);
				$this->session->set_userdata('email', $row->email);
				$this->session->set_userdata('phone', $row->user_contact);
				$this->session->set_userdata('clientid', $row->clientid);
				//End For Saving Cart Data On Login
                redirect(base_url('dashboard'));
			} else {

            }
            
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
				$data['password'] = md5($this->input->post('password'));
			}
            $params = array(
                'firstname' => $this->input->post('first_name'),
                'lastname' => $this->input->post('last_name'),
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
            if ($_SERVER['HTTP_HOST'] != "localhost"){
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
}