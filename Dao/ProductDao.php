<?php
@ini_set('display_startup_errors',1);
@ini_set('display_errors',1);
require_once("Database.php") ;
require_once( "../Dao/IbaseDao.php");
require_once( "BaseDao.php");
require_once( "contans.php");

class ProductDao extends BaseDao implements Ibasedao
{

    function findAll()
    {
        $db = database::getInstance();
        return $db->selectTable(PRODUCT);
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

    function findByName($name){
        $data = $this->findAll();
        $temp= [];
        foreach ($data as $value) {
            if ($value->getName() == $name) {
                array_push($temp, $value);
            }
        }
        return $temp;

    }
    
}



