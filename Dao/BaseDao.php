<?php

require_once( "../Contans/contans.php");
require_once( "Database.php");

abstract class BaseDao
{
    function insert($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            return ($db->insertTable(PRODUCT, $row)) ? true : false; 
        }
        if (get_class($row) == CATEGORY) {
            return ($db->insertTable(CATEGORY, $row)) ? true : false; 
        }
        if (get_class($row) == ACCESSORY) {
            return ($db->insertTable(CATEGORY, $row)) ? true : false; 
        }
    }

    function update($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            return ($db->updateTable(PRODUCT, $row)) ? true : false; 
        }
        if (get_class($row) == CATEGORY) {
            return ($db->updateTable(CATEGORY, $row)) ? true : false; 
        }
        if (get_class($row) == ACCESSORY) {
            return ($db->updateTable(ACCESSORY, $row)) ? true : false; 
        }
    }

    function delete($row){
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            return ($db->deleteTable(PRODUCT, $row)) ? true : false; 

        }
        if (get_class($row) == CATEGORY) {
            return ($db->deleteTable(CATEGORY, $row)) ? true : false;

        }
        if (get_class($row) == ACCESSORY) {
            return ($db->deleteTable(ACCESSORY, $row)) ? true : false;
        }

    }
    function findAll()
    {
        $db = database::getInstance();
        return $db->selectTable($this->nameObject);
    }

    function findById($id)
    {
        $dataObject = $this->findAll();
        foreach ($dataObject as $value) {
            if ($value->getId() == $id) {
                return $value;
            }
        }
    }
    function findByName($name){
        $dataObject = $this->findAll();
        $temp= [];
        foreach ($dataObject as $value) {
            if ($value->getName() == $name) {
                array_push($temp, $value);
            }
        }
        return $temp;

    }
}
