<?php

require_once("BaseRow.php");
require_once("../Interface/InterfaceEntity/IbaseRow.php");

class Category extends BaseRow implements IbaseRow
{
    /**
     * Initialize the Category object
     * @param $id, $name
     */
    function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}
