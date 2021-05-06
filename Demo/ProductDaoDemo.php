<?php
@ini_set('display_startup_errors',1);
@ini_set('display_errors',1);
require_once("../Dao/ProductDao.php");
require_once("../Entity/Product.php");

class ProductDaoDemo
{
    function insertTest()
    {
        $productDao = new ProductDao();
        $row= new Product(1, "trung", "abc");
        return $productDao->insert($row);
    }

    function selectTest()
    {
        $productDao = new ProductDao();
        return $productDao->findAll();
    }

    function updatetest()
    {
        $productDao = new ProductDao();
        $row= new product(1, "trung", "abc");
        return $productDao->update($row);
    }

    function delete()
    {
        $productDao = new ProductDao();
        $row= new product(1, "trung", "abc");
        return $productDao->delete($row);
    }

    function findByIdTest()
    {
        $productDao = new ProductDao();
        return $productDao->findById(2);
    }

    function findByNameTest()
    {
        $productDao = new ProductDao();
        return $productDao->findByName("trung");
    }
}
$productDaoDemo= new ProductDaoDemo();
$productDaoDemo->insertTest();
var_dump($productDaoDemo->selectTest());
