<?php

class Tutorial
{
    //w/r
    protected $Tutorial_ID;
    //w/r
    protected $TutorialName;
    //w/r
    protected $TutorialLink;
    //w/r
    protected $TutorialStatus;
    //w/r
    //the amount of times that the emp need to do this tutorial
    //1.only ones 2.Once a year 3.
    protected $TutorialRepetitions;
    //read only
    protected $TutorialDescription;
    //w/r
    protected $TutorialPostDate;
    //w/r
    protected $TutorialManagerId;
    //w/r
    protected $TutorialCategoryId;

    //setters
    public function setTutorialId($Tutorial_ID)
    {
        $this->Tutorial_ID = $Tutorial_ID;
    }

    public function setTutorialName($Tutorial_Name)
    {
        $this->TutorialName = $Tutorial_Name;
    }

    public function setTutorialLink($Tutorial_Link)
    {
        $this->TutorialLink = $Tutorial_Link;
    }

    public function setTutorialStatus($Tutorial_Status)
    {
        $this->TutorialStatus = $Tutorial_Status;
    }

    public function setTutorialRepetitions($Tutorial_Repetitions)
    {
        $this->TutorialRepetitions = $Tutorial_Repetitions;
    }

    public function setTutorialDescription($Tutorial_Description)
    {
        $this->TutorialDescription = $Tutorial_Description;
    }

    public function setTutorialManagerId($Tutorial_Manager_Id)
    {
        $this->TutorialManagerId = $Tutorial_Manager_Id;
    }

    public function setTutorialPostDate($Tutorial_Post_Date)
    {
        $this->TutorialPostDate = $Tutorial_Post_Date;
    }

    public function setTutorialCategoryId($Tutorial_Category_Id)
    {
        $this->TutorialCategoryId = $Tutorial_Category_Id;
    }



    //getters
    public function getTutorialId()
    {
        return $this->Tutorial_ID;
    }

    public function getTutorialName()
    {
        return  $this->TutorialName;
    }

    public function getTutorialLink()
    {
        return  $this->TutorialLink;
    }

    public function getTutorialStatus()
    {
        return $this->TutorialStatus;
    }

    public function getTutorialRepetitions()
    {
        return $this->TutorialRepetitions;
    }

    public function getTutorialDescription()
    {
        return  $this->TutorialDescription;
    }

    public function getTutorialManagerId()
    {
        return $this->TutorialManagerId;
    }

    public function getTutorialPostDate()
    {
        return $this->TutorialPostDate;
    }

    public function getTutorialCategoryId()
    {
        return  $this->TutorialCategoryId;
    }
}
