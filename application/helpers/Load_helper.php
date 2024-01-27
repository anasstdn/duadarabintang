<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dd'))
{
    function dd($string = '')
    {
        echo '<pre>';
        print_r($string);
        echo '</pre>';
        die;
    }   
}