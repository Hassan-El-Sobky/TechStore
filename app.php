<?php

define("PATH" , __DIR__ . "/");
define("URL" , "http://localhost:8080/techstore/");

define("APATH" , __DIR__ . "/admin/");
define("AURL" , "http://localhost:8080/techstore/admin/");


define("DB_SERVERNAME" , "localhost");
define("DB_USERNAME" , "root");
define("DB_PASSWORD" , "");
define("DB_NAME" , "techstore");


require_once(PATH . "vendor/autoload.php");

use TechStore\Classes\Request;
use TechStore\Classes\Session;


$request = new Request;
$session = new Session;

