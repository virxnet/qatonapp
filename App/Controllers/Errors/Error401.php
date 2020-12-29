<?php

namespace App\Controllers\Errors;

class Error401
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = [];
        $this->view->render("Errors//error401", $data);
    }
}
