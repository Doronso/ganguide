<?php
include_once 'config/init.php';

$template = new Template('templates/front-page.php');

$template->empInfo = $_SESSION['emp'];
$template->empTutorial = $_SESSION['empTutorial'];

echo $template;
