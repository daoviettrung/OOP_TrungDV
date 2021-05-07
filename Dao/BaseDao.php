<?php

require_once("../Contans/contans.php");
require_once("Database.php");

abstract class BaseDao
{
    /**
     * add object to array through the database class
     * @param $row
     * @return boolean
     */
    function insert($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == $this->tableName) {
            return ($db->insertTable($this->tableName, $row)) ? true : false;
        }
        if (get_class($row) == $this->tableName) {
            return ($db->insertTable($this->tableName, $row)) ? true : false;
        }
        if (get_class($row) == $this->tableName) {
            return ($db->insertTable($this->tableName, $row)) ? true : false;
        }
    }

    /**
     * update object to array through the database class
     * @param $row
     * @return boolean
     */
    function update($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == $this->tableName) {
            return ($db->updateTable($this->tableName, $row)) ? true : false;
        }
        if (get_class($row) == $this->tableName) {
            return ($db->updateTable($this->tableName, $row)) ? true : false;
        }
        if (get_class($row) == $this->tableName) {
            return ($db->updateTable($this->tableName, $row)) ? true : false;
        }
    }

    /**
     * delete object to array through the database class
     * @param $row
     * @return boolean
     */
    function delete($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == $this->tableName) {
            return ($db->deleteTable($this->tableName, $row)) ? true : false;
        }
        if (get_class($row) == $this->tableName) {
            return ($db->deleteTable($this->tableName, $row)) ? true : false;
        }
        if (get_class($row) == $this->tableName) {
            return ($db->deleteTable($this->tableName, $row)) ? true : false;
        }
    }

    /**
     * select array objects through the database class
     * @return array
     */
    function findAll()
    {
        $db = database::getInstance();
        return $db->selectTable($this->tableName);
    }

    /**
     * select object by id through the database class
     * @param $id
     * @return object
     */
    function findById($id)
    {
        $dataObject = $this->findAll();
        foreach ($dataObject as $value) {
            if ($value->getId() == $id) {
                return $value;
            }
        }
    }

    /**
     * select object by name through the database class
     * @param $name
     * @return array objects
     */
    function findByName($name)
    {
        $dataObject = $this->findAll();
        $temp = [];
        foreach ($dataObject as $value) {
            if ($value->getName() == $name) {
                array_push($temp, $value);
            }
        }
        return $temp;
    }
}
