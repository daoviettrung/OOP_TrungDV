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
     * @param $name is specifies the name of the array table
     * @param $row is value insert
     * @return boolean 
     */
    public function insertTable($name, $row);

    /**
     * edit an object by param $name and value is $row
     * @param $name is specifies the name of the array table
     * @param $row is value update 
     * @return boolean 
     */
    public function updateTable($name, $row);

    /**
     * delete an object by param $name and value is $row
     * @param $name is specifies the name of the array table
     * @param $row is value need delete 
     * @return boolean 
     */
    public function deleteTable($name, $row);

    /**
     * select array by param $name
     * @return array 
     */
    public function selectTable($name);

    /**
     * update object by param $id
     * @param $id represents the object to be updated
     * @param $row is value update
     * @return boolean 
     */
    public function updateTableById($id, $row);

    /**
     * delete all elements in the array by $id
     * @return boolean 
     */
    public function truncateTable($name);
}
