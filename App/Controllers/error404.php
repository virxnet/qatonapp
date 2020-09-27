<?php

namespace App\Controllers;

class Error404
{
	public function __construct($qaton)
	{
		$qaton->view->render('errors/404');
	}
}
