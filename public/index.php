<?php

require_once('../vendor/autoload.php');

$HTTP_CONFIG = array(
	'APP_PATH'=>'../App/',
	'APP_PATH_RELATIVE_TO_CALLER'=>'true',
	'APP_CONTROLLERS_PATH'=>'Controllers/',
	'APP_DEFAULT_CONTROLLER'=>'index',
	'APP_DEFAULT_METHOD'=>'index',
	'APP_FALLBACK_CONTROLLER'=>'Error404',
	'APP_VIEWS_PATH'=>'Views/',
	'APP_URL_SUB_DIR'=>'/Test/public/',
	'APP_DEBUG'=>true
);

$App = new \VirX\Qaton\System(__DIR__);
$App->getHttpResource($HTTP_CONFIG);