<?php

namespace App\Controllers\Errors;

class Error404
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = [];
        $this->view->render("Errors//error404", $data);
    }
}
