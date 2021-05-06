<?php

interface Ibasedao
{
    /**
     * adds an object to the array
     * @return boolean 
     */

    public function insert($row);


    /**
     * edit an object by param $row
     * @return boolean 
     */

    public function update($row);


    /**
     * delete an object by $row
     * @return boolean 
     */

    public function delete($row);


    /**
     * find table
     * @return array 
     */
    public function findAll();


    /**
     * find an object by $id
     * @return array 
     */
    public function findById($id);
}
