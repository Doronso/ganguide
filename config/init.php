<?php
//Start Session
session_start();
//Config file
require_once 'config.php';

//include helpers
require_once 'helpers/system_helper.php';

//Auto loader
function __autoload($class_name)
{
    require_once $_SERVER["DOCUMENT_ROOT"] . '/lib/' . $class_name . '.php';
}
