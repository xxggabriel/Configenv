<?php 

require_once __DIR__."/../vendor/autoload.php";

use Config\Configenv;
$config = new Configenv();
$config->setFileEnv(__DIR__.'/.env');
var_dump(getenv(), getenv('DB_NAME'));
