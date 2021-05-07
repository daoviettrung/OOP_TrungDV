<?php

interface InterfaceDatabase
{
    /**
     * initialize the object according to singleton
     * @return object 
     */
    public static function getInstance();

    /**
     * adds an object to the array
     * @return boolean 
     */
    public function insertTable($name, $row);

    /**
     * edit an object by param $name and value is $row
     * @return boolean 
     */
    public function updateTable($name, $row);

    /**
     * delete an object by param $name and value is $row
     * @return boolean 
     */
    public function deleteTable($name, $row);

    /**
     * select array by param $name
     * @return array 
     */
    public function selectTable($name);

    /**
     * update object by param $id and value is $row
     * @return boolean 
     */
    public function updateTableById($id, $row);

    /**
     * delete all elements in the array by $id
     * @return boolean 
     */
    public function truncateTable($name);
}
