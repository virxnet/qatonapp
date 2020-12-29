<?php

require_once('../vendor/autoload.php');

require_once('../config.php');

$app = new \VirX\Qaton\App('..' . DIRECTORY_SEPARATOR . APP_NAME . DIRECTORY_SEPARATOR, __DIR__);

$app->setConfig($APP_CONFIG);

$app->run();