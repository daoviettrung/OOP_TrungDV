<?php

require_once("BaseRow.php");
require_once("../Interface/InterfaceEntity/IBaseRow.php");

class Category extends BaseRow implements IBaseRow
{
    /**
     * Initialize the Category object
     * @param $id is id of an object category
     * @param $name is name of object category
     */
    function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}
