<?php 
require_once("../BaseRow.php");
class product extends BaseRow implements ientity{
    protected $categoryId;
    function __construct($id,$name,$categoryId)
    {
        parent::__construct($id,$name);
        $this->categoryId=$categoryId;
    }
    function setCategoryId($categoryId){
        $this->categoryId= $categoryId;
    }
    function getCategoryId(){
        return $this->categoryId;
    }

}
?>