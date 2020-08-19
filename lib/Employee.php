<?php

class Employee
{
    protected $EmpNumber;
    protected $EmpID;
    protected $EmpName;
    protected $EmpEmail;
    protected $Emp_IsManager;
    protected $Emp_IsActive;
    protected $EmpPhone;
    protected $EmpStartEmploymentDate;
    protected $EmpEndEmploymentDate;

    protected $DepartmentNum;


    //setters
    public function setDepartmentNum($Department_Num)
    {
        $this->DepartmentNum = $Department_Num;
    }

    public function SetEmpNumber($Emp_Number)
    {
        $this->EmpNumber = $Emp_Number;
    }

    public function SetEmpID($Emp_ID)
    {
        $this->EmpID = $Emp_ID;
    }

    public function SetEmpName($Emp_Name)
    {
        $this->EmpName = $Emp_Name;
    }

    public function SetEmpEmail($Emp_Email)
    {
        $this->EmpEmail = $Emp_Email;
    }

    public function SetEmpIsManager($EmpIsManager)
    {
        $this->Emp_IsManager = $EmpIsManager;
    }

    public function SetEmpIsActive($EmpIsActive)
    {
        $this->Emp_IsActive = $EmpIsActive;
    }

    public function SetEmpPhone($Emp_Phone)
    {
        $this->EmpPhone = $Emp_Phone;
    }

    public function SetEmpStartEmploymentDate($EmpStartEmploymentDate)
    {
        $this->EmpStartEmploymentDate = $EmpStartEmploymentDate;
    }

    public function SetEmpEndEmploymentDate($EmpEndEmploymentDate)
    {
        $this->EmpEndEmploymentDate = $EmpEndEmploymentDate;
    }


    //getters

    public function getDepartmentNum()
    {
        return $this->DepartmentNum;
    }

    public function GetEmpNumber()
    {
        return $this->EmpNumber;
    }

    public function GetEmpID()
    {
        return $this->EmpID;
    }

    public function GetEmpName()
    {
        return $this->EmpName;
    }

    public function GetEmpEmail()
    {
        return $this->EmpEmail;
    }

    public function GetEmpIsManager()
    {
        return $this->Emp_IsManager;
    }

    public function GetEmpIsActive()
    {
        return $this->Emp_IsActive;
    }

    public function GetEmpPhone()
    {
        return $this->EmpPhone;
    }

    public function GetEmpStartEmploymentDate()
    {
        return $this->EmpStartEmploymentDate;
    }

    public function GetEmpEndEmploymentDate()
    {
        return $this->EmpEndEmploymentDate;
    }
}
