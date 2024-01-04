<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function add_to_cart($pid) {
        $params = array(
            'pid'=>2
        );
        $url = api_url('get_products');
        $response =$this->send_request($url, $params);
        dd($response);
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
    public function chose_domain()
    {
        $data['title'] = 'chose-domain';
        $data['page_name'] = 'chose-domain';

        $var['content'] = $this->load->view('cart/chose-domain', $data, true);
        $this->load->view('template2023', $var);
    }
    public function check_domain()
    {
        // dd($this->input->post());
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $domian_name=$this->input->post('domainName') . $this->input->post('domainType');
            $domian_name=$this->input->post('domainName') . $this->input->post('domainType');
            $domanType= $this->input->post('domainType');
            $params = array(
                'domain' => $this->input->post('domainName') .'.'. $this->input->post('domainType'),
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
                    $html='';
                    $html.='<div class="domain-available domain-checker-available headline" style="display: block;"><strong>'.$domian_name.'</strong> is available.</div>';
                    $html.='<div class="domain-price" style="display: block;">';
                    $html.= '<span class="register-price-label">Continue to register this domain for</span>';
                    $html.='<span class="price">'.$data['currency']['prefix'].(intval($data['pricing'][$domanType]['register'][1]) + 10). $data['currency']['code'].'</span>';
                    $html.='</div>';
                    echo json_encode(array(
                        'msg' => 'success',
                        'data' => $data,
                        'html'=>$html,
                    ));
                    exit; // Stop further execution
                } else {
                    // Send unavailable status as JSON
                    echo json_encode(array(
                        'msg' => 'unavailable',
                        'html' => '<div><strong>This Domain Not Avaible</strong></div>'
                    ));
                    exit; // Stop further execution
                }
            }

            // Handle other scenarios as needed
        }

        // Handle other scenarios or errors
        // Send an error response as JSON
        
        echo json_encode(array(
            'msg' => 'error',
        ));
    }
}
