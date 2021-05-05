<?php
abstract class BaseRow
{
    protected $id;
    protected $name;
    function __construct($id,$name){
        $this->id= $id;
        $this->name=$name;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getId()
    {
        return $this->id;
    }
    function getName()
    {
        return $this->name;
    }
}
