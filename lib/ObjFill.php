<?php

/***************************************
 * This class is designed to prevent   *
 * code duplication when we want to    *
 * fill in objects                     *
 ***************************************/
class ObjFill
{
    public function tutorials($data)
    {
        foreach ($data['Tutorials'] as $index => $value) {

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
        return $Tutorials;
    }

    //fiil one instance of emp
    public function employee($data)
    {
        $ResultObject =  json_decode($data['ResultObject'], true);

        $emp = new Employee();
        $emp->SetEmpNumber($ResultObject['EmpNumber']);
        $emp->SetEmpID($ResultObject['EmpID']);
        $emp->SetEmpName($ResultObject['EmpName']);
        $emp->SetEmpEmail($ResultObject['EmpEmail']);
        $emp->SetEmpIsManager($ResultObject['Emp_IsManager']);
        $emp->SetEmpIsActive($ResultObject['Emp_IsActive']);
        $emp->SetEmpPhone($ResultObject['EmpPhone']);
        $emp->SetEmpStartEmploymentDate($ResultObject['EmpStartEmploymentDate']);
        $emp->SetEmpEndEmploymentDate($ResultObject['EmpEndEmploymentDate']);

        return $emp;
    }
    //can fiil more then one instance of emp
    public function employees($data)
    {
        $ResultObject =  json_decode($data['ResultJson'], true);

        foreach ($ResultObject['Employees'] as $index => $value) {

            $emp = new Employee();
            $emp->SetEmpNumber($ResultObject['EmpNumber']);
            $emp->SetEmpID($ResultObject['EmpID']);
            $emp->SetEmpName($ResultObject['EmpName']);
            $emp->SetEmpEmail($ResultObject['EmpEmail']);
            $emp->SetEmpIsManager($ResultObject['Emp_IsManager']);
            $emp->SetEmpIsActive($ResultObject['Emp_IsActive']);
            $emp->SetEmpPhone($ResultObject['EmpPhone']);
            $emp->SetEmpStartEmploymentDate($ResultObject['EmpStartEmploymentDate']);
            $emp->SetEmpEndEmploymentDate($ResultObject['EmpEndEmploymentDate']);

            $emps[] = $emp;
        }


        return $emps;
    }


    public function empTutorials($data)
    {
        foreach ($data['EmpTutorial'] as $index => $value) {

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
        return $empTutorials;
    }

    public function categories($data)
    {
        foreach ($data['Categories'] as $index => $value) {

            $category = new Category();

            $category->setCategoryId($value['CategoryID']);
            $category->setCategoryName($value['CategoryName']);


            $categories[] = $category;
        }
        return $categories;
    }
}
