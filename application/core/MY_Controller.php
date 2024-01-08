<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    function __construct()
    {
        // Initialization of class
        parent::__construct();
    }
    function send_request($url, $params = array())
    {
        // $params['accesskey'] 		= 's9!e8@c7u6r5e'; //secrete key
        $params["responsetype"] = "json";

        $query_string = "";
        foreach ($params as $k => $v) {
            $query_string .= "$k=" . urlencode($v) . "&";
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query_string));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        $jsondata = curl_exec($ch);
        if (curl_error($ch)) {
            die("Connection Error: " . curl_errno($ch) . ' - ' . curl_error($ch));
        }
        curl_close($ch);

        return $arr = json_decode($jsondata, true); # Decode JSON String
    }
}
