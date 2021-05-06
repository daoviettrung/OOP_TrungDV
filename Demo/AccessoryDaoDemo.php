<?php
require_once("../Dao/AccessoryDao.php") ;
require_once("../Entity/Accessory.php") ;
class CategoryDaoDemo{
    function insertTest(){
        $db = new AccessoryDao();
        $row= new Accessory(1,"trung","abc");
        return $db->insert($row);
    }

    function selectTest(){
        $db = new AccessoryDao();
        return $db->findAll();
    }

    function updatetest(){
        $db = new AccessoryDao();
        $row= new Accessory(1,"trung","abc");
        return $db->update($row);
    }

    function delete(){
        $db = new AccessoryDao();
        $row= new Accessory(1,"trung","abc");
        return $db->delete($row);
    }

    function findByIdTest(){
        $db = new AccessoryDao();
        return $db->findById(2);
    }

}
