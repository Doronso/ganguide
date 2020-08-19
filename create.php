<?php include_once 'config/init.php';

if (!$_SESSION['emp']->GetEmpIsManager())
    redirect('frontPage.php', 'לא מורשה גישה', 'error');
else {

    $ws = new UseWs();
    $template = new Template('templates/tutorial-create.php');

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

        //send the data to the tutorial class for excecute the querys
        if ($ws->createTutorial($dataTutorial)) {

            redirect('Dashboard.php', 'ההדרכה נוצרה בהצלחה', 'success');
        } else {
            redirect('create.php', 'אופס, ההדרכה לא נוצרה', 'error');
        }
    }

    $template->categories = $_SESSION['categories'];

    echo $template;
}
