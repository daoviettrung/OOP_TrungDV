<?php
@ini_set('display_startup_errors', 1);
@ini_set('display_errors', 1);
require_once( "../Contans/contans.php");
require_once("../Interface/InterfaceDao/InterfaceDatabase.php");
class Database implements InterfaceDatabase
{
    protected $productTable = [];
    protected $categoryTable = [];
    protected $accessoryTable = [];
    private static $_instance = NULL;

    private function __construct()
    {
    }

    static function getInstance()
    {
        if (self::$_instance == NULL) {
            self::$_instance = new database();
        }
        return self::$_instance;
    }

    function insertTable($name, $row)
    {
        if ($name == PRODUCT) {
            array_push($this->productTable, $row);
            return true;
        }
        if ($name == CATEGORY ) {
            array_push($this->categoryTable, $row);
            return true;
        }
        if ($name == ACCESSORY) {
            array_push($this->accessoryTable, $row);
            return true;
        }
    }

    function selectTable($name)
    {
        if ($name == PRODUCT) {
            return $this->productTable;
        }

        if ($name == CATEGORY) {
            return $this->categoryTable;
        }
        if ($name == ACCESSORY) {
            return $this->accessoryTable;
        }
        return [];
    }

    function updateTable($name, $row)
    {
        if ($name == PRODUCT) {
            $size = sizeof($this->productTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->productTable[$i]->getId() == $row->getId()) {
                    $this->productTable[$i] = $row;
                }
            }
            return true;
        }
        if ($name == CATEGORY) {
            $size = sizeof($this->categoryTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->categoryTable[$i]->getId() == $row->getId()) {
                    $this->categoryTable[$i] = $row;
                }
            }
            return true;
        }
        if ($name == ACCESSORY) {
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
        if ($name == PRODUCT) {
            $size = sizeof($this->productTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->productTable[$i]->getId() == $row->getId()) {
                    unset($this->productTable[$i]);
                }
            }
            return true;
        }
        if ($name == CATEGORY) {
            $size = sizeof($this->categoryTable);
            for ($i = 0; $i < $size; $i++) {
                if ($this->categoryTable[$i]->getId() == $row->getId()) {
                    unset($this->categoryTable[$i]);
                }
            }
            return true;
        }
        if ($name == ACCESSORY) {
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
        if ($name == PRODUCT) {
            $this->productTable=[];
            return true;
        }
        if ($name == CATEGORY) {
           $this->categoryTable=[];
            return true;
        }
        if ($name == ACCESSORY) {
            $this->accessoryTable=[];
            return true;
        }
    }

    function updateTableById($id, $row)
    {
        if (get_class($row) == PRODUCT) {
            for ($i = 0; $i < sizeof($this->productTable); $i++) {
                if ($this->productTable[$i]->getId() == $id) {
                    $this->productTable[$i] = $row;
                }
            }
            return true;
        }
        if (get_class($row) == CATEGORY) {
            for ($i = 0; $i < sizeof($this->categoryTable); $i++) {
                if ($this->categoryTable[$i]->getId() == $id) {
                    $this->categoryTable[$i] = $row;
                }
            }
            return true;
        }
        if (get_class($row) == ACCESSORY) {
            for ($i = 0; $i < sizeof($this->accessoryTable); $i++) {
                if ($this->accessoryTable[$i]->getId() == $id) {
                    $this->accessoryTable[$i] = $row;
                }
            }
            return true;
        }
    }
}
/*$db = Database::getInstance();
$row = new Product(1, "trung", "fsdfd");
$row1 = new Product(1, "truong", "lan 2");
if ($db->insertTable("product", $row)) {
    echo "dung";
}
$db->insertTable("product", $row);
$db->updatable("product", $row1);
$db->deleteTable("product", $row1);
var_dump($db->selectTable("product"));*/
