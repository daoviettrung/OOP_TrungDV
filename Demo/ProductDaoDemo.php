<?php
require_once("../Dao/ProductDao.php") ;
require_once("../Entity/Product.php") ;
class ProductDaoDemo{
    function insertTest(){
        $db = new ProductDao();
        $row= new Product(1,"trung","abc");
        return $db->insert($row);
    }

    function selectTest(){
        $db = new ProductDao();
        return $db->findAll();
    }

    function updatetest(){
        $db = new ProductDao();
        $row= new product(1,"trung","abc");
        return $db->update($row);
    }

    function delete(){
        $db = new ProductDao();
        $row= new product(1,"trung","abc");
        return $db->delete($row);
    }

    function findByIdTest(){
        $db = new ProductDao();
        return $db->findById(2);
    }

    function findByNameTest(){
        $db = new ProductDao();
        return $db->findByName("trung");
    }
}
