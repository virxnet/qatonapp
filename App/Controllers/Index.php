<?php

namespace App\Controllers;

class Index
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = [];
        $this->view->section("sections/index", "layouts/default", $data);
    }
}
