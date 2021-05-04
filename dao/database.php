<?php
include "entity/product.php";
class database{
    protected $productTable =[] ;
    protected $categoryTable =[] ;
    protected $accessoryTable =[] ;

    function insertTable($name,$row){
        if($name== "productTable"){
            array_push($this->productTable, $row);
        }
        if($name== "categoryTable"){
            array_push($this->categoryTable, $row);
        }
        if($name== "accessoryTable"){
            array_push($this->accessoryTable, $row);
        }

    }
    function selectTable($name){
        if($name=="productTable"){
            foreach ($this->productTable as $key => $value){
                echo "{$key} => {$value} ";
            }
        }
        if($name=="categoryTable"){
            foreach ($this->categoryTable as $key => $value){
                echo "{$key} => {$value} ";
            }
        }
        if($name=="accessoryTable"){
            foreach ($this->accessoryTable as $key => $value){
                echo "{$key} => {$value} ";
            }
        }
    }
    function updatable($name,$row){
        if($name=="productTable"){
            for($i=0;$i< sizeof($this->productTable);$i++){
                if($i==$row){
                    $this->productTable[$i]=$row;
                }
            }
        }
        if($name=="categoryTable"){
            for($i=0;$i< sizeof($this->categoryTable);$i++){
                if($i==$row){
                    $this->categoryTable[$i]=$row;
                }
            }
        }
        if($name=="accessoryTable"){
            for($i=0;$i< sizeof($this->accessoryTable);$i++){
                if($i==$row){
                    $this->accessoryTable[$i]=$row;
                }
            }
        }
    }
    function deleteTable($name,$row){
        if($name=="productTable"){
            for($i=0;$i< sizeof($this->productTable);$i++){
                if($i==$row){
                    array_splice($this->productTable,$row,$row);
                }
            }
        }
        if($name=="categoryTable"){
            for($i=0;$i< sizeof($this->productTable);$i++){
                if($i==$row){
                    array_splice($this->categoryTable,$row,$row);
                }
            }
        }
        if($name=="accessoryTable"){
            for($i=0;$i< sizeof($this->productTable);$i++){
                if($i==$row){
                    array_splice($this->accessoryTable,$row,$row);
                }
            }
        }
    }
    function truncateTable($name){
        if($name=="productTable"){
            array_splice($this->productTable,0,sizeof($this->productTable));
        }
        if($name=="categoryTable"){
            array_splice($this->categoryTable,0,sizeof($this->categoryTable));
        }
        if($name=="categoryTable"){
            array_splice($this->categoryTable,0,sizeof($this->accessoryTable));
        }
    }
    function tableById($id,$row){

    }
}