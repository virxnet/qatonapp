<?php

namespace App\Controllers\Errors;

class Error400
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = [];
        $this->view->render("Errors//error400", $data);
    }
}
