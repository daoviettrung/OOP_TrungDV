<?php
require_once("BaseRow.php") ;
class Category extends BaseRow{
    function __construct($id,$name)
    {
        parent::__construct($id,$name);
    }

}
?>