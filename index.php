<?php include_once 'config/init.php';

//check if the emp is already login
if (isset($_SESSION["emp"]) && ($_SESSION["emp"] === true)) {
    header("location: frontPage.php");
    exit;
}

$template = new Template('templates\login-site.php');

$ws = new UseWs();

$emp = new Employee();

echo $template;

//if the user press the login btn
if (isset($_POST['submit'])) {

    $data = array();

    if (!empty(trim($_POST['EmpCode']))) { //check if enter email

        //the input empNum from the html 
        $data = $_POST['EmpCode'];

        $res = $ws->Logon($data);

        $ResultObject =  json_decode($res['ResultObject'], true);

        if (strcmp($res['ResultStat'], 'Success') == 0) {

            //  if the user is not active any more display message
            if (!$ResultObject['Emp_IsActive'])
                redirect('index.php', 'המשתמש אינו פעיל', 'error');
            // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            // fill the emp obj with the returned web service data
            $row = $ResultObject;
            $emp->SetEmpNumber($row['EmpNumber']);
            $emp->SetEmpID($row['EmpID']);
            $emp->SetEmpName($row['EmpName']);
            $emp->SetEmpEmail($row['EmpEmail']);
            $emp->SetEmpIsManager($row['Emp_IsManager']);
            $emp->SetEmpIsActive($row['Emp_IsActive']);
            $emp->SetEmpPhone($row['EmpPhone']);
            $emp->SetEmpStartEmploymentDate($row['EmpStartEmploymentDate']);
            $emp->SetEmpEndEmploymentDate($row['EmpEndEmploymentDate']);
            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

            $resultJson =  json_decode($res['ResultJson'], true);

            // $empTutorials = $resultJson['Tutorials'];


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

                $empTutorials[] = $empTutorial;
            }


            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

            // this will fill the relevent tutorial for an emp
            foreach ($resultJson['Tutorials'] as $index => $value) {

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

                $Tutorials[] = $Tutorial;
            }

            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

            foreach ($resultJson['Departments'] as $index => $value) {

                $Department = new Department();

                $Department->setDeptId($value['Department_ID']);
                $Department->setDeptName($value['DepartmentName']);


                $Departments[] = $Department;
            }

            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

            foreach ($resultJson['Categories'] as $index => $value) {

                $category = new Category();

                $category->setCategoryId($value['CategoryID']);
                $category->setCategoryName($value['CategoryName']);


                $categories[] = $category;
            }

            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            session_start();
            $_SESSION['emp'] = $emp;

            $_SESSION['Tutorials'] = $Tutorials;

            $_SESSION['empTutorial'] = $empTutorials;

            $_SESSION['Departments'] = $Departments;

            $_SESSION['categories'] = $categories;

            $ws = null;
            //If all tests succeed we will move to the system folder
            header('Location: frontPage.php');
            exit;
        } elseif (strcmp($res['ResultStat'], 'Warning') == 0) {
            $ws = null;
            redirect('index.php', $res['ResultText'] . '', 'error');
        } else {
            $ws = null;
            redirect('index.php', $res['ResultStat'] . 'אופס, משהו התרחש', 'error');
        }
    }
}
