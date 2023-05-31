<?php

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
session_start();

// Url -
define("URL", "http://localhost/SI-2/SI-2/SI-2/PBWL-MVC-ECCOMERCE/PBWL-MVC-ECCOMERCE/pbwl-mvc-eccomerce/");
define("AST", URL . "/layouts/assets");
define("AUTHOR", "Fahreza Shiddiq Siregar");
define("FOOTER", "Copyright &copy; 2023. Designed by " . AUTHOR);

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Autoload
require_once ROOT. "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();