<?php

/** APPLICATION Contact Us CONTROLLER
 * Version 1
 */

class Services_controller extends CI_Controller
{
    public $templatelibraries;

    public function index()
    {
        $data = [];
        $this->templatelibraries->load('app/app', 'view/v1/services', $data);
    }
}
