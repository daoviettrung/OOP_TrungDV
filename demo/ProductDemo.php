<?php
class ProductDemo extends product{
    function __construct($id,$name,$categoryId)
    {
        parent::__construct($id,$name,$categoryId);
    }
    function printProduct($product ){
        print $product;
    }
}
