<?php

require_once("../Contans/contans.php");
require_once("../Interface/InterfaceDao/InterfaceDatabase.php");

class Database implements InterfaceDatabase
{
    protected $productTable = [];
    protected $categoryTable = [];
    protected $accessoryTable = [];
    private static $_instance = NULL;

    /**
     * Initialize the object is private 
     * Other classes cannot be instantiated with this function
     */
    private function __construct()
    {
    }

    /**
     * Initialize the object by singleton 
     * @return object
     */
    static function getInstance()
    {
        if (self::$_instance == NULL) {
            self::$_instance = new database();
        }
        return self::$_instance;
    }

    /**
     * add object to array
     * @param $name is name table need update
     * @param $row is value update
     * @return boolean
     */
    function insertTable($name, $row)
    {
        if (get_class($row) == PRODUCT || get_class($row) == CATEGORY || get_class($row) == ACCESSORY) {
            if ($name == PRODUCT) {
                array_push($this->productTable, $row);
                return true;
            }
            if ($name == CATEGORY) {
                array_push($this->categoryTable, $row);
                return true;
            }
            if ($name == ACCESSORY) {
                array_push($this->accessoryTable, $row);
                return true;
            }
        }
    }

    /**
     * select array by name
     * @param $name
     * @return array
     */
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

    /**
     * update array by name with value is row
     * @param $name is name table need update
     * @param $row is value update
     * @return boolean
     */
    function updateTable($name, $row)
    {
        if (get_class($row) == PRODUCT || get_class($row) == CATEGORY || get_class($row) == ACCESSORY) {
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
    }

    /**
     * delete array by name with the value to be deleted is row
     * @param $name is name table need delete
     * @param $row is value need delete
     * @return boolean
     */
    function deleteTable($name, $row)
    {
        if (get_class($row) == PRODUCT || get_class($row) == CATEGORY || get_class($row) == ACCESSORY) {
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
    }

    /**
     * delete array by name with the value to be deleted is row
     * @param $name is name table need delete
     * @return boolean
     */
    function truncateTable($name)
    {
        if ($name == PRODUCT) {
            $this->productTable = [];
            return true;
        }
        if ($name == CATEGORY) {
            $this->categoryTable = [];
            return true;
        }
        if ($name == ACCESSORY) {
            $this->accessoryTable = [];
            return true;
        }
    }

    /**
     * update object by id with value is row
     * @param $id is id object need update
     * @param $row is value update
     * @return boolean
     */
    function updateTableById($id, $row)
    {
        if (get_class($row) == PRODUCT || get_class($row) == CATEGORY || get_class($row) == ACCESSORY) {
            if (get_class($row) == PRODUCT) {
                $size = sizeof($this->productTable);
                for ($i = 0; $i < $size; $i++) {
                    if ($this->productTable[$i]->getId() == $id) {
                        $this->productTable[$i] = $row;
                    }
                }
                return true;
            }
            if (get_class($row) == CATEGORY) {
                $size = sizeof($this->categoryTable);
                for ($i = 0; $i < $size; $i++) {
                    if ($this->categoryTable[$i]->getId() == $id) {
                        $this->categoryTable[$i] = $row;
                    }
                }
                return true;
            }
            if (get_class($row) == ACCESSORY) {
                $size = sizeof($this->accessoryTable);
                for ($i = 0; $i < $size; $i++) {
                    if ($this->accessoryTable[$i]->getId() == $id) {
                        $this->accessoryTable[$i] = $row;
                    }
                }
                return true;
            }
        }
    }
}
