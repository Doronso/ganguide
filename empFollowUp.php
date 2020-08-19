<?php include_once 'config/init.php';

$template = new Template('templates/empFollowUp-site.php');

$ws = new UseWs();

$empNum = isset($_GET['id']) ? $_GET['id'] : null;

$res = $ws->logon($empNum);

$resObject = json_decode($res['ResultObject'], true);
$resultJson =  json_decode($res['ResultJson'], true);

if (strcmp($res['ResultStat'], 'Success') == 0) {

    //this will fill the relevent tutorial for an emp
    foreach ($resultJson['EmpTutorial'] as $index => $value) {

        $empTutorial = new EmpTutorial();

        $empTutorial->setEmpNumber($value['EmpNumber']);
        $empTutorial->setTutorialId($value['Tutorial_ID']);
        $empTutorial->setTutorialStatus($value['Status']);
        $empTutorial->setTutorialStartDate($value['StartDate']);
        $empTutorial->setTutorialScore($value['TutorialScore']);
        $empTutorial->setTutorialDuration($value['TutorialDuration']);
        $empTutorial->setTutorialName($value['_TutorialName']);

        $EmpTutorials[] = $empTutorial;
    }
}


$template->empName = $resObject['EmpName'];

if (isset($EmpTutorials)) {
    $template->empTutorials = $EmpTutorials;
}

echo $template;
