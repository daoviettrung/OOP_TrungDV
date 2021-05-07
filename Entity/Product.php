<?php

require_once("BaseRow.php");
require_once("../Interface/InterfaceEntity/Iproduct.php");

class Product extends BaseRow implements Iproduct
{
    protected $categoryId;

    /**
     * Initialize the Product object
     * @param $id, $name, $categoryId
     */
    function __construct($id, $name, $categoryId)
    {
        parent::__construct($id, $name);
        $this->categoryId = $categoryId;
    }

    /**
     * set categories to objects
     * @param $categoryId
     */
    function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * get categories to objects
     * @return mixed
     */
    function getCategoryId()
    {
        return $this->categoryId;
    }
}
