<?php

class Category
{

    protected $id;
    protected $name;

    public function setCategoryId($category_id)
    {
        $this->id = $category_id;
    }

    public function setCategoryName($category_name)
    {
        $this->name = $category_name;
    }

    public function getCategoryId()
    {
        return $this->id;
    }

    public function getCategoryName()
    {
        return $this->name;
    }
}
