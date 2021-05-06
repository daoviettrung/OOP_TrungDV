<?php 
require_once "IbaseRow.php";
interface  Iproduct extends IbaseRow{
    public function setCategoryId($categoryId);
    
    public function getCategoryId();

}