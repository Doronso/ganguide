<?php include_once 'config/init.php';

$template = new Template('templates/tutorialFollowUp-site.php');

$ws = new UseWs();

$tutorial_id = isset($_GET['id']) ? $_GET['id'] : null;
$tutorial_Name = isset($_GET['tutorialName']) ? $_GET['tutorialName'] : null;


$res = $ws->FollowUpTutorial($tutorial_id);

if ($res['ResultStat'] != "Success") {
    redirect('Dashboard.php', "" . $res['ResultText'] . "", 'error');
}


$res = json_decode($res['ResultObject'], true);

foreach ($res as $index => $value) {

    $empTutorial = new EmpTutorial();
    $emp = new Employee();


    $emp->SetEmpName($value['FIRST_NAME'] . " " . $value['LAST_NAME']);

    $empTutorial->setEmpNumber($value['EmpNumber']);

    $empTutorial->setTutorialId($tutorial_id);

    $empTutorial->setTutorialStatus($value['Status']);

    $empTutorial->setTutorialStartDate($value['StartDate']);

    $empTutorial->setTutorialScore($value['TutorialScore']);

    $empTutorial->setTutorialDuration($value['TutorialDuration']);

    $emps[] = $emp;
    $tutorialEmpRes[] = $empTutorial;
}


$template->empInfo = $emps;

$template->tutorialEmpRes = $tutorialEmpRes;

$template->tutorialName = $tutorial_Name;

echo $template;
