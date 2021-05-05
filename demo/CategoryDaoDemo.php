<?php
require_once("../dao/CategoryDao.php") ;
class CategoryDaoDemo{
    function insertTest(){
        $db = new CategoryDao();
        $row= new category(1,"trung");
        $db->insert($row);
    }

    function selectInsert(){
        $db = new CategoryDao();
        $db->findAll();
    }

    function updatetest(){
        $db = new CategoryDao();
        $row= new category(1,"hung");
        $db->update($row);
    }

    function delete(){
        $db = new CategoryDao();
        $row= new category(1,"hung");
        $db->delete($row);
    }
}