<?php

/** APPLICATION HOME CONTROLLER
 * Version 1
 */

class Home_controller extends CI_Controller
{
    public $templatelibraries;

    public function index()
    {
        $data = [];
        $this->templatelibraries->load('app/app', 'view/v1/home', $data);
    }
}
