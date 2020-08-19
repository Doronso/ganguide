<?php

class EmpTutorial
{

    protected $EmpNumber;

    protected $TutorialId;

    protected $Status;

    protected $StartDate;

    protected $TutorialScore;

    protected $TutorialDuration;

    //This field is a calculated field

    protected $TutorialName;

    //setters
    public function setEmpNumber($EmpNumber)
    {
        $this->EmpNumber = $EmpNumber;
    }

    public function setTutorialId($TutorialId)
    {
        $this->TutorialId = $TutorialId;
    }

    public function setTutorialStatus($Status)
    {
        $this->Status = $Status;
    }

    public function setTutorialStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
    }

    public function setTutorialScore($TutorialScore)
    {
        $this->TutorialScore = $TutorialScore;
    }


    public function setTutorialDuration($TutorialDuration)
    {
        $this->TutorialDuration = $TutorialDuration;
    }

    public function setTutorialName($TutorialName)
    {
        $this->TutorialName = $TutorialName;
    }



    //getters
    public function getEmpNumber()
    {
        return $this->EmpNumber;
    }

    public function getTutorialId()
    {
        return $this->TutorialId;
    }

    public function getTutorialStatus()
    {
        return $this->Status;
    }

    public function getTutorialStartDate()
    {
        return $this->StartDate;
    }


    public function getTutorialScore()
    {
        return  $this->TutorialScore;
    }


    public function getTutorialDuration()
    {
        return  $this->TutorialDuration;
    }

    public function getTutorialName()
    {
        return $this->TutorialName;
    }
}
