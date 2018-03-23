<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 3/23/18
 * Time: 10:20 AM
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once (ROOT.DS.'lib'.DS.'init.php');

$router = new Router($_SERVER['REQUEST_URI']);
