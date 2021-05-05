<?php
@ini_set('display_startup_errors',1);
@ini_set('display_errors',1);
require_once( "../entity/product.php");
class database
{
   public $productTable = [];
   public $categoryTable = [];
   public $accessoryTable = [];
   private static $_instance = NULL;

   private function __construct()
   {
       
   }
   
   static function getInstance() {
     if (self::$_instance == NULL) {
       self::$_instance = new database();
     }
     return self::$_instance;
   }



    function insertTable($name, $row)
    {
        if ($name == "productTable" && get_class($row)=="product") {
             array_push($this->productTable, $row);
             return true;
        }
        if ($name == "categoryTable" && get_class($row)=="category") {
            array_push($this->categoryTable, $row);
            return true;
        }
        if ($name == "accessoryTable"&& get_class($row)=="accessory") {
            array_push($this->accessoryTable, $row);
            return true;
        }
    }


    function selectTable($name)
    {
        if ($name == "productTable") {
            
            foreach ($this->productTable as  $value) {
               echo "Id:".$value->getId() ;
               echo "Name:".$value->getName() ;
               echo "Category:".$value->getCategory() ;
            }
        }
        if ($name == "categoryTable") {
            foreach ($this->categoryTable as $value) {
                echo "Id:".$value->getId() ;
                echo "Name:".$value->getName() ;
            }
        }
        if ($name == "accessoryTable") {
            foreach ($this->accessoryTable as $value) {
                echo "Id:".$value->getId() ;
                echo "Name:".$value->getName() ;
            }
        }
    }


    function updatable($name, $row)
    {
        if ($name == "productTable" && get_class($row)=="product") {
            $size = sizeof($this->productTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->productTable[$i]->getId() == $row->getId()) {
                    $this->productTable[$i] = $row;
                }
            }
            return true;
        }
        if ($name == "categoryTable" && get_class($row)=="category") {
            $size = sizeof($this->categoryTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->categoryTable[$i]->getId() == $row->getId()) {
                    $this->categoryTable[$i] = $row;
                }
            }
            return true;
        }
        if ($name == "accessoryTable"&& get_class($row)=="accessory") {
            $size = sizeof($this->accessoryTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->accessoryTable[$i]->getId() == $row->getId()) {
                    $this->accessoryTable[$i] = $row;
                }
            }
            return true;
        }
    }


    function deleteTable($name, $row)
    {
        if ($name == "productTable" && get_class($row)=="product") {
            $size = sizeof($this->productTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->productTable[$i]->getId() == $row->getId()) {
                    unset($this->productTable[$i]);
                }
            }
            return true;
        }
        if ($name == "categoryTable" && get_class($row)=="category") {
            $size = sizeof($this->categoryTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->categoryTable[$i]->getId() == $row->getId()) {
                    unset($this->categoryTable[$i]);
                }
            }
            return true;
        }
        if ($name == "accessoryTable"&& get_class($row)=="accessory") {
            $size = sizeof($this->accessoryTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->accessoryTable[$i]->getId() == $row->getId()) {
                    unset($this->accessoryTable[$i]);
                }
            }
            return true;
        }
    }


    function truncateTable($name)
    {
        if ($name == "productTable") {
            array_splice($this->productTable, 0, sizeof($this->productTable));
            return true;
        }
        if ($name == "categoryTable") {
            array_splice($this->categoryTable, 0, sizeof($this->categoryTable));
            return true;
        }
        if ($name == "accessoryTable") {
            array_splice($this->categoryTable, 0, sizeof($this->accessoryTable));
            return true;
        }
    }


    function updatetableById($id, $row)
    {
        if (get_class($row) == "product") {
            for ($i = 0; $i < sizeof($this->productTable); $i++) {
                if ($this->productTable[$i]->getId() == $id) {
                    $this->productTable[$i] = $row;
                }
            }
            return true;
        }
        if (get_class($row) == "category") {
            for ($i = 0; $i < sizeof($this->categoryTable); $i++) {
                if ($this->categoryTable[$i]->getId() == $id) {
                    $this->categoryTable[$i] = $row;
                }
            }
            return true;
        }
        if (get_class($row) == "accessory") {
            for ($i = 0; $i < sizeof($this->accessoryTable); $i++) {
                if ($this->accessoryTable[$i]->getId() == $id) {
                    $this->accessoryTable[$i] = $row;
                }
            }
            return true;
        }
    }
}
/*$row= new product(1,"trung","fsfsd");
$db = database::getInstance();
$db->insertTable("productTable",$row);
$db->selectTable("productTable");*/
