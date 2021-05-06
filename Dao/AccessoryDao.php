<?php
require_once("Database.php") ;
require_once("BaseDao.php");
require_once("contans.php");
class AccessoryDao extends BaseDao
{

    function findAll()
    {
        $db = database::getInstance();
        return $db->selectTable(ACCESSORY);
    }

    function findById($id)
    {
        $data = $this->findAll();

        foreach ($data as $value) {
            if ($value->getId() == $id) {
                return $value;
            }
        }
        return null;

    }
}

