<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function chose_domain()
    {
        $data['title'] = 'chose-domain';
        $data['page_name'] = 'chose-domain';

        $var['content'] = $this->load->view('cart/chose-domain', $data, true);
        $this->load->view('template2023', $var);
    }
    function check_domain()
    {
        // dd($this->input->post());
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = array(
                'domain' => $this->input->post('domainName') . $this->input->post('domainType'),
            );
            $response = $this->whmcs->domain_whois($params);

            if ($response['result'] == 'success') {
                if ($response['status'] == 'available') {
                    $params = array(
                        'currencyid' => '',
                    );
                    $responsePricing = $this->whmcs->domain_pricing($params);
                    $data['pricing'] = $responsePricing['pricing'];
                    $data['currency'] = $responsePricing['currency'];
                    // Send success response as JSON
                    echo json_encode(array(
                        'status' => 'success',
                        'data' => $data
                    ));
                    exit; // Stop further execution
                } else {
                    // Send unavailable status as JSON
                    echo json_encode(array(
                        'status' => 'unavailable'
                    ));
                    exit; // Stop further execution
                }
            }

            // Handle other scenarios as needed
        }

        // Handle other scenarios or errors
        // Send an error response as JSON
        echo json_encode(array(
            'status' => 'error',
            'message' => 'Error occurred while processing the form.'
        ));
    }
    function add_to_cart()
    {
        $data = array(
            'id'      => 'sku_345BDL',
            'qty'     => 3,
            'price'   => 45.60,
            'name'    => 'T-Shirt',
            'options' => array('Size' => 'L', 'Color' => 'Red')
        );
        $this->cart->insert($data);
        echo '<pre>';
        print_r($this->cart->contents());
    }
}
