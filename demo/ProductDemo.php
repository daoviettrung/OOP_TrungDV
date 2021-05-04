<?php
class ProductDemo extends product{
    function ProductDemo($id,$name,$categoryId,){
        parent::product();
    }
    function createProductTest(){
        return $productDemo = new ProductDemo();
    }
    function printProduct($product ){
        print $product;
    }
}
