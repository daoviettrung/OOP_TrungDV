<?php

interface IBaseRow
{
    /**
     * set id to object
     * @param $id 
     */
    public function setId($id);

    /**
     * get name to object 
     * @return mixed
     */
    public function getId();

    /**
     * set name to object by param name
     * @param $name 
     */
    public function setName($name);

    /**
     * get name to object 
     * @return mixed
     */
    public function getName();
}
