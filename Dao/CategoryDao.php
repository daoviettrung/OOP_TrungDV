<?php
@ini_set('display_startup_errors',1);
@ini_set('display_errors',1);
require_once("Database.php") ;
require_once( "BaseDao.php");
require_once( "contans.php");
class CategoryDao extends BaseDao 
{

    function findAll()
    {
        $db = database::getInstance();
        return $db->selectTable(CATEGORY);
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