<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function add_to_cart($pid)
    {
        $params = array(
            'pid' => $pid,
        );
        $url = api_url('get_products');
        $response = $this->send_request($url, $params);
        $products = $response['products']['product'];
        foreach ($products as $product) {
            if ($product['pid'] == $pid) {
                $data = array(
                    'id'      => 'hostin_' . $product['pid'],
                    'qty'     => 1,
                    'suffix'     =>$product['pricing']['USD']['suffix'],
                    'prefix'     =>$product['pricing']['USD']['prefix'],
                    'price'     =>$product['pricing']['USD']['monthly'],
                    'name'    => $product['name'],
                    'options' => array('descrption'=>$product['description']),
                );
                $this->cart->insert($data);
            }
        }
        redirect('chose-domain');
    }
    public function chose_domain()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
        } else {
            $data['title'] = 'chose-domain';
            $data['page_name'] = 'chose-domain';
            $var['content'] = $this->load->view('cart/chose-domain', $data, true);
            $this->load->view('template2023', $var);
        }
    }
    public function add_domain(){
        $domianName= $this->input->post('domain_name');
        $params = array(
            'domain' => $domianName,
        );
        $url = api_url('domain_whois');
        $response = $this->send_request($url, $params);
        if ($response['result'] == 'success') {
            if ($response['status'] == 'available') {
                $params = array(
                    'currencyid' => 'USD',
                );
                $url = api_url('domain_pricing');
                $responsePricing = $this->send_request($url, $params);
                dd($responsePricing);die;
                $data = array(
                    'id'      => 'hostin_' . $product['pid'],
                    'qty'     => 1,
                    'suffix'     =>$product['pricing']['USD']['suffix'],
                    'prefix'     =>$product['pricing']['USD']['prefix'],
                    'price'     =>$product['pricing']['USD']['monthly'],
                    'name'    => $product['name'],
                    'options' => array('descrption'=>$product['description']),
                );
                $this->cart->insert($data);
            }
        }
    }
    public function checkout()
    {
        $data['title'] = 'chose-domain';
        $data['page_name'] = 'chose-domain';
        $var['content'] = $this->load->view('cart/checkout', $data, true);
        $this->load->view('template2023', $var);
    }

    public function check_domain()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $domian_name = $this->input->post('domainName') .'.'. $this->input->post('domainType');
            $domanType = $this->input->post('domainType');
            $params = array(
                'domain' => $this->input->post('domainName') . '.' . $this->input->post('domainType'),
            );
            $url = api_url('domain_whois');
            // $response = $this->whmcs->domain_whois($params);
            $response = $this->send_request($url, $params);

            if ($response['result'] == 'success') {
                if ($response['status'] == 'available') {
                    $params = array(
                        'currencyid' => 'USD',
                    );
                    // $responsePricing = $this->whmcs->domain_pricing($params);
                    $url = api_url('domain_pricing');
                    $responsePricing = $this->send_request($url, $params);
                    $data['pricing'] = $responsePricing['pricing'];
                    $data['currency'] = $responsePricing['currency'];
                    // Send success response as JSON
                    $html = '';
                    $html .= '<div class="domain-available domain-checker-available headline" style="display: block;"><strong>' . $domian_name . '</strong> is available.</div>';
                    $html .= '<div class="domain-price" style="display: block;">';
                    $html .= '<span class="register-price-label">Continue to register this domain for</span>';
                    $html .= '<input type="hidden" name="domain_name" value="'.$domian_name.'">';
                    $html .= '<span class="price">' . $data['currency']['prefix'] . (intval($data['pricing'][$domanType]['register'][1]) + 10) . $data['currency']['code'] . '</span>';
                    $html .= '</div>';
                    echo json_encode(array(
                        'msg' => 'success',
                        'data' => $data,
                        'html' => $html,
                    ));
                    exit; // Stop further execution
                } else {
                    echo json_encode(array(
                        'msg' => 'unavailable',
                        'html' => '<div><strong>This Domain Not Avaible</strong></div>'
                    ));
                    exit;
                }
            }
        }
        echo json_encode(array(
            'msg' => 'error',
        ));
    }
}
