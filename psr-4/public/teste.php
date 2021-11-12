<?php

use App\Controllers\HomeController as Home;
use ETI\DB\Database;

require_once '../vendor/autoload.php';

$home = new Home();
//echo $home->index();

$database = new Database();
var_dump($database->getConn());