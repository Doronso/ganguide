<?php
$_SESSION['emp'] = NULL;
$_SESSION['empTutorial'] = NULL;
$_SESSION['Tutorials'] = NULL;
$_SESSION['Departments'] = NULL;
$_SESSION['categories'] = NULL;
session_destroy();
header('Location: index.php');
