<?php 
function dd($data, $d=true){
    echo '<pre>';
    print_r($data);
    if($d){
        die;
    }
}