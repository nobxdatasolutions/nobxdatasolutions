<?php
/**
 * Created by PhpStorm.
 * User: brno
 * Date: 30.06.2017
 * Time: 09:46
 */
setcookie('ActiveUser', '');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
require_once(dirname(dirname(__FILE__)).'/inc/config.inc.php');
require_once(DIR_INC.'functions.inc.php');
require_once(DIR_INC.'Main.php');
$objCore = new Main();
$objCore->startMain();