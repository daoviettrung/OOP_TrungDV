<?php

interface IBasedao
{
    /**
     * adds an object to the array
     * @param $row is value insert
     * @return boolean 
     */
    public function insert($row);

    /**
     * edit an object by param $row
     * @param $row is value update
     * @return boolean 
     */
    public function update($row);

    /**
     * delete an object by $row
     * @param $row is object need delete
     * @return boolean 
     */
    public function delete($row);

    /**
     * show array object fit
     * @return array 
     */
    public function findAll();

    /**
     * find an object by $id
     * @param $id is id of object
     * @return array 
     */
    public function findById($id);
}
