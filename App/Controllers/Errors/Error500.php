<?php

namespace App\Controllers\Errors;

class Error500
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = [];
        $this->view->render("Errors//error500", $data);
    }
}
