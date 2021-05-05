<?php
require_once("database.php") ;
class CategoryDao extends BaseDao
{

    function findAll()
    {
        $db = database::getInstance();
        $db->selectTable("categoryTable");
    }

    function findById($id)
    {
        $db = database::getInstance();
        $size = sizeof($db->categoryTable);
        foreach ($db->categoryTable as $c) {
            if ($c->getId() == $id) {
                echo "Id:" . $c->getId();
                echo "Name:" . $c->getName();
            }
        }
    }
}

