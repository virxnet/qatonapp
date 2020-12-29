<?php

namespace App\Controllers\Errors;

class Error403
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = [];
        $this->view->render("Errors//error403", $data);
    }
}
