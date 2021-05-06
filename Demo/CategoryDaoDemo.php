<?php
require_once("../Dao/CategoryDao.php") ;
require_once("../Entity/Category.php") ;
class CategoryDaoDemo{
    function insertTest(){
        $db = new CategoryDao();
        $row= new Category(1,"trung","abc");
        return $db->insert($row);
    }

    function selectTest(){
        $db = new CategoryDao();
        return $db->findAll();
    }

    function updatetest(){
        $db = new CategoryDao();
        $row= new Category(1,"trung","abc");
        return $db->update($row);
    }

    function delete(){
        $db = new CategoryDao();
        $row= new Category(1,"trung","abc");
        return $db->delete($row);
    }

    function findByIdTest(){
        $db = new CategoryDao();
        return $db->findById(2);
    }

}
