<?php 
class product{
    protected $id;
    protected $name;
    protected $categoryId;
    function product($id,$name,$categoryId)
    {
        $this->id=$id;
        $this->name= $name;
        $this->categoryId=$categoryId;
    }
    function setId($id){
        $this->id=$id;
    }
    function setCategoryId($categoryId){
        $this->categoryId= $categoryId;
    }
    function setName($name){
        $this->name=$name;
    }
    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getCategory(){
        return $this->categoryId;
    }

}
?>