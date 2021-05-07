<?php

require_once("BaseRow.php");
require_once("../Interface/InterfaceEntity/IbaseRow.php");

class Accessory extends BaseRow implements IbaseRow
{
    /**
     * Initialize the object
     * @param $id, $name
     */
    function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}
