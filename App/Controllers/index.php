<?php

namespace App\Controllers;
class Index
{
	public function __construct($qaton)
	{
		$qaton->view->render('index');
	}
}