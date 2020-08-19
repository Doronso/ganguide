<?php include_once 'config/init.php';

if (!$_SESSION['emp']->GetEmpIsManager())
    redirect('frontPage.php', 'לא מורשה גישה', 'error');
else {

    $template = new Template('templates/DashboardSite.php');
    $ws = new UseWs();

    $managerNum = $_SESSION['emp']->GetEmpNumber();

    $getManagerTutorialRes = $ws->GetManagerTutorials($managerNum);

    if ($getManagerTutorialRes['ResultStat'] == "Success") {

        $ResultObject =  json_decode($getManagerTutorialRes['ResultObject'], true);

        foreach ($ResultObject as $index => $value) {

            $Tutorial = new Tutorial();

            $Tutorial->setTutorialId($value['Tutorial_ID']);
            $Tutorial->setTutorialName($value['TutorialName']);
            $Tutorial->setTutorialLink($value['TutorialLink']);
            $Tutorial->setTutorialStatus($value['TutorialStatus']);
            $Tutorial->setTutorialRepetitions($value['TutorialRepetitions']);
            $Tutorial->setTutorialDescription($value['TutorialDescription']);
            $Tutorial->setTutorialManagerId($value['TutorialManagerID']);
            $Tutorial->setTutorialPostDate($value['TutorialPostDate']);
            $Tutorial->setTutorialCategoryId($value['TutorialCategoryID']);

            $ManagerTutorials[] = $Tutorial;
        }

        $template->ManagerTutorials = $ManagerTutorials;
    }

    $getEmpsRes = $ws->getEmp('0');

    if ($getEmpsRes['ResultStat'] == "Success") {

        $ResultJson =  json_decode($getEmpsRes['ResultJson'], true);

        foreach ($ResultJson['Employees'] as $index => $value) {

            $emp = new Employee();

            $emp->SetEmpNumber($value['EmpNumber']);
            $emp->SetEmpID($value['EmpID']);
            $emp->SetEmpName($value['EmpName']);
            $emp->SetEmpEmail($value['EmpEmail']);
            $emp->SetEmpPhone($value['EmpPhone']);
            $emp->setDepartmentNum($value['DepartmentNum']);


            $emps[] = $emp;
        }

        $template->emps = $emps;
    }

    echo $template;
}
