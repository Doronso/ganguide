<?php include_once 'config/init.php';

if (!$_SESSION['emp']->GetEmpIsManager())

  redirect('frontPage.php', 'לא מורשה גישה', 'error');

else {
  $ws = new UseWs();

  $tutorialEntity = new Tutorial();

  $template = new Template('templates/tutorial-allocation.php');

  $tutorial_id = isset($_GET['id']) ? $_GET['id'] : null;

  if (isset($_POST['submit'])) {

    $dataDept['Assign_or_Deassign'] = $_POST['Assign_or_Deassign'];

    $dataDept['Tutorial_Id'] = $tutorial_id;

    $dataDept['json_Depts'] = json_encode($_POST['Depts']);

    $dataDept['IncludeEmployees'] = "True";

    $fields_string = http_build_query($dataDept);

    print_r($fields_string);

    //send the data to the tutorial class for excecute the querys
    //if returns true so its ok else the query Failed
    $response = $ws->DeptAllocation($fields_string);

    if ($response['ResultStat'] == "Success") {
      redirect('Dashboard.php', 'ההדרכה נוספה/הוסרה בהצלחה', 'success');
    } elseif ($response['ResultStat'] == "Warning") {
      redirect('deptAllocation.php', $response['ResultText'] . "", 'error');
    } else {
      redirect('deptAllocation.php', $response['ResultText'] . "", 'error');
    }
  }

  $tutorialRes =  $ws->getTutorial($tutorial_id);

  if ($tutorialRes['ResultStat'] == "Success") {

    $value =  json_decode($tutorialRes['ResultObject'], true);

    $tutorial = new Tutorial();
    $tutorial->setTutorialId($value['Tutorial_ID']);
    $tutorial->setTutorialName($value['TutorialName']);

    $template->tutorial = $tutorial;
  } else {
    redirect('Dashboard.php', "" . $tutorialRes['ResultText'] . "", 'error');
  }

  $template->departments =  $_SESSION['Departments'];


  echo $template;
}
