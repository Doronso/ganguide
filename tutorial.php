<?php include_once 'config/init.php'; ?>

<?php
/**
 * ? if,else conditions
 * * if the emp is manager, so manager == '1'
 * ! else the is no manager permissions
 */

$template = new Template('templates/tutorial-single.php');
$tutorial_id = isset($_GET['id']) ? $_GET['id'] : null;
//the selected tutorial gets by tutorial_id
$template->tutorial = $_SESSION['Tutorials'][$tutorial_id];


echo $template;
