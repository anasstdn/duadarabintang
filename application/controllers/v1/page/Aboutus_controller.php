<?php

/** APPLICATION About Us CONTROLLER
 * Version 1
 */

class Aboutus_controller extends CI_Controller
{
    public $templatelibraries;

    public function index()
    {
        $data = [];
        $this->templatelibraries->load('app/app', 'view/v1/about_us', $data);
    }
}
