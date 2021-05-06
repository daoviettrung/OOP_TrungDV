<?php 

require_once("BaseRow.php");
require_once("../Interface/InterfaceEntity/Iproduct.php");

class Product extends BaseRow implements Iproduct
{
    protected $categoryId;

    function __construct($id, $name, $categoryId)
    {
        parent::__construct($id, $name);
        $this->categoryId=$categoryId;
    }

    function setCategoryId($categoryId)
    {
        $this->categoryId= $categoryId;
    }
    
    function getCategoryId()
    {
        return $this->categoryId;
    }

}
?>