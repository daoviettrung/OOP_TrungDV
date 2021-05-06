<?php
require_once( "../Contans/contans.php");
abstract class BaseDao
{
    function insert($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            if ($db->insertTable(PRODUCT, $row)) {
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == CATEGORY) {
            if ($db->insertTable(CATEGORY, $row)) {
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == ACCESSORY) {
            if ($db->insertTable(ACCESSORY, $row)) {
                return true;
            } else {
                return false;
            }
        }
    }

    function update($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            if ($db->updateTable(PRODUCT, $row)) {
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == CATEGORY) {
            if ($db->updateTable(CATEGORY, $row)) {
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == ACCESSORY) {
            if ($db->updateTable(ACCESSORY, $row)) {
                return true;
            } else {
                return false;
            }
        }
    }

    function delete($row){
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            if ($db->deleteTable(PRODUCT, $row)) {
                return true;
            } else {
                return false;
            }

        }
        if (get_class($row) == CATEGORY) {
            if ($db->deleteTable(CATEGORY, $row)) {
                return true;
            } else {
                return false;
            }

        }
        if (get_class($row) == ACCESSORY) {
            if ($db->deleteTable(ACCESSORY, $row)) {
                return true;
            } else {
                return false;
            }
        }

    }
    function findAll()
    {
        $db = database::getInstance();
        return $db->selectTable($this->nameObject);
    }

    function findById($id)
    {
        $data = $this->findAll();

        foreach ($data as $value) {
            if ($value->getId() == $id) {
                return $value;
            }
        }
        return null;

    }
    function findByName($name){
        $data = $this->findAll();
        $temp= [];
        foreach ($data as $value) {
            if ($value->getName() == $name) {
                array_push($temp, $value);
            }
        }
        return $temp;

    }
}
