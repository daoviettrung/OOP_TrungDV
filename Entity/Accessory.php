<?php

require_once("BaseRow.php");
require_once("../Interface/InterfaceEntity/IBaseRow.php");

class Accessory extends BaseRow implements IBaseRow
{
    /**
     * Initialize the object
     * @param $id is id of object accessory
     * @param $name is name of object accessory
     */
    function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}
