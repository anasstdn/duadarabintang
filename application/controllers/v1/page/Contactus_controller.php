<?php

/** APPLICATION Contact Us CONTROLLER
 * Version 1
 */

class Contactus_controller extends CI_Controller
{
    public $templatelibraries;

    public function index()
    {
        $data = [];
        $this->templatelibraries->load('app/app', 'view/v1/contact_us', $data);
    }
}
