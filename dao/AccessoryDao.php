<?php
require_once("database.php") ;
class AccessoryDao extends BaseDao
{

    function findAll()
    {
        $db = database::getInstance();
        $db->selectTable("accessoryTable");
    }

    function findById($id)
    {
        $db = database::getInstance();
        $size = sizeof($db->accessoryTable);
        foreach ($db->accessoryTable as $c) {
            if ($c->getId() == $id) {
                echo "Id:" . $c->getId();
                echo "Name:" . $c->getName();
            }
        }
    }


    function findByName($name){
        $db = database::getInstance();
        $size = sizeof($db->accessoryTable);
        foreach ($db->accessoryTable as $c) {
            if ($c->getName() == $name) {
                echo "Id:" . $c->getId();
                echo "Name:" . $c->getName();
            }
        }

    }
}

