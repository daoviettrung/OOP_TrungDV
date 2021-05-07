<?php

abstract class BaseRow
{
    protected $id;
    protected $name;

    /**
     * Initialize the object
     * @param $id, $name
     */
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * set id to objects
     * @param $id
     */
    function setId($id)
    {
        $this->id = $id;
    }

    /**
     * set name to objects
     * @param $name
     */
    function setName($name)
    {
        $this->name = $name;
    }

    /**
     * get id to object 
     * @return mixed
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * get name to object 
     * @return mixed
     */
    function getName()
    {
        return $this->name;
    }
}
