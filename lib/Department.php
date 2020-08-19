<?php

class Department
{

    protected $id;
    protected $name;

    public function setDeptId($dept_id)
    {
        $this->id = $dept_id;
    }

    public function setDeptName($dept_name)
    {
        $this->name = $dept_name;
    }

    public function getDeptId()
    {
        return $this->id;
    }

    public function getDeptName()
    {
        return $this->name;
    }
}
