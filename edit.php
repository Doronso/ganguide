<?php include_once 'config/init.php';

//for insure that the emp is manager of tutorial
if (!$_SESSION['emp']->GetEmpIsManager())
    redirect('frontPage.php', 'לא מורשה גישה', 'error');
else {

    $ws = new UseWs();
    $template = new Template('templates/tutorial-edit.php');
    //
    $tutorial_id = isset($_GET['id']) ? $_GET['id'] : null;

    if (isset($_POST['submit'])) {

        //dataTutorial - for fill tutorial record
        $dataTutorial = array();

        $dataTutorial['TutorialName'] = $_POST['name'];

        $dataTutorial['TutorialCategoryID'] = $_POST['category'];

        $dataTutorial['TutorialLink'] = $_POST['link'];

        $dataTutorial['TutorialRepetitions'] = $_POST['repetitions'];

        $dataTutorial['TutorialDescription'] = $_POST['description'];

        $dataTutorial['TutorialManagerID'] = $_SESSION['emp']->GetEmpNumber();

        $dataTutorial['TutorialStatus'] = '0'; // 0 == create

        $dataTutorial['TutorialPostDate'] = (new DateTime('now'))->format('Y-m-d');

        $dataTutorial = json_encode($dataTutorial);

        $response = $ws->createTutorial($dataTutorial);

        if ($response['ResultStat'] == "Success") {
            redirect('frontPage.php', 'ההדרכה עודכנה בהצלחה', 'success');
        } else {
            redirect('edit.php', 'אופס, ההדרכה לא עודכנה', 'error');
        }
    }

    $tutorialRes =  $ws->getTutorial($tutorial_id);
    if ($tutorialRes['ResultStat'] == "Success") {

        $value =  json_decode($tutorialRes['ResultObject'], true);

        $tutorial = new Tutorial();

        $tutorial->setTutorialId($value['Tutorial_ID']);
        $tutorial->setTutorialName($value['TutorialName']);
        $tutorial->setTutorialLink($value['TutorialLink']);
        $tutorial->setTutorialStatus($value['TutorialStatus']);
        $tutorial->setTutorialRepetitions($value['TutorialRepetitions']);
        $tutorial->setTutorialDescription($value['TutorialDescription']);
        $tutorial->setTutorialManagerId($value['TutorialManagerID']);
        $tutorial->setTutorialPostDate($value['TutorialPostDate']);
        $tutorial->setTutorialCategoryId($value['TutorialCategoryID']);

        $template->tutorial = $tutorial;
    } else {
        redirect('Dashboard.php', "" . $tutorialRes['ResultText'] . "", 'error');
    }


    $template->categories = $_SESSION['categories'];

    echo $template;
}
