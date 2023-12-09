<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
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