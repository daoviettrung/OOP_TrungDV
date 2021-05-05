<?php
require_once("../dao/ProductDao.php") ;
class ProductDaoDemo{
    function insertTest(){
        $db = new ProductDao();
        $row= new product(1,"trung","abc");
        $db->insert($row);
    }

    function selectInsert(){
        $db = new ProductDao();
        $db->findAll();
    }

    function updatetest(){
        $db = new ProductDao();
        $row= new product(1,"trung","abc");
        $db->update($row);
    }

    function delete(){
        $db = new ProductDao();
        $row= new product(1,"trung","abc");
        $db->delete($row);
    }

    function findByIdTest(){
        $db = new ProductDao();
        $db->findById(1);
    }

    function findByIdName(){
        $db = new ProductDao();
        $db->findByName("trung");
    }
}