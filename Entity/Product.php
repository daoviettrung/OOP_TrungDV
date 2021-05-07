<?php

require_once("BaseRow.php");
require_once("../Interface/InterfaceEntity/IProduct.php");

class Product extends BaseRow implements IProduct
{
    protected $categoryId;

    /**
     * Initialize the Product object
     * @param $id is id of an object product
     * @param $name is nanem of an object product
     * @param $categoryId is id category of an object product
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
